<?php

namespace App\Http\Controllers;
use App\Absensi;
use App\Kelas;
use App\Nilai;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
     public function index(){
    $absensi = Absensi::all();
    $kelas= Kelas::all();
        return view('rekap.absensi', compact('absensi','kelas'));
}
public function rekap(Request $request){
     	$a = $request->a;
        $b = $request->b;
       
        $absensi = Absensi::whereBetween('created_at', [$a, $b])->get();
        return view('rekap.absensi1', compact('absensi', 'a','b','kelas'));
}

public function index2(){
    $nilai = Nilai::all();
    $kelas= Kelas::all();
        return view('rekap.nilai', compact('nilai','kelas'));
}
public function rekap2(Request $request){
     	$a = $request->a;
        $b = $request->b;
       
        $nilai = Nilai::whereBetween('created_at', [$a, $b])->get();
        return view('rekap.absensi1', compact('nilai', 'a','b','kelas'));
}
}
