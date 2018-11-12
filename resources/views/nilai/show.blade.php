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
          <li><a href="{{route('nilai.index')}}">Data Nilai</a></li>
          <li class="active">Detail Data Nilai</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
   

                 <div id="demo-accordion" class="panel-group accordion">
                         
      <div class="panel">
        <form id="demo-bv-accordion" class="form-horizontal" action="#" method="post" >
           {{csrf_field()}}
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Nilai<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                  <div class="form-group">
                  <label class="control_label">Nama </label>
                  <input type="text" name="a" class="form-control" required="" value="{{$nilai->siswa->nama}}" readonly="">
                  </div>
                  <div class="form-group">
                  <label class="control_label">Kelas </label>
                  <input type="text" name="a" class="form-control" required="" value=" {{$nilai->siswa->kelas->nama}}" readonly="">
                  </div>
                  <div class="form-group">
                  <label class="control_label">Nama Pelajaran </label>
                  <input type="text" name="a" class="form-control" required="" value=" {{$nilai->pelajaran->nama}}" readonly="">
                  </div>
                  <div class="form-group">
                  <label class="control_label">KKM </label>
                  <input type="text" name="a" class="form-control" required="" value=" {{$nilai->pelajaran->kkm}}" readonly="">
                  </div>
                  <div class="form-group">
                  <label class="control_label">Nilai </label>
                  <input type="text" name="a" class="form-control" required="" value=" {{$nilai->nilai}}" readonly="">
                  </div>
                   <div class="form-group">
                  <label class="control_label">Keterangan </label>
                  <input type="text"  class="form-control" required="" value=" {{$a}}" readonly="">
                  </div>
        


                 
                                    
               </div>
             </div>                 
        </div>
        
                      
                
          
        </div>
</div>
</div>
  
@endsection
