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
          <li><a href="{{route('ruangan.index')}}">Data Ruangan</a></li>
          <li class="active">Ubah Data Ruangan</li>
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
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('ruangan.update',$ruangan->id)}}" method="post" >
        <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Ruangan<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
            

                  <div class="form-group">
                  <label class="control_label">Kode Ruangan</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$ruangan->kode}}">
                  </div>
                  
                   <div class="form-group">
                  <label class="control_label">Nama Ruangan</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$ruangan->nama}}">
                  </div>

                   <div class="form-group">
                  <label class="control_label">Lokasi Ruangan</label>
                  <input type="text" name="c" class="form-control" required="" value="{{$ruangan->lokasi}}">
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