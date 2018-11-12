@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Pengguna</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li><a href="{{route('user.index')}}">Data Pengguna</a></li>
          <li class="active">Tambah Data Pengguna</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

<div id="demo-accordion" class="panel-group accordion">
                         
      <div class="panel">
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('user.store')}}" method="post" >
           {{csrf_field()}}
                      <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
              <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Akun<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>

                              <div>
                                <input id="name" type="text" placeholder="Name" class="form-control" id="demo-inline-inputmail" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>
                    
                         
                  
                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

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
                            <label for="password" class="control-label">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Permission</label>
                          <div>
                         <select id="select2" name="a" class="form-control">
                                <option value="guru">Guru</option>
                                <option value="karyawan">Karyawan</option>
                                 
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
</div>
@endsection
