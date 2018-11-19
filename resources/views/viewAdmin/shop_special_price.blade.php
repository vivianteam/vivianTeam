
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Special price manager</title>
        @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/test/public/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S-cart</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset('images/img/scart-min.png')}}"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
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

<form action="https://demo.s-cart.org/system_admin/shop_order" method="get" class="search-form" pjax-container>
    <div class="input-group input-group-sm ">
        <input type="text" name="keyword" class="form-control" placeholder="Search order id, email, phone or name">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
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
            Special price manager
            <small> </small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        <script>
        $(function () {
            toastr.success('Login successful', null, []);
        });
    </script>

        <div class="row"><div class="col-md-12"><div class="box">
    
    <div class="box-header with-border">
        <div class="pull-right">
            
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="/system_admin/shop_special_price/create" class="btn btn-sm btn-success" title="New">
        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
    </a>
</div>

        </div>
        <span>
            <input type="checkbox" class="grid-select-all" />&nbsp;

<div class="btn-group">
    <a class="btn btn-sm btn-default">&nbsp;<span class="hidden-xs">Action</span></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="grid-batch-0">Delete</a></li>
            </ul>
</div>
        </span>
    </div>

    

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th> </th>
                                        <th>Sort<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_special_price?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                        <th>Product</th>
                                        <th>Special price</th>
                                        <th>Date start<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_special_price?_sort%5Bcolumn%5D=date_start&_sort%5Btype%5D=desc"></a></th>
                                        <th>Date end<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_special_price?_sort%5Bcolumn%5D=date_end&_sort%5Btype%5D=desc"></a></th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Last modify</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="15" />
                    </td>
                                        <td >
                        15
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: MEGA2560)
                    </td>
                                        <td >
                        200,000 VNĐ
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="15" />
                    </td>
                                        <td >
                        2018-09-22 18:20:14
                    </td>
                                        <td >
                        2018-09-22 18:20:14
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/15/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="15" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="14" />
                    </td>
                                        <td >
                        14
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: BX-5UTbnv)
                    </td>
                                        <td >
                        10,000 VNĐ
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="14" />
                    </td>
                                        <td >
                        2018-09-22 18:19:07
                    </td>
                                        <td >
                        2018-09-22 18:19:07
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/14/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="14" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="13" />
                    </td>
                                        <td >
                        13
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: LCD12864-3D)
                    </td>
                                        <td >
                        198,000 VNĐ
                    </td>
                                        <td >
                        2018-05-08 00:00:00
                    </td>
                                        <td >
                        2018-06-08 00:00:00
                    </td>
                                        <td >
                        test giam gia
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status"  data-key="13" />
                    </td>
                                        <td >
                        2018-05-09 15:15:37
                    </td>
                                        <td >
                        2018-08-28 22:13:45
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/13/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="13" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="12" />
                    </td>
                                        <td >
                        12
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: CLOCKFAN3)
                    </td>
                                        <td >
                        320,000 VNĐ
                    </td>
                                        <td >
                        2011-10-26 00:00:00
                    </td>
                                        <td >
                        2019-05-08 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="12" />
                    </td>
                                        <td >
                        2018-04-12 14:46:40
                    </td>
                                        <td >
                        2018-09-01 00:05:12
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/12/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="12" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="11" />
                    </td>
                                        <td >
                        11
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: 3DHLFD)
                    </td>
                                        <td >
                        100,000 VNĐ
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="11" />
                    </td>
                                        <td >
                        2018-03-27 14:13:47
                    </td>
                                        <td >
                        2018-03-27 14:18:44
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/11/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="11" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="9" />
                    </td>
                                        <td >
                        9
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: ANYCUBIC-P)
                    </td>
                                        <td >
                        100,000 VNĐ
                    </td>
                                        <td >
                        2018-03-19 00:00:00
                    </td>
                                        <td >
                        2018-03-31 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="9" />
                    </td>
                                        <td >
                        2018-02-08 15:51:45
                    </td>
                                        <td >
                        2018-03-25 02:49:07
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/9/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="9" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="7" />
                    </td>
                                        <td >
                        7
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: A4988)
                    </td>
                                        <td >
                        15,000 VNĐ
                    </td>
                                        <td >
                        2018-02-06 00:00:00
                    </td>
                                        <td >
                        2018-03-29 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="7" />
                    </td>
                                        <td >
                        2018-02-07 14:49:48
                    </td>
                                        <td >
                        2018-03-11 05:36:43
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/7/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="7" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="6" />
                    </td>
                                        <td >
                        6
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: TMC2208)
                    </td>
                                        <td >
                        30,000 VNĐ
                    </td>
                                        <td >
                        2018-02-07 00:00:00
                    </td>
                                        <td >
                        2018-03-10 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="6" />
                    </td>
                                        <td >
                        2018-02-07 14:45:19
                    </td>
                                        <td >
                        2018-02-07 15:17:42
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/6/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="6" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="4" />
                    </td>
                                        <td >
                        4
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: CLOCKFAN2)
                    </td>
                                        <td >
                        40,000 VNĐ
                    </td>
                                        <td >
                        <span style="color:red">NULL</span>
                    </td>
                                        <td >
                        2019-06-28 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="4" />
                    </td>
                                        <td >
                        2018-02-06 12:44:40
                    </td>
                                        <td >
                        2018-04-12 14:45:32
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/4/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="4" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="1" />
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        Easy Polo Black Edition<br>(SKU: 3D-CARBON1.75)
                    </td>
                                        <td >
                        150,000 VNĐ
                    </td>
                                        <td >
                        2018-01-28 00:00:00
                    </td>
                                        <td >
                        2019-04-30 00:00:00
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="1" />
                    </td>
                                        <td >
                        2018-02-06 12:05:20
                    </td>
                                        <td >
                        2018-04-12 14:45:17
                    </td>
                                        <td >
                        <a href="/system_admin/shop_special_price/1/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="1" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>10</b> of <b>10</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    
    <!-- Pagination viewAdmin.elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                
    <!-- Next Page Link -->
        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="https://demo.s-cart.org/system_admin/shop_special_price?per_page=10" >10</option>
<option value="https://demo.s-cart.org/system_admin/shop_special_price?per_page=20" selected>20</option>
<option value="https://demo.s-cart.org/system_admin/shop_special_price?per_page=30" >30</option>
<option value="https://demo.s-cart.org/system_admin/shop_special_price?per_page=50" >50</option>
<option value="https://demo.s-cart.org/system_admin/shop_special_price?per_page=100" >100</option>
        </select>
        &nbsp;<small>entries</small>
    </label>

    </div>
    <!-- /.box-body -->
</div>
</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    $('.grid-row-checkbox').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
    if (this.checked) {
        $(this).closest('tr').css('background-color', '#ffffd5');
    } else {
        $(this).closest('tr').css('background-color', '');
    }
});

var selectedRows = function () {
    var selected = [];
    $('.grid-row-checkbox:checked').each(function(){
        selected.push($(this).data('id'));
    });

    return selected;
}

                    
$('.grid-switch-status').bootstrapSwitch({
    size:'mini',
    onText: 'ON',
    offText: 'OFF',
    onColor: 'primary',
    offColor: 'default',
    onSwitchChange: function(event, state){

        $(this).val(state ? 'on' : 'off');

        var pk = $(this).data('key');
        var value = $(this).val();

        $.ajax({
            url: "/system_admin/shop_special_price/" + pk,
            type: "POST",
            data: {
                "status": value,
                _token: LA.token,
                _method: 'PUT'
            },
            success: function (data) {
                toastr.success(data.message);
            }
        });
    }
});

                    
$('.grid-row-delete').unbind('click').click(function() {

    var id = $(this).data('id');

    swal({
        title: "Are you sure to delete this item ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "Cancel",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: '/system_admin/shop_special_price/' + id,
                    data: {
                        _method:'delete',
                        _token:LA.token,
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

                    
$('.grid-select-all').iCheck({checkboxClass:'icheckbox_minimal-blue'});

$('.grid-select-all').on('ifChanged', function(event) {
    if (this.checked) {
        $('.grid-row-checkbox').iCheck('check');
    } else {
        $('.grid-row-checkbox').iCheck('uncheck');
    }
});

                    
$('.grid-batch-0').on('click', function() {

    var id = selectedRows().join();

    swal({
        title: "Are you sure to delete this item ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "Cancel",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: '/system_admin/shop_special_price/' + id,
                    data: {
                        _method:'delete',
                        _token:'IHV1X4CEqWPjJhBGzeABPXkIfOqqlVMS5uBlwYhj'
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

                    
$('.grid-per-pager').on("change", function(e) {
    $.pjax({url: this.value, container: '#pjax-container'});
});

            });
</script>
    </div>

    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        &nbsp;&nbsp;&nbsp;&nbsp;

        <strong>Version</strong>&nbsp;&nbsp; 2.0.4

    </div>
    <!-- Default to the left -->
    <strong><a href="https://s-cart.org">S-Cart</a></strong> Free Open Source eCommerce for Business
</footer>

</div>

<script>
    function LA() {}
    LA.token = "IHV1X4CEqWPjJhBGzeABPXkIfOqqlVMS5uBlwYhj";
</script>

    @include("viewAdmin.elements.script")


</body>
</html>
