<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon_1.ico">
<title>DUFA 95-96 Organization</title>

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

<!-- sweet alerts -->
<link href="{{ asset('admin/assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">

<!-- Custom Files -->
<link href="{{ asset('admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />

<script src="{{ asset('admin/js/modernizr.min.js')}}"></script>

<!-- DataTables -->
<link href="{{ asset('admin/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/assets/summernote/summernote.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('admin/css/toastr.min.css')}}">
<link href="https://dufa9596.org/web/assets/img/favicon.png" rel="icon">

</head>



<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

@include('user.layouts.topbar')


    <!-- ========== Left Sidebar Start ========== -->

@include('user.layouts.sidebar')
    <!-- Left Sidebar End --> 



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->    
               
@yield('content')
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    {{-- <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>  
        </div>
    </div> --}}
    <!-- /Right-bar -->

@include('pages.partials.footer')


</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/waves.js')}}"></script>
<script src="{{ asset('admin/js/wow.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('admin/assets/chat/moment-2.2.1.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-detectmobile/detect.js')}}"></script>
<script src="{{ asset('admin/assets/fastclick/fastclick.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

<!-- sweet alerts -->
<script src="{{ asset('admin/assets/sweet-alert/sweet-alert.min.js')}}"></script>
<script src="{{ asset('admin/assets/sweet-alert/sweet-alert.init.js')}}"></script>

<!-- flot Chart -->
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('admin/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

<!-- Counter-up -->
<script src="{{ asset('admin/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('admin/js/jquery.app.js')}}"></script>

 <script src="{{ asset('admin/js/toastr.min.js')}}"></script>

<!-- Dashboard -->
<script src="{{ asset('admin/js/jquery.dashboard.js')}}"></script>

<!-- Chat -->
<script src="{{ asset('admin/js/jquery.chat.js')}}"></script>

<!-- Todo -->
<script src="{{ asset('admin/js/jquery.todo.js')}}"></script>

<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

<script src="{{ asset('admin/assets/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/assets/datatables/dataTables.bootstrap.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
</script>

<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

    <!--form validation init-->

    <script src="{{ asset('admin/assets/summernote/summernote.min.js')}}"></script>

    <script>
        $(function () {
            $('.summernote').summernote()
        })
    </script>


<script src="{{ asset('admin/js/sweetalert.min.js')}}"></script>


    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
    </script>

    <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

</body>
</html>