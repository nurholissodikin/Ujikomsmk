<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 17:03:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

       <title>SMK Assalaam</title>
<link rel="icon" href="{{ asset('img/logo.png')}}" type="image/png">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('super/css/bootstrap.min.css')}}" rel="stylesheet">
   

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('super/css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('super/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
<link href="{{ asset('super/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">
<link href="{{ asset('super/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('super/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{ asset('super/plugins/pace/pace.min.js')}}"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('super/css/demo/nifty-demo.min.css')}}" rel="stylesheet">


        
    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('super/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('super/plugins/bootstrap-validator/bootstrapValidator.min.css')}}" rel="stylesheet">
    <link href="{{ asset('super/plugins/switchery/switchery.min.css')}}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css')}}" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/chosen/chosen.min.css')}}" rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet">


    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/select2/css/select2.min.css')}}" rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{ asset('super/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">



        
    <!--DataTables [ OPTIONAL ]-->
   

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="{{ asset('img/logo.png')}}"  class="navbar-brand">
                        <img src="{{ asset('img/logo.png')}}"  alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text"> SMKAssalaam</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Search-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li>
                            <div class="custom-search-form">
                                
                                <form>
                                    <!-- <div class="search-container collapse" id="nav-searchbox">
                                        <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                                    </div> -->
                                </form>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Search-->

                    </ul>
                    <ul class="nav navbar-top-links">


                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                       
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                      
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        
                                         <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                           <i class="demo-pli-unlock icon-lg icon-fw"></i> Keluar</a>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                       
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

         <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
            

                
                <!--Page con<br>tent-->
                <!--===================================================-->
                       @yield('content')
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    -->



                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="{{ asset('super/img/profile-photos/1.png')}}" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <p class="mnp-name">{{ Auth::user()->name }}</p>
                                            <span class="mnp-desc">{{ Auth::user()->email }}</span>
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                               
                                <!--================================-->
                                <!--End shortcut buttons-->

 
                               <ul id="mainnav-menu" class="list-group">
                        
                                    <!--Category name-->
                                    <li class="list-header">Navigation</li>
                        
                                    <!--Menu list item-->
                                    <li class="active-sub">
                                    @if (Auth::check()) 
                                        <a href="{{ url('/') }}">
                                            <i class="demo-pli-home"></i>
                                            <span class="menu-title">Beranda</span>
                                        </a>  
                                    @endif
                                        <!--Submenu-->
                                    </li>
                                     <li>@role('admin')
                                        <a href="#">
                                            <i class="demo-pli-receipt-4"></i>
                                            <span class="menu-title">Master Data</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="{{ route('jurusan.index') }}"><i class="ion-chevron-right"></i>Data Jurusan</a></li>
                                             <li><a href="{{ route('ruangan.index') }}"><i class="ion-chevron-right"></i>Data Ruangan</a></li>
                                              <li><a href="{{ route('pelajaran.index') }}"><i class="ion-chevron-right"></i>Data Pelajaran</a></li>
                                        </ul> @endrole
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-home"></i>
                                            <span class="menu-title">Data Sekolah</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                        @role('admin')
                                            <li><a href="{{ route('guru.index') }}"><i class="ion-chevron-right"></i> Guru</a></li>
                                            <li><a href="{{ route('kelas.index') }}"><i class="ion-chevron-right"></i> Kelas</a></li>
                                            <li><a href="{{ route('jadwal.index') }}"><i class="ion-chevron-right"></i> Jadwal</a></li>
                                           
                                        @endrole
                                        @role(['guru','admin','guru'])
                                            <li><a href="{{ route('siswa.index') }}"><i class="ion-chevron-right"></i> Siswa</a></li>
                                            <li><a href="{{ route('nilai.index') }}"><i class="ion-chevron-right"></i> Nilai</a></li>
                                             <li><a href="{{ route('absensi.index') }}"><i class="ion-chevron-right"></i> Absensi Siswa</a></li>
                                        @endrole
                                        @role(['karyawan','admin'])
                                            <li><a href="{{ route('pembayaran.index') }}"><i class="ion-chevron-right"></i> Pembayaran</a></li>

                                        @endrole
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-files"></i>
                                            <span class="menu-title">Laporan</span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                        @role(['karyawan','admin'])
                                            <li><a href="{{ url('laporanpembayaran') }}"><i class="ion-chevron-right"></i>Pembayaran</a></li>
                                        @endrole
                                        @role(['guru','admin'])
                                             <li><a href="{{ url('laporanabsensi') }}"><i class="ion-chevron-right"></i>Absensi</a></li>
                                        @endrole     
                                                                                        
                                        </ul>
                                    </li>
                                        @role('admin')
                                    <li>
                                    
                                        <a href="{{ route('user.index') }}">
                                            <i class="ti-user"></i>
                                            <span class="menu-title">Data pengguna</span>
                                        </a>  
                                
                                        <!--Submenu-->
                                    </li> 
                                        @endrole                
                                </ul>


                                <!--Widget-->
                                <!--================================-->
                              
                                <!--================================-->
                                <!--End widget-->

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->


        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->


            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pull-right">&#0169; 2017 Manajemen Sekolah</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
   <script src="{{asset('super/js/jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('super/js/bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('super/js/nifty.min.js')}}"></script>



    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{asset('super/js/demo/nifty-demo.min.js')}}"></script>


    
    <!--DataTables [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('super/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('super/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>


    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{asset('super/js/demo/tables-datatables.js')}}"></script>

    <link href="{{asset('super/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

     <script src="{{asset('super/plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>


    <!--Masked Input [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/masked-input/jquery.maskedinput.min.js')}}"></script>

    <script src="{{asset('super/js/demo/form-validation.js')}}"></script>

    <script src="{{asset('super/plugins/switchery/switchery.min.js')}}"></script>


    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>


    <!--Chosen [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/chosen/chosen.jquery.min.js')}}"></script>


    <!--noUiSlider [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/noUiSlider/nouislider.min.js')}}"></script>


    <!--Select2 [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/select2/js/select2.min.js')}}"></script>


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="{{asset('super/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>


    <!--Form Component [ SAMPLE ]-->
    <script src="{{asset('super/js/demo/form-component.js')}}"></script>
             <script type="text/javascript">

$('#select').select2();
                 $('#select2').select2();
     $('#select3').select2();
     $('#select4').select2();
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
   
  });
  $(document).ready(function(){
    // $(document).on('change','.kelas', function(){
    //  console.log("Hm its change");

    //  var id_kelas=$(this).val();
    //  console.log(id_kelas);
    // });
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

  $(document).ready(function(){
    // $(document).on('change','.kelas', function(){
    //  console.log("Hm its change");

    //  var kelas_id=$(this).val();
    //  console.log(kelas_id);
    // });
    $('#kelasasa').change(function function_name() {
      $('#ngaranana').html('');
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filtera/kelas/' + $(this).val(),
        success : function(data){
          $('#ngaranana').append(data);
        },
        error : function() {
          $('#ngaranana').html('Tidak Ada Hasil');
        }

      });     
    })
    $('#kelasa').change(function function_name() {
   
        $('#ngarana').html('');
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filter/kelasa/' + $(this).val(),
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

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 17:04:13 GMT -->
</html>



            
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    