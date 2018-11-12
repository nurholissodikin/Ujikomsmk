@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Jurusan</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li><a href="{{route('jurusan.index')}}">Data Jurusan</a></li>
          <li class="active">Tambah Data Jurusan</li>
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
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('jurusan.store')}}" method="post" >
           {{csrf_field()}}
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Jurusan<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                  
                 

                  <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Jurusan</label>
                            <div>
                                <input type="text" name="a" placeholder="Nama Jurusan" class="form-control" required="">                              
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

   

