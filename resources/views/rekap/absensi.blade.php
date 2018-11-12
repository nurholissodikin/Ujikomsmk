@extends('layouts.super')

@section('content')
<div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Data Absensi</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
         
          <li class="active">Data Absensi</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">


          

         
        <div class="panel">

              <div class="panel-heading">
                  <h3 class="panel-title">Data Absensi</h3>
              </div>
              <div class="panel-body">
                   <form action="{{url('laporanabsensi2')}}" method="post"> 
                  {{csrf_field()}}
                  <label>Dari Tanggal</label>
                  <input type="date" name="a" required="">
                  <label>Sampai Tanggal</label>
                  <input type="date" name="b" required="">
                  <input type="submit" name="submit" class="btn-btn info" value="submit">
                </form>
                  </table>
              </div>
          </div>
</div>
   
   
       
@endsection
