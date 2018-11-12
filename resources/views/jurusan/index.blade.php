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
          <li class="active">Data Jurusan</li>
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
         

          <div ><a class="btn btn-primary" href="{{route('jurusan.create')}}"><i class="ti-plus"></i> Tambah Data</a>
              </div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Jurusan</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                    <tr>
                      <th>Nama Jurusan</th>
                    <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach($jurusan as $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                        <form action="{{route('jurusan.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                 </td>
                            <td>

                             <a href="{{ route('jurusan.edit',$data->id)}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
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
       
@endsection
