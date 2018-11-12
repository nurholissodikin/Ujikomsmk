@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Pelajaran</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
        
          <li class="active">Data Pelajaran</li>
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
        
          <div ><a class="btn btn-primary" href="{{route('pelajaran.create')}}"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Pelajaran</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                    <tr>
                      <th>Nama Pelajaran</th>
                      <th>KKM</th>
                    <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($pelajaran as $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->kkm}}</td>
                        <form action="{{route('pelajaran.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                               
                            <td>

                             <a href="{{route('pelajaran.edit',$data->id)}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
                            <button type="submit" class="btn btn-block-small btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus data ?');" ><i class="ti-trash"></i> Hapus</button>
                                {{csrf_field()}}
                            </td>
                                
                        </form>
                               
                           
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
                <h4 class="modal-title">Isi Data Pelajaran</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('pelajaran.store')}}" method="post" >
                  {{csrf_field()}}

                    <div class="form-group">
                  <label class="control_label">Nama Pelajaran</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>  

                    <div class="form-group">
                  <label class="control_label">KKM</label>
                  <input type="text" name="b" class="form-control" required="">
                  </div>                                    
               
               
              </div>
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                  </form>
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
   @foreach($pelajaran as $data)
         <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Pelajaran</h4>
              </div>
              <div class="modal-body">
              
      <form action="{{route('pelajaran.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                  <label class="control_label">Nama Pelajaran</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$data->nama}}">
                  </div>
                  
                   <div class="form-group">
                  <label class="control_label">KKM</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$data->kkm}}">
                  </div>
                
               
               
              </div>
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                  </form>
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        
        
        
@endforeach
       
@endsection
