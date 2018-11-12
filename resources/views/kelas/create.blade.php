@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Kelas</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li><a href="{{route('kelas.index')}}">Data Kelas</a></li>
          <li class="active">Tambah Data Kelas</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

<div id="demo-accordion" class="panel-group accordion">
                         
      <div class="panel">
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('kelas.store')}}" method="post" >
           {{csrf_field()}}
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Kelas</b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                  
                 

                   <div class="form-group">
                  <label class="control_label">Nama Kelas</label>
                  <div>
                  <input type="text" name="a" class="form-control" required="">
                  </div>  </div> 
      
                    <div class="form-group">
                  <label class="control_label">Nama Wali Kelas</label>
                  <div>
                  <select type="text" name="b" id="select" class="form-control" >
                  @foreach($guru as $data)
                  <option value="{{$data->id}}">{{$data->user->name}}</option>
                  @endforeach
                  </select>
                  </div> </div>

                   <div class="form-group">
                  <label class="control_label">Lokasi</label>
                  <div>
                  <select type="text" name="c" id="select2" class="form-control" >
                  @foreach($ruangan as $data)
                  <option value="{{$data->id}}">{{$data->lokasi}}</option>
                  @endforeach
                  </select>
                  </div>  </div>         

                
                                     
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

   

