<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.9/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 17:04:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

   
       <title>SMK Assalaam</title>
<link rel="icon" href="{{ asset('img/logo.png')}}" type="image/png">


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('super/css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('super/css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('super/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('super/plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('super/plugins/pace/pace.min.js')}}"></script>


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('super/css/demo/nifty-demo.min.css')}}" rel="stylesheet">

    
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
    <div id="container" class="cls-container">
        
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay"></div>
        
        
        <!-- LOGIN FORM -->
        <!--===================================================-->
        <div class="cls-content">
            <br>
            <br><br><br>
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h3">SMK ASSALAAM</h1>
                        <p>Masukan Akun Anda</p>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
          <div class="form-group">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukan Email">
             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
          <div class="form-group">
             <input id="password" type="password" placeholder="Masukan password" class="form-control" name="password" required>
             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
         
          
                       
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                    </form>
                </div>
        
               
            </div>
        </div>
        <!--===================================================-->
        
        
        <!-- DEMO PURPOSE ONLY -->
        <!--===================================================-->
        <div class="demo-bg">
            <div id="demo-bg-list">
                <div class="demo-loading"><i class="psi-repeat-2"></i></div>
                <img class="demo-chg-bg bg-trans active" src="{{asset('super/img/bg-img/thumbs/bg-trns.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-1.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-2.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-3.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-4.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-5.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-6.jpg')}}" alt="Background Image">
                <img class="demo-chg-bg" src="{{asset('super/img/bg-img/thumbs/bg-img-7.jpg')}}" alt="Background Image">
            </div>
        </div>
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
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{{asset('super/js/demo/bg-images.js')}}"></script>

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 17:04:35 GMT -->
</html>

