@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Guru</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li class="active">Data Guru</li>
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
          

          <div ><a class="btn btn-primary" href="{{route('guru.create')}}"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Jurusan</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama Guru</th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>No hp</th>
                      <th>Nama Pelajaran</th>
                   
                    <th >Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($guru as $data)
                        <tr>
                             <td>{{$data->nik}}</td>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->user->email}}</td>
                            <td>{{$data->jk}}</td>
                               <td>{{$data->alamat}}</td>
                                  <td>{{$data->nohp}}</td>
                                         <td>{{$data->pelajaran->nama}}</td>
                        <form action="{{route('jurusan.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                 </td>
                            <td>

                             <a href="{{ route('guru.edit',$data->id)}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
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
                <h4 class="modal-title">Isi Data Guru</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('guru.store')}}" method="post" >
                  {{csrf_field()}}

                    <div class="form-group">
                  <label class="control_label">NIK</label>
                  <input type="number" name="a" class="form-control" required="">
                  </div>
                     <div class="form-group">
                  <label class="control_label">Nama</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control_label">Email</label>
                     
  
                            <div class="col-md-6 pull-left">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                     
               
  
                            <div class="col-md-6 pull-right">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                  <label class="control_label">Password</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control_label">Confirm Password</label> 

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                       
                          

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                 
                  <div class="form-group">
                  <label class="control_label">Jenis Kelamin</label>
                  <div >
                  <input type="radio" name="c" required="" value="Laki-Laki">Laki-Laki
                  <input type="radio" name="c" required="" value="Perempuan">Perempuan</div>
                  </div>  

                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="d" class="form-control" required=""></textarea> 
                  </div>  
                  <div class="form-group">
                   <label class="control_label">No HP</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control_label">Nama Pelajaran</label>
                     <div class="col-md-6">
                  <input type="number" name="e" class="form-control" required="">
                 </div>
                 <div class="col-md-6">
                  <select type="text" name="f" class="form-control"  >
                  @foreach($pelajaran as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>
</div>
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
 @foreach($guru as $data)
        <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Isi Data Guru</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('guru.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                  <label class="control_label">NIK</label>
                  <input type="number" name="a" class="form-control" value="{{$data->nik}}">
                  </div>  

                    <div class="form-group">
                  <label class="control_label">Nama Guru</label>
                 <input id="name" type="text" class="form-control" name="name" value="{{$data->user->name}}"  required autofocus>
                       
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Jenis Kelamin</label>
                  <div >
                  <input type="radio" name="c" required="" value="Laki-laki" <?php if($data->jk == "Laki-laki") {echo "checked";} ?>>Laki-laki
                  <input type="radio" name="c" required="" value="Perempuan" <?php if($data->jk == "Perempuan") {echo "checked";} ?>>Perempuan</div>
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="d" class="form-control" >{{$data->alamat}}</textarea> 
                  </div>  
                   <div class="form-group">
                   <label class="control_label">No HP</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="control_label">Nama Pelajaran</label>
                     <div class="col-md-6">
                  <input type="number" name="e" class="form-control" value="{{$data->nohp}}" required="">
                 </div>
                 <div class="col-md-6">
                  <select type="text" name="f" class="form-control" >
                  @foreach($pelajaran as $data)
                  <option value="{{$data->id}}"  <?php if($data->id ) {echo "selected";} ?>>{{$data->nama}}
              </option>
                  
                  @endforeach
                  </select>
</div>
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
