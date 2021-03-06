<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Task Management System') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- DataTables -->
  <link href="http://127.0.0.1:8000/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css"> -->
        <link href="http://127.0.0.1:8000/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
      
  

        <link href="http://127.0.0.1:8000/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://127.0.0.1:8000/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="http://127.0.0.1:8000/assets/css/style.css" rel="stylesheet" type="text/css">

        @livewireStyles

        <!-- Scripts -->
        <!-- <script src=" ('js/app.js') " defer></script> -->
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <header id="topnav">
            
          <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Zoter-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="http://127.0.0.1:8000/assets/images/logo.png" alt="" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <!-- language-->
                            <li class="list-inline-item dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="http://127.0.0.1:8000/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right language-switch">
                                    <a class="dropdown-item" href="#"><img src="http://127.0.0.1:8000/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                    <a class="dropdown-item" href="#"><img src="http://127.0.0.1:8000/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                    <a class="dropdown-item" href="#"><img src="http://127.0.0.1:8000/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                    <a class="dropdown-item" href="#"><img src="http://127.0.0.1:8000/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                    <i class="ti-email noti-icon"></i>
                                    <span class="badge badge-danger noti-icon-badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" style="position: absolute; transform: translate3d(-222px, 70px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="http://127.0.0.1:8000/assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="http://127.0.0.1:8000/assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="http://127.0.0.1:8000/assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle"> </div>
                                        <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <!-- notification-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-bell noti-icon"></i>
                                    <span class="badge badge-success noti-icon-badge">21</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="http://127.0.0.1:8000/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"> 
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf 
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="mdi mdi-logout m-r-5 text-muted"></i>{{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                    </form>
                                    </a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                        
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu text-center">

                            <li class="has-submenu ">
                                <a href="{{ route('dashboard') }}"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-layers"></i>Users</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('admin') }}">Admin</a></li>
                                    <li><a href="{{ route('teacher') }}">Teacher</a></li>
                                    <li><a href="{{ route('student.pp') }}">Student</a></li>
                                    <!-- <li><a href="#">Accountant</a></li>
                                    <li><a href="#">Librarian</a></li> -->
                                    <!-- <li><a href="{{ route('client') }}">Client</a></li> -->
                                </ul>
                            </li>

                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-layers"></i>Assign</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('student-class-add-view') }}">Student's Class </a></li>
                                    <li><a href="{{ route('Class.Routine') }}">Class Routine</a></li>
                                    <!-- <li><a href="{{ route('client') }}">Client</a></li> -->
                                </ul>
                            </li>

                            <!-- <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-bullseye"></i>Class Room</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="#">Class 1</a></li>
                                            <li><a href="#">Class 2</a></li>
                                            <li><a href="#">Class 3</a></li>
                                            <li><a href="#">Class 4</a></li>
                                            <li><a href="#">Class 5</a></li>
                                            <li><a href="#">Class 6</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Class 7</a></li>
                                            <li><a href="#">Class 8</a></li>
                                            <li><a href="#">Class 9</a></li>
                                            <li><a href="#">Class 10</a></li>
                                            <li><a href="ui-pagination.html">Pagination</a></li>
                                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-badge.html">Badge</a></li>
                                            <li><a href="ui-carousel.html">Carousel</a></li>
                                            <li><a href="ui-video.html">Video</a></li>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                            <li><a href="ui-grid.html">Grid</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-gauge"></i>Subject Assign</a> -->
                                <!-- <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-editors.html">Form Editors</a></li>
                                            <li><a href="form-uploads.html">Form File Upload</a></li>
                                            <li><a href="form-mask.html">Form Mask</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="calendar.html">Calendar</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="charts-morris.html">Morris Chart</a></li>
                                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                            <li><a href="charts-flot.html">Flot Chart</a></li>
                                            <li><a href="charts-c3.html">C3 Chart</a></li>
                                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-material.html">Material Design</a></li>
                                            <li><a href="icons-ion.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                            <li><a href="icons-themify.html">Themify Icons</a></li>
                                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html"> Google Map</a></li>
                                            <li><a href="maps-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                            <!-- </li> -->

                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-layers"></i>Academic</a>
                                <ul class="submenu">
                                    <!-- <li><a href="{{ route('Class.Routine') }}">Class Routine</a></li> -->
                                    <li><a href="{{ route('Class.Room') }}">Class Room</a></li>
                                    <li><a href="{{ route('class') }}">Class</a></li>
                                    <li><a href="{{ route('subject') }}">Subject</a></li>
                                    <li><a href="{{ route('Department') }}">Department</a></li>
                                    <!-- <li><a href="#">Syllabus </a></li>
                                    <li><a href="#">Daily Attendence</a></li>
                                    <li><a href="#">Event Calender </a></li> -->
                                    <!-- <li><a href="{{ route('client') }}">Client</a></li> -->
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-google-pages"></i>Roles / Permissions</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{ route('roles') }}">Roles</a></li>
                                            <li><a href="{{ route('permission') }}">Permission</a></li>
                                            <li><a href="#">Asign Roles</a></li>
                                            <li><a href="#">Asign Permission</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-layers"></i>{{ Auth::user()->name}}</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('registration') }}"> {{ __('Student Registration') }}</a></li>
                                    <li><a href="{{ route('feculty-registration') }}"> {{ __('Feculty Registration') }}</a></li>
                                    <li><a href="{{ route('profile.show') }}">  {{ __('Change Credential') }}</a></li>
                                    <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf 
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                    </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        
                        
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
       
        <div class="min-h-screen bg-gray-100" style="margin-top:50px;">
     
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
 <!-- jQuery  -->
       <script src="http://127.0.0.1:8000/assets/js/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/modernizr.min.js"></script>
        <!-- <script src="assets/js/waves.js')"></script> -->
        <script src="http://127.0.0.1:8000/assets/js/jquery.nicescroll.js"></script>

        <script src="http://127.0.0.1:8000/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        
        <script src="http://127.0.0.1:8000/assets/plugins/skycons/skycons.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/plugins/raphael/raphael-min.js"></script>
         


        <!-- App js -->
        <script src="http://127.0.0.1:8000/assets/js/app.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/ajax.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/css/bootstrap.min.css"></script>