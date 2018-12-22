<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- Mirrored from pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 21:10:30 GMT -->
  <head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Vivian eCommerce
    </title>
    <link rel="apple-touch-icon" href="{{ asset('css/Admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="{{ asset('css/Fonts/fonts/line-awesome/1.1/css/line-awesome.min.css')}}"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript">
    </script>
    <script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/myCss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/app.min.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/pages/timeline.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/css/pages/dashboard-ecommerce.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin/app-assets/vendors/css/tables/jsgrid/jsgrid.min.css')}}">
     <!-- zoom image-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magiczoomplus.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zoom.css')}}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
        data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                <i class="ft-menu font-large-1">
                </i>
              </a>
            </li>
            <li class="nav-item mr-auto">
              <a class="navbar-brand" href="{{route('indexAdmin')}}">
                <img class="brand-logo" alt="modern admin logo" src="{{ asset('css/Admin/app-assets/images/logo/logo.png')}}">
                <h3 class="brand-text">Vivian Admin
                </h3>
              </a>
            </li>
            <li class="nav-item d-none d-md-block float-right">
              <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right">
                </i>
              </a>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="la la-ellipsis-v">
                </i>
              </a>
            </li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link nav-link-expand" href="#">
                  <i class="ficon ft-maximize">
                  </i>
                </a>
              </li>
              </li>
            <li class="nav-item nav-search">
              <a class="nav-link nav-link-search" href="#">
                <i class="ficon ft-search">
                </i>
              </a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Modern...">
              </div>
            </li>
            </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"> @if(Auth::check()) {{Auth::user()->username}} @endif
                  </span>
                </span>
                <span class="avatar avatar-online">
                  <img src="{{ asset('css/Admin/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar">
                  <i>
                  </i>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <button type="button" class="btn btn-default btn-lg" id="myBtn" class="dropdown-item"  >
                  <i class="ft-user">
                  </i> Edit Profile
                </button>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="{{route('logoutAdmin')}}">
                  <i class="ft-power">
                  </i> Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @if (Auth::check())
    @if(Auth::user()->id_type==2)
      <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
              <a href="{{route('indexAdmin')}}">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Dashboard
                </span>
              </a>
            </li>
            <li class=" nav-item">
              <a href="#">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Products Management 
                </span>
              </a>
              <ul class="menu-content">
                <li>
                  <a class="menu-item" href="{{route('categories')}}" data-i18n="nav.dash.crypto">Categories
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('smallCategory')}}" data-i18n="nav.dash.ecommerce">Small categories
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('products')}}" data-i18n="nav.dash.sales">Products
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('imageProduct')}}" data-i18n="nav.dash.crypto">Images
                  </a>
                </li>
              </ul>
            </li>
            <li class=" nav-item">
              <a href="{{route('getContact')}}">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Contacts Management 
                </span>
              </a>
            </li>
            <li class=" nav-item">
              <a href="#">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Orders Management 
                </span>
              </a>
              <ul class="menu-content">
                <li>
                  <a class="menu-item" href="{{route('getManagementOrder')}}" data-i18n="nav.dash.crypto">Check order
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('getOrderStatus')}}" data-i18n="nav.dash.ecommerce">Order status
                  </a>
                </li>
              </ul>
            </li>
            <li class=" nav-item">
              <a href="#">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Requests Management  
                </span>
              </a>
              <ul class="menu-content">
                <li>
                  <a class="menu-item" href="{{route('request')}}" data-i18n="nav.dash.crypto">Requests
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('getManaComment')}}" data-i18n="nav.dash.ecommerce">Comments
                  </a>
                </li>
              </ul>
            </li>
            <li class=" nav-item">
              <a href="#">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Users Management 
                </span>
              </a>
              <ul class="menu-content">
                <li>
                  <a class="menu-item" href="{{route('getCustomer')}}" data-i18n="nav.dash.crypto">Customers
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('getemployess')}}" data-i18n="nav.dash.ecommerce">Employee
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    @elseif(Auth::user()->id_type==3)
      <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item">
            <a href="{{route('getContact')}}">
              <i class="la la-home">
              </i>
              <span class="menu-title" data-i18n="nav.dash.main">Contacts Management 
              </span>
            </a>
          </li>
          <li class=" nav-item">
            <a href="#">
              <i class="la la-home">
              </i>
              <span class="menu-title" data-i18n="nav.dash.main">Order Management 
              </span>
            </a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="{{route('getManagementOrder')}}" data-i18n="nav.dash.crypto">Check order
                </a>
              </li>
              <li>
                <a class="menu-item" href="{{route('getOrderStatus')}}" data-i18n="nav.dash.ecommerce">Order status
                </a>
              </li>
            </ul>
          </li>
          <li class=" nav-item">
              <a href="#">
                <i class="la la-home">
                </i>
                <span class="menu-title" data-i18n="nav.dash.main">Requests Management  
                </span>
              </a>
              <ul class="menu-content">
                <li>
                  <a class="menu-item" href="{{route('request')}}" data-i18n="nav.dash.crypto">Requests
                  </a>
                </li>
                <li>
                  <a class="menu-item" href="{{route('getManaComment')}}" data-i18n="nav.dash.ecommerce">Comments
                  </a>
                </li>
              </ul>
            </li>
        </ul>
      </div>
    </div>
    @endif
  @endif
  <!--  modal update account-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  <!-- end model -->
  <!-- flast message -->
  <!-- end flast message -->
  <!-- chức nội dung -->
  @yield('content')
  <!-- end chức nội dung -->
  <!-- BEGIN VENDOR JS-->
  <script>
  $(document).ready(function(){
      $("#myBtn").click(function(){
          $("#myModal").modal();
      });
  });
  </script>

  <script src="{{ asset('js/Admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript">
  </script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('js/Admin/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
          type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript">
  </script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('js/Admin/app-assets/js/core/app-menu.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/js/core/app.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/js/scripts/customizer.min.js')}}" type="text/javascript">
  </script>
  <script type="text/javascript">
    $("div.alert").delay(3000).slideUp();
  </script>
  <script type="js/myScript.js" type="text/javascript">
  </script>
  <script type="js/tableJs.js" type="text/javascript">
  </script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('js/Admin/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/tables/jsgrid/jsgrid.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/vendors/js/tables/jsgrid/griddata.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/Admin/app-assets/js/scripts/tables/jsgrid/jsgrid.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/jquery-3.3.1.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/jquery.dataTables.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('js/jquery.validate.min.js')}}" type="text/javascript">
  </script>
  <script language="JavaScript" src="{{ asset('js/magiczoomplus.js')}}" type="text/javascript"></script>
  <script language="JavaScript" src="{{ asset('js/zoom.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    //   $('#editTest1').on('show.bs.modal', function (event) {
    //     //console.log('tessttfzdhhhhhhhh');
    //       var button = $(event.relatedTarget) 
    //       var id = button.data('id') 
    //       var product = button.data('product') 
    //       var price = button.data('price') 
    //       var quanitily = button.data('quanitily') 
    //       var total2 = button.data('total2')
    //       var modal = $(this)
    //       modal.find('.modal-body #form_id_order').val(id);
    //       modal.find('.modal-body #form_pro_order').val(product);
    //       modal.find('.modal-body #form_qty_order').val(price);
    //       modal.find('.modal-body #form_price_order').val(quanitily);
    //       modal.find('.modal-body #form_total_price_order').val(total2);
    // })
    // })
    // $('#update').click(function () {
    //   $('#modal-content').modal({
    //       show: true
    //   });
    // });
    // $('#modal-content').modal({
    //     show: true
    // });
    // $('#modal-content').on('shown.bs.modal', function () {
    //   var button = $(event.relatedTarget)
    //   var id = button.data('id')
    //   var name = button.data('name')
    //   var price = button.data('price')
    //   var quantitily = button.data('quantitily')
    //   var total = button.data('total')
    //   var modal = $(this)
    //   modal.find('.modal-body #form_id_order').text(id)
    //   modal.find('.modal-body #form_pro_order').text(name)
    //   modal.find('.modal-body #form_qty_order').text(price)
    //   modal.find('.modal-body #form_price_order').text(quantitily)
    //   modal.find('.modal-body #form_total_price_order').text(total)
    // });
    //});
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
    }
  );
  </script>
  <script>
        $('#editItem').on('show.bs.modal', function (event) {
          alert("djfgjds");
          // var button = $(event.relatedTarget) ;
          // var id = button.data('id')
          // var name = button.data('name')
          // var email = button.data('email')
          // var phone = button.data('phone')
          // var message = button.data('message')
          // var modal = $(this)
          // modal.find('.modal-body #form_id').text(id)
          // modal.find('.modal-body #form_name').text(name)
          // modal.find('.modal-body #form_email').text(email)
          // modal.find('.modal-body #form_phone').text(phone)
          // modal.find('.modal-body #form_message').text(message)
        });
  </script>
  <!-- validate -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
  <script src="{{ asset('js/blog.js')}}"></script>
  <!-- END PAGE LEVEL JS-->
  </body>
<!-- Mirrored from pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 21:10:39 GMT -->
</html>
