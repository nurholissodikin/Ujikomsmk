@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Nilai</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li class="active">Data Nilai</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

@include('layouts._flash')
      
      @if($errors->any())
      <div class="flash alert-danger">
        @foreach($errors->all() as $err)
          <li><span>{{ $err }}</span></li>
        @endforeach
      </div>
      @endif
@if(Session::has('alert-success'))
              <div class="alert alert-success">
                    {{ Session::get('alert-success') }}
                </div>
          @endif
        

          <div ><a class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Nilai</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                     <thead>
                    <tr>
                    
                      <th>Nama siswa</th>
                      <th>kelas</th>
                      <th>Pelajaran</th>
                        
                    <th >Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($nilai as $data)
                        <tr>
                          
                            <td>{{$data->siswa->nama}}</td>
                             <td>{{$data->siswa->kelas->nama}}</td>
                            <td>{{$data->pelajaran->nama}}</td>
                        <form action="{{route('nilai.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                 </td>
                            <td>

                             <a href="#" data-toggle="modal" data-target="#edit{{$data->id}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
                            <button type="submit" class="btn btn-block-small btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus data ?');" ><i class="ti-trash"></i> Hapus</button>
                             <a class="btn btn-primary" href="{{ route('nilai.show',$data->id)}}"><i class="fa fa-info"> Detail</i></a> 
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
                <h4 class="modal-title">Isi Data nilai</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('nilai.store')}}" method="post" >
                  {{csrf_field()}}

                    
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama kelas</label>
                             <div>
                                <select id="kelas" name="d" class="form-control" required="">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                                </select>
                             </div>
                  </div>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Siswa</label>
                             <div>
                                <select id="ngaran" name="c" class="form-control" required="">
                              
                                </select>
                             </div>
                  </div>


                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Pelajaran</label>
                            <div>
                                <select name="b"  class="form-control" required="">
                                @foreach($pelajaran as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                                </select>                              
                            </div>
                  </div>

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nilai</label>
                            <div>
                                <input type="Number" name="a" placeholder="Nilai" class="form-control" required="">                              
                            </div>
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
 @foreach($nilai as $data)
        <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data nilai</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('nilai.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                            <label class="control-label">Nama kelas</label>
                             <div>
                                <select id="kelasa" name="d" class="form-control" required="">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                                </select>
                             </div>
                  </div>
                  <div class="form-group">
                            <label class="control-label">Nama Siswa</label>
                             <div>
                                <select id="ngarana" name="c" class="form-control" required="">
                              
                                </select>
                             </div>
                  </div>

                   <div class="form-group">
                  <label class="control_label">Nama Pelajaran</label>
                  <select type="text" name="b" class="form-control" >
                  @foreach($pelajaran as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>

                  </div>  
                   <div class="form-group">
                  <label class="control_label">nilai</label>
                   @foreach($nilai as $dataa)
                  <input type="text" name="a" class="form-control" value="{{$dataa->nilai}}">
                @endforeach
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
