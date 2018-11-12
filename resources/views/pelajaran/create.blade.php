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
          <li><a href="{{route('pelajaran.index')}}">Data Pelajaran</a></li>
          <li class="active">Tambah Data Pelajaran</li>
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
      
<div id="demo-accordion" class="panel-group accordion">
                         
      <div class="panel">
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('pelajaran.store')}}" method="post" >
           {{csrf_field()}}
                      <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
              <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Pelajaran<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                                      <div class="form-group">
                  <label class="control_label">Nama Pelajaran</label>
                  <div>
                  <input type="text" name="a" class="form-control" required="">
                  </div>
                   </div>    

                    <div class="form-group">
                  <label class="control_label">KKM</label>
                  <div>
                  <input type="number" name="b" class="form-control" required="">
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
