@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Pembayaran</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
       
          <li class="active">Data Pembayaran</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
@if(Session::has('alert-success'))
              <div class="alert alert-success">
                    {{ Session::get('alert-success') }}
                </div>
          @endif
        

          <div ><a class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Pembayaran</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                     <thead>
                    <tr>
                    
                      <th>Tanggal</th>
                      <th>Jumlah Bayar</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Karyawan</th><!-- -->
                    <th >Aksi</th>
<!--  -->
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($pembayaran as $data)
                        <tr>
                          
                            <td>{{$data->tgl}}</td>
                            <td>{{$data->jumlahbayar}}</td>
                            <td>{{$data->siswa->nama}}</td>
                            <td>{{$data->kelas->nama}}</td>
                            <td>{{ Auth::user()->name }}</td>@role('karyawan')
                        <form action="{{route('pembayaran.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                               
                            <td>

                             <a href="#" data-toggle="modal" data-target="#edit{{$data->id}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
                            <button type="submit" class="btn btn-block-small btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus data ?');" ><i class="ti-trash"></i> Hapus</button>
                                {{csrf_field()}}
                            </td>
                                
                        </form>
                               @endrole
                           
                         </tr>
                          @endforeach 
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
               
          
     <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Isi Data Pembayaran</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('pembayaran.store')}}" method="post" >
                  {{csrf_field()}}

                    <div class="form-group">
                  <label class="control_label">Tanggal</label>
                  <input type="date" name="a" class="form-control" required="">
                  </div>  

                    <div class="form-group">
                  <label class="control_label">Jumlah Bayar</label>
                  <input type="number" name="b" class="form-control" required="">
                  </div> 
<div class="form-group">
            <label class="control-label">Kelas</label>
            <select class="form-control kelas" name="z" required="" id="kelasa">
              @foreach($kelas as $aa)
              <option value="{{$aa->id}}">{{$aa->nama}}
              </option>
              @endforeach
            </select>
            </div>
<div>
            <label class="control-label">Nama</label>
            <select class="form-control" name="c" required="" id="ngarana">
              <!-- @foreach($siswa as $dd)
              <option value="{{$dd->id}}">{{$dd->nama_siswa}}
              </option>
              @endforeach -->
            </select>
            </div>                                
               
                    
                
                  
               
             
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                 </div>
                 </div> 
             </form>
                </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
 @foreach($pembayaran as $data)
        <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Pembayaran</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('pembayaran.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                  <label class="control_label">Tanggal</label>
                  <input type="text" name="a" class="form-control" value="{{$data->tgl}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Jumlah Bayar</label>
                  <input type="number" name="b" class="form-control" value="{{$data->jumlahbayar}}">
                  </div>  

                <div class="form-group">
            <label class="control-label">Kelas</label>
            <select class="form-control" name="z" required="" id="kelas">
              @foreach($kelas as $aa)
              <option value="{{$aa->id}}">{{$aa->nama}}
              </option>
              @endforeach
            </select>
            </div>
<div>
            <label class="control-label">Nama</label>
            <select class="form-control" name="c" required="" id="ngaran">
              <!-- @foreach($siswa as $dd)
              <option value="{{$dd->id}}">{{$dd->nama_siswa}}
              </option>
              @endforeach -->
            </select>
               </div>
           
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                  </div>
                 </div> 
             </form>
                </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
        
        
@endforeach
   
@endsection
      