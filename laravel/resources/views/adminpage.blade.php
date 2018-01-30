<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>Minton - Responsive Admin Dashboard Template</title>

  <link href="http://coderthemes.com/minton/plugins/switchery/switchery.min.css" rel="stylesheet">
  <link href="http://coderthemes.com/minton/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css">

  <link href="http://coderthemes.com/minton/dark/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/adminPage.css')}}" rel="stylesheet" type="text/css">
  <script src="{{ URL::asset('js/jquery-2.1.4.min.js')}}"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/modernizr.min.js"></script>
  <style type="text/css" class="">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
  <style id="__web-inspector-hide-shortcut-style__" type="text/css" class="">
  .__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
  {
      visibility: hidden !important;
  }
  </style>

<body class="fixed-left widescreen">
  
  <!-- Begin page -->
  <div id="wrapper">

      <!-- Top Bar Start -->
      <div class="topbar">

          <!-- LOGO -->
          <div class="topbar-left">
              <div class="text-center">
                  <a href="index.html" class="logo"><i class="mdi mdi-radar"></i> <span>Minton</span></a>
              </div>
          </div>

          <!-- Button mobile view to collapse sidebar menu -->
          <nav class="navbar-custom">

              <ul class="list-inline float-right mb-0">

                  <li class="list-inline-item notification-list hide-phone">
                      <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                          <i class="mdi mdi-crop-free noti-icon"></i>
                      </a>
                  </li>

                  <li class="list-inline-item notification-list">
                      <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                          <i class="mdi mdi-dots-horizontal noti-icon"></i>
                      </a>
                  </li>

                  <li class="list-inline-item dropdown notification-list">
                      <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <i class="mdi mdi-bell noti-icon"></i>
                          <span class="badge badge-pink noti-icon-badge">4</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                          <!-- item-->
                          <div class="dropdown-item noti-title">
                              <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                          </div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                              <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                              <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                          </a>

                          <!-- All-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                              View All
                          </a>

                      </div>
                  </li>

                  <li class="list-inline-item dropdown notification-list">
                      {{--  <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                         @if(Auth::user()->avatar!="")
                         {{--  {{Auth::user()->avatar}}  --}}
                         {{--  <img src="{{asset('/uploads/avatar/'.Auth::user()->avatar)}}" alt="user" class="rounded-circle">
                         @else
                         <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                         @endif
                          --}} 
                      </a>

                      <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('/uploads/avatar/'.Auth::user()->avatar)}}" alt="user" class="rounded-circle">
                    </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                          <!-- item-->
                          <div class="dropdown-item noti-title">
                              <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                          </div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-account-star-variant"></i> <span>Profile</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-settings"></i> <span>Settings</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-logout"></i> <span>Logout</span>
                          </a>

                      </div>
                  </li>

              </ul>

              <ul class="list-inline menu-left mb-0">
                  <li class="float-left">
                      <button class="button-menu-mobile open-left waves-light waves-effect">
                          <i class="mdi mdi-menu"></i>
                      </button>
                  </li>
                  <li class="hide-phone app-search">
                      <form role="search" class="">
                          <input type="text" placeholder="Search..." class="form-control">
                          <a href=""><i class="fa fa-search"></i></a>
                      </form>
                  </li>
              </ul>

          </nav>

      </div>
      <!-- Top Bar End -->


      <!-- ========== Left Sidebar Start ========== -->

      <div class="left side-menu">
          <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 505px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 505px;">
              <!--- Divider -->
              <div id="sidebar-menu">
                  <ul>

                      <li class="active">
                          <a href="dashboard" class="waves-effect waves-primary active"><i class="ti-home"></i><span> Dashboard </span></a>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="glyphicon glyphicon-user"></i> <span> User Management </span>
                              <span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="listuser">List Users</a></li>
                              <li><a href="user">Update Infomation</a></li>
                              <li><a href="deluser">Delete User</a></li>
                          </ul>
                      </li>

                      <li>
                          <a href="typography.html" class="waves-effect waves-primary"><i class="ti-infinite"></i><span> Typography </span><span class="badge badge-pink pull-right">1</span></a>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="fa fa-product-hunt"></i><span> Product Management </span> <span class="menu-arrow"></span> </a>
                          <ul class="list-unstyled">
                              <li><a href="listproduct">List Product</a></li>
                              <li><a href="addproduct">Add Product</a></li>
                              <li><a href="updateproduct">Update Product</a></li>
                              <li><a href="delproduct">Delete Product</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-spray"></i>
                              <span> Icons </span> <span class="menu-arrow"></span> </a>
                          <ul class="list-unstyled">
                              <li><a href="icons-materialdesign.html">Material Design</a></li>
                              <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                              <li><a href="icons-ionicons.html">Ion Icons</a></li>
                              <li><a href="icons-fontawesome.html">Font awesome</a></li>
                              <li><a href="icons-weather.html">Weather Icons</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="bom">BOM</a></li>
                              <li><a href="searcheat">Search</a></li>
                              <li><a href="form-validation.html">Form Validation</a></li>
                              <li><a href="form-wizard.html">Form Wizard</a></li>
                              <li><a href="form-wysiwig.html">WYSIWYG Editor</a></li>
                              <li><a href="form-summernote.html">Summernote</a></li>
                              <li><a href="form-uploads.html">Multiple File Upload</a></li>
                              <li><a href="form-xeditable.html">X-editable</a></li>
                          </ul>
                      </li>

                      <li class="menu-title">More</li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-menu-alt"></i><span> Tables </span> <span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="tables-basic.html">Basic Tables</a></li>
                              <li><a href="tables-datatable.html">Data Table</a></li>
                              <li><a href="tables-editable.html">Editable Table</a></li>
                              <li><a href="tables-responsive.html">Responsive Table</a></li>
                              <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                              <li><a href="tables-foo-tables.html">Foo Table</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-stats-up"></i><span> Charts </span> <span class="badge badge-primary pull-right">8</span> </a>
                          <ul class="list-unstyled">
                              <li><a href="chart-flot.html">Flot Chart</a></li>
                              <li><a href="chart-morris.html">Morris Chart</a></li>
                              <li><a href="chart-chartist.html">Chartist chart</a></li>
                              <li><a href="chart-nvd3.html">Nvd3 charts</a></li>
                              <li><a href="chart-chartjs.html">Chartjs charts</a></li>
                              <li><a href="chart-peity.html">Peity Charts</a></li>
                              <li><a href="chart-sparkline.html">Sparkline Charts</a></li>
                              <li><a href="chart-other.html">Other Chart</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-map"></i><span> Maps </span><span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="map-google.html"> Google Map</a></li>
                              <li><a href="map-vector.html"> Vector Map</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-email"></i><span> Mail </span> <span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="mail-inbox.html">Inbox</a></li>
                              <li><a href="mail-compose.html">Compose Mail</a></li>
                              <li><a href="mail-read.html">View Mail</a></li>
                          </ul>
                      </li>

                      <li class="menu-title">Extras</li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                          <ul class="list-unstyled">
                              <li><a href="pages-blank.html">Blank Page</a></li>
                              <li><a href="pages-login.html">Login</a></li>
                              <li><a href="pages-register.html">Register</a></li>
                              <li><a href="pages-recoverpw.html">Recover Password</a></li>
                              <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                              <li><a href="pages-confirmmail.html">Confirm Mail</a></li>
                              <li><a href="pages-404.html">404 Error</a></li>
                              <li><a href="pages-500.html">500 Error</a></li>
                          </ul>
                      </li>

                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-gift"></i><span> Extras </span> <span class="badge badge-success pull-right">12</span></a>
                          <ul class="list-unstyled">
                              <li><a href="extras-profile.html">Profile</a></li>
                              <li><a href="extras-team.html">Team Members</a></li>
                              <li><a href="extras-timeline.html">Timeline</a></li>
                              <li><a href="extras-invoice.html">Invoice</a></li>
                              <li><a href="extras-calendar.html">Calendar</a></li>
                              <li><a href="extras-email-template.html">Email template</a></li>
                              <li><a href="extras-maintenance.html">Maintenance</a></li>
                              <li><a href="extras-coming-soon.html">Coming-soon</a></li>
                              <li><a href="extras-gallery.html">Gallery</a></li>
                              <li><a href="extras-pricing.html">Pricing</a></li>
                              <li><a href="extras-faq.html">FAQ</a></li>
                              <li><a href="extras-treeview.html">Treeview</a></li>
                          </ul>
                      </li>
                      <li class="has_sub">
                          <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                          <ul>
                              <li class="has_sub">
                                  <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span></a>
                                  <ul style="">
                                      <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                      <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                      <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                              </li>
                          </ul>
                      </li>

                  </ul>

                  <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
          </div><div class="slimScrollBar" style="background: rgb(152, 166, 173); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 314.07px; visibility: visible;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
      </div>
      <!-- Left Sidebar End -->




      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->                      
      @yield('content')
      <!-- ============================================================== -->
      <!-- End Right content here -->
      <!-- ============================================================== -->


      <!-- Right Sidebar -->
      <div class="side-bar right-bar">
          <div class="">
              <ul class="nav nav-tabs tabs-bordered nav-justified">
                  <li class="nav-item">
                      <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                          Activity
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                          Settings
                      </a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane fade show active" id="home-2">
                      <div class="timeline-2">
                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">5 minutes ago</small>
                                  <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                              </div>
                          </div>

                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">30 minutes ago</small>
                                  <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                  <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                              </div>
                          </div>

                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">59 minutes ago</small>
                                  <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                  <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                              </div>
                          </div>

                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">1 hour ago</small>
                                  <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                              </div>
                          </div>

                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">3 hours ago</small>
                                  <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                  <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                              </div>
                          </div>

                          <div class="time-item">
                              <div class="item-info">
                                  <small class="text-muted">5 hours ago</small>
                                  <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                  <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="tab-pane" id="messages-2">

                      <div class="row m-t-20">
                          <div class="col-8">
                              <h5 class="m-0 font-15">Notifications</h5>
                              <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                          </div>
                          <div class="col-4 text-right">
                              <input type="checkbox" checked="" data-plugin="switchery" data-color="#3bafda" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(59, 175, 218); border-color: rgb(59, 175, 218); box-shadow: rgb(59, 175, 218) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                          </div>
                      </div>

                      <div class="row m-t-20">
                          <div class="col-8">
                              <h5 class="m-0 font-15">API Access</h5>
                              <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                          </div>
                          <div class="col-4 text-right">
                              <input type="checkbox" checked="" data-plugin="switchery" data-color="#3bafda" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(59, 175, 218); border-color: rgb(59, 175, 218); box-shadow: rgb(59, 175, 218) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                          </div>
                      </div>

                      <div class="row m-t-20">
                          <div class="col-8">
                              <h5 class="m-0 font-15">Auto Updates</h5>
                              <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                          </div>
                          <div class="col-4 text-right">
                              <input type="checkbox" checked="" data-plugin="switchery" data-color="#3bafda" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(59, 175, 218); border-color: rgb(59, 175, 218); box-shadow: rgb(59, 175, 218) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                          </div>
                      </div>

                      <div class="row m-t-20">
                          <div class="col-8">
                              <h5 class="m-0 font-15">Online Status</h5>
                              <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                          </div>
                          <div class="col-4 text-right">
                              <input type="checkbox" checked="" data-plugin="switchery" data-color="#3bafda" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(59, 175, 218); border-color: rgb(59, 175, 218); box-shadow: rgb(59, 175, 218) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <!-- /Right-bar -->

  </div>
  <!-- END wrapper -->



  <script>
      var resizefunc = [];
  </script>

  <!-- Plugins  -->
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.min.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/popper.min.js"></script>
  <!-- Popper for Bootstrap -->
  <script src="http://coderthemes.com/minton/dark/assets/js/bootstrap.min.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/detect.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/fastclick.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.slimscroll.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.blockUI.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/waves.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/wow.min.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.nicescroll.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.scrollTo.min.js"></script>
  <script src="http://coderthemes.com/minton/plugins/switchery/switchery.min.js"></script>
  
  <!-- Counter Up  -->
  <script src="http://coderthemes.com/minton/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="http://coderthemes.com/minton/plugins/counterup/jquery.counterup.min.js"></script>
  
  <!-- circliful Chart -->
  <script src="http://coderthemes.com/minton/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
  <script src="http://coderthemes.com/minton/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  
  <!-- skycons -->
  <script src="http://coderthemes.com/minton/plugins/skyicons/skycons.min.js" type="text/javascript"></script>
  
  <!-- Page js  -->
  <script src="http://coderthemes.com/minton/dark/assets/pages/jquery.dashboard.js"></script>
  
  <!-- Custom main Js -->
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.core.js"></script>
  <script src="http://coderthemes.com/minton/dark/assets/js/jquery.app.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        $('.circliful-chart').circliful();
    });
  
    // BEGIN SVG WEATHER ICON
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
                {"color": "#3bafda"},
                {"resizeClear": true}
                ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;
  
        for(i = list.length; i--; )
            icons.set(list[i], list[i]);
        icons.play();
    };
  
  </script>

</body></html>