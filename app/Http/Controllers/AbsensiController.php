<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Siswa;
use App\Kelas;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $absensi= absensi::all();
          $siswa= Siswa::all();
            $kelas= Kelas::all();
        return view('absensi.index',compact('absensi','siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         $absensi = new absensi;
        $absensi ->keterangan = $request ->a;
         $absensi ->tanggal = $request ->b;
         $absensi ->kelas_id = $request ->z;
          $absensi ->siswa_id = $request ->c;
         
 $absensi ->save();
        return redirect()->route('absensi.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $absensi= absensi::findOrFail($id);
       $absensi ->keterangan = $request ->a;
         $absensi ->tanggal = $request ->b;
          $absensi ->kelas_id = $request ->z;
          $absensi ->siswa_id = $request ->c;
  $absensi ->save();
        return redirect()->route('absensi.index')->with('alert-success', 'Data Berhasil Di Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $absensi = absensi::findOrFail($id);
        $absensi ->delete();
         return redirect()->route('absensi.index')->with('alert-danger', 'Data Berhasil Dihapus.');
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
