@extends('layouts.super')

@section('content')

<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Ruangan</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
        
          <li class="active">Ubah Data Ruangan</li>
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
          

          <div ><a class="btn btn-primary" href="{{ route('ruangan.create')}}"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Ruangan</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                       <th>Kode Ruangan</th>
                      <th>Nama Ruangan</th>
                      <th>Lokasi</th>
                    <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($ruangan as $data)
                        <tr>
                            <td>{{$data->kode}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->lokasi}}</td>
                        <form action="{{route('ruangan.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                 </td>
                            <td>

                             <a href="{{ route('ruangan.edit',$data->id)}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
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
                <h4 class="modal-title">Isi Data Ruangan</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('ruangan.store')}}" method="post" >
                  {{csrf_field()}}

                    <div class="form-group">
                  <label class="control_label">Kode Ruangan</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>     

                  <div class="form-group">
                  <label class="control_label">Nama Ruangan</label>
                  <input type="text" name="b" class="form-control" required="">
                  </div>

                    <div class="form-group">
                  <label class="control_label">Lokasi</label>
                  <input type="text" name="c" class="form-control" required="">
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
  @foreach($ruangan as $data)
          <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Ruangan</h4>
              </div>
              <div class="modal-body">
              
       <form action="{{route('ruangan.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                  <label class="control_label">Kode Ruangan</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$data->kode}}">
                  </div>
                  
                   <div class="form-group">
                  <label class="control_label">Nama Ruangan</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$data->nama}}">
                  </div>

                   <div class="form-group">
                  <label class="control_label">Lokasi Ruangan</label>
                  <input type="text" name="c" class="form-control" required="" value="{{$data->lokasi}}">
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
