@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Jadwal</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li><a href="{{route('jadwal.index')}}">Data Jadwal</a></li>
          <li class="active">Ubah Data Jadwal</li>
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
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('jadwal.update',$jadwal->id)}}" method="post" >
           <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="demo-accordion" class="panel-group accordion">
                           <!-- Accordion title -->                              
        <div class="panel">
          
                              <!-- Accordion title -->
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-parent="#demo-accordion" ><b>Jadwal<b></a>
                                  </h4>
                              </div>
          
                              <!-- Accordion content -->
                             
              <div class="panel-body">
                  
                 

                   <div class="form-group">
                  <label class="control_label">Hari</label>
                  <div>
                 <select type="text" name="a" id="select" class="form-control" >
                    <option value="Senin" {{$jadwal->hari=='Senin' ? 'selected ':''}}>Senin</option>
                    <option value="Selasa"{{$jadwal->hari=='Selasa' ? 'selected ':''}}>Selasa</option>
                    <option value="Rabu" {{$jadwal->hari=='Rabu' ? 'selected ':''}}>Rabu</option>
                    <option value="Kamis" {{$jadwal->hari=='Kamis' ? 'selected ':''}}>Kamis</option>
                    <option value="Jumat" {{$jadwal->hari=='Jumat' ? 'selected ':''}}>Jumat</option>
                    <option value="Sabtu" {{$jadwal->hari=='Sabtu' ? 'selected ':''}}>Sabtu</option>
                  </select>
                  </div> </div>

                  <div class="form-group">
                  <label class="control_label">Jam</label>
                  <div>
                  <input type="time" name="b" class="form-control" value="{{$jadwal->jam}}">
                  </div>   </div>

                 <div class="form-group">
                  <label class="control_label">Nama Guru</label>
                  <div>
                  <select type="text" name="c" id="select3" class="form-control" >
                  @foreach($guru as $data)
                   <option value="{{$data->id}}"  <?php if($data->id ) {echo "selected";} ?>>{{$data->user->name}}</option>
                  @endforeach
                  </select>

                  </div>   </div>

                
                                     
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

   

