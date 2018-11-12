<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Siswa;
use App\Kelas;
use App\Pelajaran;
use Illuminate\Http\Request;
use Session; 

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $siswa= Siswa::all();
          $nilai= Nilai::all();
           $pelajaran= Pelajaran::all();
            $kelas= Kelas::all();
            $a = Nilai::select(['id','nilai'])->where('id')->get();;
        return view('nilai.index',compact('siswa','nilai','pelajaran','kelas','a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $siswa= Siswa::all();
         $kelas= Kelas::all();
        
           $pelajaran= Pelajaran::all();
       return view('nilai.create')->with(compact('siswa','pelajaran','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        if ($request->a >= 0 && $request->a <= 100) {
           
 $nilai = new Nilai;
       
          $nilai->kelas_id = $request ->d;
          $nilai->pelajaran_id = $request ->b;
         $nilai->siswa_id = $request ->c;
          $nilai->nilai = $request ->a;
          $nilai->save();
        }
        else{
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Nilai Tidak Boleh Kurang dari 0 dan Tidak Lebih Dari 100",
            ]);
            return redirect()->route('nilai.index');
        }
        
 
        return redirect()->route('nilai.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $nilai =  Nilai::findOrFail($id);
          $pelajaran =  Pelajaran::all();
          $kelas= Kelas::all();
         if ($nilai->nilai >= $nilai->pelajaran->kkm) {
             $a="Lulus";
         }
         else{
            $a="Tidak Lulus";
         }
        return view('nilai.show',compact('nilai','a','pelajaran','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $nilai = Nilai::find($id);
          $siswa= Siswa::all();
          $kelas= Kelas::all();
           $pelajaran= Pelajaran::all();

        return view('nilai.edit')->with(compact('nilai','siswa','pelajaran','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        
              if ($request->a >= 0 && $request->a <= 100) {
                 $nilai= Nilai::findOrFail($id);
       $nilai->kelas_id = $request ->d;
          $nilai->pelajaran_id = $request ->b;
         $nilai->siswa_id = $request ->c;
          $nilai->nilai = $request ->a;
          $nilai->save();
        }
        else{
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Nilai Tidak Boleh Kurang dari 0 dan Tidak Lebih Dari 100",
            ]);
            return redirect()->route('nilai.index',$nilai->id);
        }
        return redirect()->route('nilai.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $nilai = Nilai::findOrFail($id);
        $nilai ->delete();
         return redirect()->route('nilai.index')->with('alert-success', 'Data Berhasil Dihapus.');
    
    }

     public function filter($id)
    {
        $siswa = Siswa::where('kelas_id', $id)->get();
        if($siswa->count() > 0){
            foreach ($siswa as $data) {
                echo '<option class="form-control" value="'.$data->id.'">'.$data->nama.'</option>';
            }
        }else{
            echo '<option class="form-control">Tidak Ada Hasil</option>';
        }
    }
}
