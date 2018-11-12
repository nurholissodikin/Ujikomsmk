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
          <li class="active">Ubah Data Guru</li>
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
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('guru.update',$guru->id)}}" method="post" >
           <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                  <input type="text" name="a" class="form-control"  required="" value="{{$guru->nik}}">
                  </div></div>  

               
                  <div class="form-group">
                  <label class="control_label">Jenis Kelamin</label>
                  <div>
                  <input type="radio" name="c" required="" value="Laki-Laki" <?php if($guru->jk == "Laki-Laki") {echo "checked";} ?>>Laki-Laki
                  <input type="radio" name="c" required="" value="Perempuan" <?php if($guru->jk == "Perempuan") {echo "checked";} ?>>Perempuan</div>
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <div>
                  <textarea name="d" required="" class="form-control" >{{$guru->alamat}}</textarea> 
                  </div></div>  
                  <div class="form-group">
                  <label class="control_label">No HP</label>
                  <div>
                  <input type="number" name="e" class="form-control" required=""  value="{{$guru->nohp}}">
                  </div></div>
                    <div class="form-group">
                  <label class="control_label">Nama Pelajaran</label>
                  <div>
                  <select type="text" name="f" id="select2" class="form-control" >
                  @foreach($pelajaran as $data)
                   <option value="{{$data->id}}" required  <?php if($data->id ) {echo "selected";} ?>>{{$data->nama}}</option>
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
