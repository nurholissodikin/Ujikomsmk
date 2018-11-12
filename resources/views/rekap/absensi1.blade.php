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
              <center><h3>Laporan Absensi</h3><br>
                <h6>Dari tanggal {{$a}} sampai tanggal {{$b}}</h6></center>
                    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                    <tr>
                    
                    <th>Tanggal</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($absensi as $data)
                        <tr>
                          
                           
                          <td>{{$data->tanggal}}</td>
              <td>{{$data->siswa->nama}}</td>
              <td>{{$data->kelas->nama}}</td>
              <td>{{$data->keterangan}}</td>
                            
                        
                        </tr>
                        @endforeach
                      </tbody>
                  </table>

                <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                </div>
            </div>
              </div>
             

          </div>
        </div>
		
@endsection