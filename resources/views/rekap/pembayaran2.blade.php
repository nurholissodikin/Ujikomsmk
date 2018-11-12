@extends('layouts.super')

@section('content')

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">


          

         
        <div class="panel">

              <div class="panel-heading">
                  <h3 class="panel-title"></h3>
              </div>
              <div class="panel-body">
                 <center><h3>Laporan Pembayaran</h3><br>
                <h6>Dari tanggal {{$a}} sampai tanggal {{$b}}</h6></center>
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                    <tr>
                    
                      <th>Tanggal</th>
                      <th>Jumlah Bayar</th>
                        <th>Nama Siswa</th>
                        <th>Karyawan</th>
                    <th >Total</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($pembayaran as $data)
                        <tr>
                          
                            <td>{{$data->tgl}}</td>
                            <td>{{$data->jumlahbayar}}</td>
                            <td>{{$data->siswa->nama}}</td>
                            <td>{{ Auth::user()->name }}</td>
                             <td>Rp.{{number_format($data->jumlahbayar)}}</td>
                          
                      
                        </tr>
                        </tbody>
                         @endforeach
                         <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td><b>Total : </b></td>
                           <td><b>Rp.{{number_format($sum)}}</b></td>
                         </tr>
                  
                </table>
                 <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                </div>
            </div>
              </div>
              
          </div>

   
   
       
@endsection

