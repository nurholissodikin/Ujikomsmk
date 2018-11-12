@extends('layouts.super')

@section('content')
<br>
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
        <form id="demo-bv-accordion" class="form-horizontal" action="{{route('nilai.store')}}" method="post" >
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
                  
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama kelas</label>
                             <div>
                                <select id="kelas" name="d" class="form-control" required="">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                                </select>
                             </div>
                  </div>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Siswa</label>
                             <div>
                                <select id="ngaran" name="c" class="form-control" required="">
                              
                                </select>
                             </div>
                  </div>


                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Pelajaran</label>
                            <div>
                                <select name="b" id="select3"  class="form-control" required="">
                                @foreach($pelajaran as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                                </select>                              
                            </div>
                  </div>

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label">Nilai</label>
                            <div>
                                <input type="Number" name="a" placeholder="Nilai" class="form-control" required="">                              
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

   
    <script type="text/javascript">
  $(document).ready(function(){
    // $(document).on('change','.kelas', function(){
    //  console.log("Hm its change");

    //  var id_kelas=$(this).val();
    //  console.log(id_kelas);
    // });
    $('#kelas').change(function function_name() {
      $('#ngaran').html('');
       
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filter/kelas/' + $(this).val(),
        success : function(data){
          $('#ngaran').append(data);
        },
        error : function() {
          $('#ngaran').html('Tidak Ada Hasil');
        }

      });     
    })
    $('#kelasa').change(function function_name() {
   
        $('#ngarana').html('');
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filter/kelas/' + $(this).val(),
        success : function(data){
          $('#ngarana').append(data);
        },
        error : function() {
          $('#ngarana').html('Tidak Ada Hasil');
        }

      });     
    })

  });


</script>
