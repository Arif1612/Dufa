<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="{{ URL::to('admin/images/favicon_1.ico')}}">

<title>Moltran - Responsive Admin Dashboard Template</title>

<!-- Base Css Files -->
<link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />

<!-- Font Icons -->
<link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

<!-- animate css -->
<link href="{{ asset('admin/css/animate.css')}}" rel="stylesheet" />

<!-- Waves-effect -->
<link href="{{ asset('admin/css/waves-effect.css')}}" rel="stylesheet">

<!-- Custom Files -->
<link href="{{ asset('admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/css/toastr.min.css')}}" rel="stylesheet" />

<script src="{{ asset('admin/js/modernizr.min.js')}}"></script>

</head>
<body>


<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
            <div class="bg-overlay"></div>
            <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Admin</strong> </h3>
        </div> 
        <div class="panel-body">
            @if ($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif

        <form class="form-horizontal m-t-20" action="{{ url('admin-login') }}" method="POST">
            
            @csrf
            
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control input-lg " type="email" required="" placeholder="Email" name="email">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" required="" placeholder="Password" name="password">
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                    
                </div>
            </div>
            
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-7">
                    <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="register.html">Create an account</a>
                </div>
            </div>
        </form> 
        </div>                                 
        
    </div>
</div>


<script>
    var resizefunc = [];
</script>
<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/waves.js')}}"></script>
<script src="{{ asset('admin/js/wow.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-detectmobile/detect.js')}}"></script>
<script src="{{ asset('admin/assets/fastclick/fastclick.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>


<!-- CUSTOM JS -->
<script src="{{ asset('admin/js/jquery.app.js')}}"></script>
</body>
</html>