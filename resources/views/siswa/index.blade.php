@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Siswa</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="demo-pli-home"></i></a></li>
          <li><a href="{{route('siswa.index')}}">Data Siswa</a></li>
          <li class="active">Data Siswa</li>
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
         

          <div >@role('admin')<a class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="ti-plus"></i> Tambah Data</a>
               @endrole</div>
        <div class="panel">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Jurusan</h3>
              </div>
              <div class="panel-body">
                  <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama siswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>No hp</th>
                      <th>Kelas</th>
                      <th>Jurusan</th>
                   @role('admin')
                    <th >Aksi</th>
@endrole
                    </tr>
                  </thead>
                  <tbody id="siswas">
                   @foreach($siswa as $data)
                        <tr>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jk}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->nohp}}</td>
                            <td>{{$data->kelas->nama}}</td>
                            <td>{{$data->jurusan->nama}}</td>
                            @role('admin')
                        <form action="{{route('jurusan.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                 </td>
                            <td>

                             <a href="#" data-toggle="modal" data-target="#edit{{$data->id}}" type="submit" class="btn btn-block-small btn-warning"><i class="ti-pencil-alt"></i> Ubah</i></a>
                            <button type="submit" class="btn btn-block-small btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus data ?');" ><i class="ti-trash"></i> Hapus</button>
                                {{csrf_field()}}
                            </td>
                                
                        </form>
                               @endrole
                           
                         </tr>
                          @endforeach 
                      </tbody>
                  </table>
              </div>
          </div>
               </div>
         
     <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Isi Data Siswa</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('siswa.store')}}" method="post" >
                  {{csrf_field()}}

                    <div class="form-group">
                  <label class="control_label">NIS</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>  

                    <div class="form-group">
                  <label class="control_label">Nama</label>
                  <input type="text" name="b" class="form-control" required="">
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Jenis Kelamin</label>
                  <div>
                  <input type="radio" name="c"  required="" value="Laki-Laki">Laki-Laki
                  <input type="radio" name="c"  required="" value="Perempuan">Perempuan
                  </div>
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="d" class="form-control" required=""></textarea> 
                  </div>  
                  <div class="form-group">
                  <label class="control_label">No HP</label>
                  <input type="number" name="e" class="form-control" required="">
                  </div>
                       <div class="form-group">
                  <label class="control_label">Nama Orang Tua</label>
                  <input type="text" name="o" class="form-control" required="">
                  </div>
                  <div class="form-group">
                  <label class="control_label">Nohp Orang Tua</label>
                  <input type="number" name="hp" class="form-control" required="">
                  </div>
                    <div class="form-group">
                  <label class="control_label">Kelas</label>
                  <select type="text" name="f" class="form-control" >
                  @foreach($kelas as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>
                  </div>        
                   <div class="form-group">
                  <label class="control_label">Jurusan</label>
                  <select type="text" name="g" class="form-control" >
                  @foreach($jurusan as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>

                  </div>                                    
               
               
             
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                  </div>
                 </div> 
             </form>
                </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
 @foreach($siswa as $data)
        <div class="modal fade" id="edit{{$data->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header btn-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Siswa</h4>
              </div>
              <div class="modal-body">
              
         <form action="{{route('siswa.update',$data->id)}}" method="POST" >
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                  <label class="control_label">NIS</label>
                  <input type="text" name="a" class="form-control" value="{{$data->nis}}">
                  </div>  

                    <div class="form-group">
                  <label class="control_label">Nama siswa</label>
                  <input type="text" name="b" class="form-control" value="{{$data->nama}}">
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Keterangan</label>
                  <div >
                  <input type="radio" name="c" required="" value="Laki-Laki" <?php if($data->jk == "Laki-Laki") {echo "checked";} ?>> Laki-Laki
          <input type="radio" name="c" required="" value="Perempuan" <?php if($data->jk == "Perempuan") {echo "checked";} ?>> Perempuan
        </div>
                  </div>  
                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="d" class="form-control" >{{$data->alamat}}</textarea> 
                  </div>  
                  <div class="form-group">
                  <label class="control_label">No HP</label>
                  <input type="number" name="e" class="form-control" value="{{$data->nohp}}">
                  </div>
                   <div class="form-group">
                  <label class="control_label">Nama Orang Tua</label>
                  <input type="text" name="o" class="form-control" value="{{$data->namaortu}}">
                  </div>
                  <div class="form-group">
                  <label class="control_label">Nohp Orangtua </label>
                  <input type="number" name="hp" class="form-control" value="{{$data->nohportu}}">
                  </div>
                     <div class="form-group">
                  <label class="control_label">Jurusan</label>
                  <select type="text" name="f" class="form-control" >
                  @foreach($kelas as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>

                  </div>        
                  <div class="form-group">
                  <label class="control_label">Jurusan</label>
                  <select type="text" name="g" class="form-control" >
                  @foreach($jurusan as $data)
                  <option value="{{$data->id}}">{{$data->nama}}</option>
                  @endforeach
                  </select>

                  </div>                        
               
               
             
              <div class="modal-footer">
               
                <div class="pull-right">
                <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
                 </div>
                 </div> 
             </form>
                </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
        
        
@endforeach
<script type="text/javascript">
        $(document).ready(function(){
            $('#kelas').on('change', function(e){
                var id = e.target.value;
                $.get('{{ url('merk')}}/'+id, function(data){
                    console.log(id);
                    console.log(data);
                    $('#siswas').empty();
                    $.each(data, function(index, element){
                        $('#siswas').append("<tr><td>"+element.nis+"</td><td>"+element.nama+"</td>"+
                        "<td>"+element.jk+"</td>"+
                        "<td>"+element.alamat+"</td>"+
                        "<td>"+element.nohp+"</td>"+
                        "<td>"+element.kelas_id+"</td>"+
                        "<td>"+element.jurusan_id+"</td></tr>");
                        
                    });
                });
            });
        });
    </script>
       
@endsection
