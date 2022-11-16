<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="" class="logo"><img src="{{ URL::to('web/assets/img/logo.png')}}" alt="" class="img-fluid"> <span>DUFA </span></a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>
                {{-- <form class="navbar-form pull-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                    </div>
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </form> --}}
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
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown hidden-xs">
                        
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification</li>
                            <li class="list-group">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left">
                                        <em class="fa fa-user-plus fa-2x text-info"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">New user registered</div>
                                        <p class="m-0">
                                           <small>You have 10 unread messages</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                               <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left">
                                        <em class="fa fa-diamond fa-2x text-primary"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">New settings</div>
                                        <p class="m-0">
                                           <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left">
                                        <em class="fa fa-bell-o fa-2x text-danger"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">Updates</div>
                                        <p class="m-0">
                                           <small>There are
                                              <span class="text-primary">2</span> new updates available</small>
                                        </p>
                                     </div>
                                  </div>
                                </a>
                               <!-- last list item -->
                                <a href="javascript:void(0);" class="list-group-item">
                                  <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                    </li>
                    {{-- <li class="hidden-xs">
                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                    </li> --}}
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                            @if ($user->image_path != null)
                                <img src="{{ asset('images/users/'.$user->image_path) }}" alt="" class="thumb-md img-circle">
                            @else
                                <img src="{{ URL::to('admin/images/users/avatar-1.jpg')}}" alt="" class="thumb-md img-circle">
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile') }}"><i class="md md-face-unlock"></i> Profile</a></li>
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
