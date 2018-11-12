<?php

namespace App\Http\Controllers;

use App\Pelajaran;
use Illuminate\Http\Request;
use Session;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $pelajaran= Pelajaran::all();
         return view('pelajaran.index',compact('pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pelajaran.create');
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
        if ($request->b >= 0 && $request->b <= 100) {
           

          $pelajaran = new Pelajaran;
        $pelajaran ->nama = $request ->a;
          $pelajaran ->kkm = $request ->b;
           $pelajaran ->save();
           
}
        else{
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"KKM Tidak Boleh Kurang dari 0 dan Tidak Lebih Dari 100",
            ]);
            return redirect()->route('pelajaran.create');
        }  


        return redirect()->route('pelajaran.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $pelajaran= Pelajaran::findOrFail($id);
        return view('pelajaran.edit',compact('pelajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $pelajaran= Pelajaran::findOrFail($id);
          if ($request->b >= 0 && $request->b <= 100) {
      $pelajaran ->nama = $request ->a;
          $pelajaran ->kkm = $request ->b;
  $pelajaran ->save();
  }
        else{
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"KKM Tidak Boleh Kurang dari 0 dan Tidak Lebih Dari 100",
            ]);
            return redirect()->route('pelajaran.edit',$pelajaran->id);
        }  
        return redirect()->route('pelajaran.index')->with('alert-success', 'Data Berhasil Di Ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran ->delete();
         return redirect()->route('pelajaran.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
