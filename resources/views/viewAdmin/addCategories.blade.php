<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Shop category
    </title>
    @include("viewAdmin.elements.stylesheet")
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <b>S-cart
            </b>
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <img src="/image/img/scart-min.png">
          </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation
            </span>
          </a>
          <style>
            .search-form {
              width: 250px;
              margin: 10px 0 0 20px;
              border-radius: 3px;
              float: left;
            }
            .search-form input[type="text"] {
              color: #666;
              border: 0;
            }
            .search-form .btn {
              color: #999;
              background-color: #fff;
              border: 0;
            }
          </style>
          <form action="#" method="get" class="search-form" pjax-container>
            <div class="input-group input-group-sm ">
              <input type="text" name="keyword" class="form-control" placeholder="Search order id, email, phone or name">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search">
                  </i>
                </button>
              </span>
            </div>
          </form>
          <!-- Navbar Right Menu -->
          @include("viewAdmin.elements.NavbarRightMenu")
        </nav>
      </header>
      @include("viewAdmin.elements.menu")
      <div class="content-wrapper" id="pjax-container">
        <section class="content-header">
          <h1>
            Shop category
            <small> 
            </small>
          </h1>
          <!-- breadcrumb start -->
          <!-- breadcrumb end -->
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Create
                  </h3>
                  <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                      <a href="#" class="btn btn-sm btn-default" title="List">
                        <i class="fa fa-list">
                        </i>
                        <span class="hidden-xs">&nbsp;List
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                @include('admin.pageAdmin.error')
                <!-- /.box-header -->
                <!-- form start -->
                <form  accept-charset="UTF-8" class="form-horizontal" action="{!! route('getaddCategories')!!}" method="POST" enctype="multipart/form-data" pjax-container>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <div class="box-body">
                    <div class="fields-group">
                      <div class="form-group  ">
                        <label for="en__name" class="col-sm-2  control-label">Name
                        </label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-pencil fa-fw">
                              </i>
                            </span>
                            <input type="text" id="en__name" name="txt_CateName" value="" class="form-control en__name" placeholder="Input Name" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group  ">
                        <label for="en__description" class="col-sm-2  control-label">Description
                        </label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-pencil fa-fw">
                              </i>
                            </span>
                            <input type="text" id="en__description" name="txt_CateDecription" value="" class="form-control en__description" placeholder="Input Description" />
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group  ">
                        <label for="image" class="col-sm-2  control-label">Image
                        </label>
                        <div class="col-sm-8">
                          <input type="file" class="image" name="cateImage"  />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                      <div class="btn-group pull-right">
                        <button type="submit" class="btn btn-primary">Submit
                        </button>
                      </div>
                      <div class="btn-group pull-left">
                        <button type="reset" class="btn btn-warning">Reset
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
            </div>
          </div>
        </section>
        <script data-exec-on-popstate>
          $(function () {
            $(".parent").select2({
              "allowClear":true,"placeholder":{
                "id":"","text":"Parent category"}
            }
                                );
            $("input.image").fileinput({
              "overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{
                "image":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"}
              ,"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/","allowedFileTypes":["image"]}
                                      );
            $('.sort:not(.initialized)')
              .addClass('initialized')
              .bootstrapNumber({
              upClass: 'success',
              downClass: 'primary',
              center: true
            }
                              );
          }
           );
        </script>
      </div>
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          &nbsp;&nbsp;&nbsp;&nbsp;
          <strong>Version
          </strong>&nbsp;&nbsp; 2.0.4
        </div>
        <!-- Default to the left -->
        <strong>
          <a href="https://s-cart.org">S-Cart
          </a>
        </strong> Free Open Source eCommerce for Business
      </footer>
    </div>
    
    @include("viewAdmin.elements.script")
  </body>
</html>
