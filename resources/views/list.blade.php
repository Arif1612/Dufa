{{--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Members List</title>

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

        <script src="{{ asset('admin/js/modernizr.min.js')}}"></script>

    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li><a class="active " href="/">Home</a></li>
                                        <li><a href="/aboutus"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>

                                        </li>
                                        <li><a href="/event">Events</a></li>
                                        <li><a href="/news">News</a></li>
                                        <li><a href="/notice">Notice</a></li>
                                        <li><a href="">Photo Gallery</a></li>

                                        <li><a href="/contact">Contact Us</a></li>


                                    </ul>

                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::to('admin/images/users/user.png')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="md md-settings-power"></i>{{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="md md-settings-power"></i>{{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>

                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Members </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('search') }}">Members list</a></li>
                                    <li><a href="{{ url('list') }}">List</a></li>

                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Payments </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('payment.history') }}">Payment History</a></li>

                                </ul>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Search Members</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-11">


                                                <form class="form-inline" method="GET" action="{{ route('search')}} ">

                                                    <div class="input-group mb-3">
                                                        <div class="input-group">
                                                            <input type="text" name="search" class="form-control" id="search" placeholder="Search Name or Email">
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Blood Group</div>
                                                            <select name="bloodgroup" class="form-control" id="bloodgroup">
                                                                <option disabled="disabled" selected="selected">Any</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">District</div>
                                                            <select name="district" class="form-control" id="district">
                                                                <option disabled="disabled" selected="selected">Any</option>
                                                                <option value="Barguna">Barguna</option>
                                                                <option value="Barisal">Barisal</option>
                                                                <option value="Bhola">Bhola</option>
                                                                <option value="Jhalokati">Jhalokati</option>
                                                                <option value="Patuakhali">Patuakhali</option>
                                                                <option value="Pirojpur">Pirojpur</option>
                                                                <option value="Bandarban">Bandarban</option>
                                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                                <option value="Chandpur">Chandpur</option>
                                                                <option value="Chittagong">Chittagong</option>
                                                                <option value="Cumilla">Cumilla</option>
                                                                <option value="Cox's Bazar">Cox's Bazar</option>
                                                                <option value="Feni">Feni</option>
                                                                <option value="Khagrachhari">Khagrachhari</option>
                                                                <option value="Lakshmipur">Lakshmipur</option>
                                                                <option value="Noakhali">Noakhali</option>
                                                                <option value="Rangamati">Rangamati</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                                <option value="Faridpur">Faridpur</option>
                                                                <option value="Gazipur">Gazipur</option>
                                                                <option value="Gopalganj">Gopalganj</option>
                                                                <option value="Kishoreganj">Kishoreganj</option>
                                                                <option value="Madaripur">Madaripur</option>
                                                                <option value="Manikganj">Manikganj</option>
                                                                <option value="Munshiganj">Munshiganj</option>
                                                                <option value="Narayanganj">Narayanganj</option>
                                                                <option value="Narsingdi">Narsingdi</option>
                                                                <option value="Rajbari">Rajbari</option>
                                                                <option value="Shariatpur">Shariatpur</option>
                                                                <option value="Tangail">Tangail</option>
                                                                <option value="Bagerhat">Bagerhat</option>
                                                                <option value="Chuadanga">Chuadanga</option>
                                                                <option value="Jessore">Jessore</option>
                                                                <option value="Jhenaidah">Jhenaidah</option>
                                                                <option value="Khulna">Khulna</option>
                                                                <option value="Kushtia">Kushtia</option>
                                                                <option value="Magura">Magura</option>
                                                                <option value="Meherpur">Meherpur</option>
                                                                <option value="Narail">Narail</option>
                                                                <option value="Satkhira">Satkhira</option>
                                                                <option value="Jamalpur">Jamalpur</option>
                                                                <option value="Mymensingh">Mymensingh</option>
                                                                <option value="Netrakona">Netrakona</option>
                                                                <option value="Sherpur">Sherpur</option>
                                                                <option value="Bogra">Bogra</option>
                                                                <option value="Chapainawabganj">Chapainawabganj</option>
                                                                <option value="Joypurhat">Joypurhat</option>
                                                                <option value="Naogaon">Naogaon</option>
                                                                <option value="Natore">Natore</option>
                                                                <option value="Pabna">Pabna</option>
                                                                <option value="Rajshahi">Rajshahi</option>
                                                                <option value="Sirajganj">Sirajganj</option>
                                                                <option value="Dinajpur">Dinajpur</option>
                                                                <option value="Gaibandha">Gaibandha</option>
                                                                <option value="Kurigram">Kurigram</option>
                                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                                <option value="Nilphamari">Nilphamari</option>
                                                                <option value="Panchagarh">Panchagarh</option>
                                                                <option value="Rangpur">Rangpur</option>
                                                                <option value="Thakurgaon">Thakurgaon</option>
                                                                <option value="Habiganj">Habiganj</option>
                                                                <option value="Moulvibazar">Moulvibazar</option>
                                                                <option value="Sunamganj">Sunamganj</option>
                                                                <option value="Sylhet">Sylhet</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Department</div>
                                                            <select name="department" class="form-control" id="department">
                                                                <option disabled="disabled" selected="selected">Any</option>
                                                                <option value="Bengali">Bengali</option>
                                                                <option value="English">English</option>
                                                                <option value="Arabic">Arabic</option>
                                                                <option value="Urdu and Persian Language">Urdu and Persian Language</option>
                                                                <option value="Palli and Sanskriti">Palli and Sanskriti</option>
                                                                <option value="History">History</option>
                                                                <option value="Philosophy">Philosophy</option>
                                                                <option value="Islamic Studies">Islamic Studies</option>
                                                                <option value="Islamic History &amp; Culture">Islamic History &amp; Culture</option>
                                                                <option value="Information Science and Library Management">Information Science and Library Management</option>
                                                                <option value="Theater and Music">Theater and Music</option>
                                                                <option value="World Religions and Culture">World Religions and Culture</option>
                                                                <option value="Economics">Economics</option>
                                                                <option value="Political Science">Political Science</option>
                                                                <option value="International Relations">International Relations</option>
                                                                <option value="Sociology">Sociology</option>
                                                                <option value="Mass Communication &amp; Journalism">Mass Communication &amp; Journalism</option>
                                                                <option value="Public Administration">Public Administration</option>
                                                                <option value="Anthropology">Anthropology</option>
                                                                <option value="Law">Law</option>
                                                                <option value="Management">Management</option>
                                                                <option value="Accounting &amp; Information Systems">Accounting &amp; Information Systems</option>
                                                                <option value="Marketing">Marketing</option>
                                                                <option value="Finance">Finance</option>
                                                                <option value="Physics">Physics</option>
                                                                <option value="Mathematics">Mathematics</option>
                                                                <option value="Chemistry">Chemistry</option>
                                                                <option value="Statistics">Statistics</option>
                                                                <option value="Applied Physics">Applied Physics</option>
                                                                <option value="Soil Science">Soil Science</option>
                                                                <option value="Botany">Botany</option>
                                                                <option value="Zoology">Zoology</option>
                                                                <option value="Biochemistry">Biochemistry</option>
                                                                <option value="Psychology">Psychology</option>
                                                                <option value="Microbiology">Microbiology</option>
                                                                <option value="Pharmacy">Pharmacy</option>
                                                                <option value="Geography &amp; Environment">Geography &amp; Environment</option>
                                                                <option value="Geology">Geology</option>
                                                                <option value="Applied Chemistry">Applied Chemistry</option>
                                                                <option value="Computer Science">Computer Science</option>
                                                                <option value="Institute of Fine Art">Institute of Fine Art</option>
                                                                <option value="Institute of Education and Research">Institute of Education and Research</option>
                                                                <option value="Institute of Statistical Research and Training">Institute of Statistical Research and Training</option>
                                                                <option value="Institute of Business Administration">Institute of Business Administration</option>
                                                                <option value="Institute of Social Welfare and Research">Institute of Social Welfare and Research</option>
                                                                <option value="Bangladesh College of Leather Engineering and Technology">Bangladesh College of Leather Engineering and Technology</option>
                                                                <option value="Institute of Leather Engineering and Technology">Institute of Leather Engineering and Technology</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </div>
                                                </form>

                                            </div>
                                                                        <div class="row">
                                <div class="col-md-12">

                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>

                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Bloodgroup</th>
                                                                    <th>Phone</th>
                                                                    <th>Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mission as $item)
                                                                <tr>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->email }}</td>
                                                                    <td>{{ $item->bloodgroup }}</td>
                                                                    <td>{{ $item->phone }}</td>
                                                                    <td>{{ $item->department }}</td>
                                                                </tr>

                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
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
            </div>
            <!-- /Right-bar -->


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
        <script src="{{ asset('admin/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{ asset('admin/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>


        <!-- CUSTOM JS -->
        <script src="{{ asset('admin/js/jquery.app.js')}}"></script>

    </body>
</html>
--}}

