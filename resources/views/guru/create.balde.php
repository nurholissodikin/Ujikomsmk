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
          <li><a href="{{route('guru.index')}}">Data Guru</a></li>
          <li class="active">Tambah Data Guru</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
<br>

<div id="demo-accordion" class="panel-group accordion">
                         
      <div class="panel">
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('guru.store')}}" method="post" >
           {{csrf_field()}}
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Guru<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                  

                  <div class="form-group">
                  <label class="control_label">NIK</label>
                  <div>
                  <input type="number" name="a" class="form-control" required="">
                  </div>
                  </div>

                  <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label class="control-label">Nama</label>
                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                              
                            </div>
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label">Email</label>
                            <div>
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            
                            </div>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label">Password</label>
                            <div>
                                  <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endiff                            
                            </div>
                  </div>
                  <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                            <label class="control-label">Konfirmasi Password</label>
                            <div>
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
                  <div>
                  <textarea name="d" class="form-control" required=""></textarea> 
                  </div>
                  </div> 

                   <div class="form-group">
                  <label class="control_label">No Hp</label>
                  <div >
                  <input type="number" name="e" class="form-control" required="" >
                 </div></div> 

                  <div class="form-group">
                      <label class="control_label">Nama Pelajaran</label>
                    <div>
                  <select type="text" name="f" id="select" class="form-control"  >
                  @foreach($pelajaran as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>
                  </div>
                  </div>
                                     
                        <div class="panel-footer clearfix" >
                              <div >
                                  <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Simpan</button>
                              </div>
                        </div>
                                  
        </div>
             </div>                 
        </div>
        
                      
                </form>
          
        </div>
</div>
 
@endsection

   
