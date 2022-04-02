<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libsstyle.css') }}">

    @yield('styles')

</head>

<body>
    <div class="nav-md">
        <div class="container body">
            <div class="main-container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title">
                            <a href="" class="site_title">
                                <i class="fa fa-paw"><span>Erp Admin Panel</span></i>
                            </a>

                            <div class="clearfix"></div>

                            {{-- menu profile quick info --}}
                            <div class="profile">
                                <div class="profile_pic">
                                    <img src="" alt="">
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2></h2>
                                    <br>
                                </div>
                            </div>
                            {{-- /menu profile quick info --}}
                            <br>

                            {{-- sidebar menu --}}
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3></h3>
                                    <ul class="nav side-menu">
                                        <li><a href=""><i class="fa fa-user"></i>User <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul><a href="">All Users</a></ul>
                                            <ul><a href="">Create User</a></ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- /sidebar menu --}}

                            {{-- /menu footer buttons --}}
                            <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Lock">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                            {{-- /menu footer buttons --}}
                        </div>
                    </div>

                    {{-- top navigation --}}
                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                </div>

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <img src="" alt="">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                                            <!--
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">100%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                -->
                                            <li>
                                                <a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                                <form id="logout-form" action="" method="POST" style="display: none;">
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">0</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{Auth::user()->photo ? URL::asset(Auth::user()->photo->file) : URL::asset('/images/user.png')}}" alt="Profile Image" /></span>
                                        <span>
                                          <span>{{ Auth::user()->name }}</span>
                                          <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                          No notification...
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                                -->
                                </ul>
                                </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- /top navigation --}}
                    {{-- page content --}}
                    <div class="right_col" role="main">
                        <div class="content">
                            @yield('content')
                        </div>

                        <div class="bg-footer">
                        </div>
                    </div>
                    {{-- /page content --}}

                    {{-- footer content --}}
                    <footer>
                        <!--
                            <div class="pull-right">
                                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                            </div>
                         -->
                        <div class="clearfix"></div>

                        {{-- @yield('footer') --}}
                    </footer>
                    {{-- /footer content --}}
                </div>
            </div>

            {{-- scripts --}}
            <script src="{{ asset('js/libs.js') }}"></script>
            @yield('scripts')
            <script>
                $(document).ready(function(){
                    // Fade in alert
                    $(".alert").addClass("in");

                    // Initialize tooltip
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>

        </div>
    </div>
</body>

</html>