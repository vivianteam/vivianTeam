
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Order manager</title>
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
            Order manager
            <small> </small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box">
    
    <div class="box-header with-border">
        <div class="pull-right">
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a class="btn btn-sm btn-twitter" title="Export"><i class="fa fa-download"></i><span class="hidden-xs"> Export</span></a>
    <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="/system_admin/shop_order?_export_=all" target="_blank">All</a></li>
        <li><a href="/system_admin/shop_order?_export_=page%3A1" target="_blank">Current page</a></li>
        <li><a href="/system_admin/shop_order?_export_=selected%3A__rows__" target="_blank" class='export-selected'>Selected rows</a></li>
    </ul>
</div>
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="/system_admin/shop_order/create" class="btn btn-sm btn-success" title="New">
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
</div> <a class="btn btn-sm btn-primary grid-refresh" title="Refresh"><i class="fa fa-refresh"></i><span class="hidden-xs"> Refresh</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
    <label class="btn btn-sm btn-dropbox 5bcf397a10de5-filter-btn " title="Filter">
        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filter</span>
    </label>

    </div>
        </span>
    </div>

    <div class="box-header with-border hide" id="filter-box">
    <form action="https://demo.s-cart.org/system_admin/shop_order" class="form-horizontal" pjax-container method="get">

        <div class="row">
                        <div class="col-md-12">
                <div class="box-body">
                    <div class="fields-group">
                                                    <div class="form-group">
    <label class="col-sm-2 control-label"> ID</label>
    <div class="col-sm-8">
        <div class="input-group input-group-sm">
            <div class="input-group-addon">
            <i class="fa fa-pencil"></i>
        </div>

    <input type="text" class="form-control id" placeholder="ID" name="id" value="">
</div>    </div>
</div>
                                            </div>
                </div>
            </div>
                    </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info submit btn-sm"><i
                                        class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
                        </div>
                        <div class="btn-group pull-left " style="margin-left: 10px;">
                            <a href="https://demo.s-cart.org/system_admin/shop_order" class="btn btn-default btn-sm"><i
                                        class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th> </th>
                                        <th>ID<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_order?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                        <th>Email</th>
                                        <th>Khách hàng</th>
                                        <th>Tiền hàng</th>
                                        <th>Tiền Ship</th>
                                        <th>Giảm giá</th>
                                        <th>Tổng giá</th>
                                        <th>Đã thanh toán</th>
                                        <th>Status</th>
                                        <th>Ngày tạo</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="124" />
                    </td>
                                        <td >
                        124
                    </td>
                                        <td >
                        levantu.nd1997@gmail.com
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="124" data-toggle="collapse" data-target="#grid-collapse-124">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-124">
    <div id="grid-collapse-124" class="collapse"><br><span style="padding-left:20px;">Người nhận: levantu</span><br><span style="padding-left:20px;">Địa chỉ: hn hn</span><br><span style="padding-left:20px;">Số điện thoại: 0914731527</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        50,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-23 13:21:06
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/124"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="124" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="123" />
                    </td>
                                        <td >
                        123
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="123" data-toggle="collapse" data-target="#grid-collapse-123">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-123">
    <div id="grid-collapse-123" class="collapse"><br><span style="padding-left:20px;">Người nhận: dgdf</span><br><span style="padding-left:20px;">Địa chỉ: gdgsdg serg</span><br><span style="padding-left:20px;">Số điện thoại: 090125468</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-23 10:51:11
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/123"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="123" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="122" />
                    </td>
                                        <td >
                        122
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="122" data-toggle="collapse" data-target="#grid-collapse-122">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-122">
    <div id="grid-collapse-122" class="collapse"><br><span style="padding-left:20px;">Người nhận: A</span><br><span style="padding-left:20px;">Địa chỉ: A A</span><br><span style="padding-left:20px;">Số điện thoại: 01658843629</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-21 16:44:08
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/122"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="122" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="121" />
                    </td>
                                        <td >
                        121
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="121" data-toggle="collapse" data-target="#grid-collapse-121">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-121">
    <div id="grid-collapse-121" class="collapse"><br><span style="padding-left:20px;">Người nhận: Hung</span><br><span style="padding-left:20px;">Địa chỉ: 南陽市長岡 fgdfg</span><br><span style="padding-left:20px;">Số điện thoại: 09012345678</span><br><span style="padding-left:20px;"><span style="color:red;font-weight:bold;">Ghi chú:</span> dgdfgdfg</span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-19 21:48:06
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/121"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="121" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="120" />
                    </td>
                                        <td >
                        120
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="120" data-toggle="collapse" data-target="#grid-collapse-120">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-120">
    <div id="grid-collapse-120" class="collapse"><br><span style="padding-left:20px;">Người nhận: dfd</span><br><span style="padding-left:20px;">Địa chỉ: sdfsdf sdfsdfsdf</span><br><span style="padding-left:20px;">Số điện thoại: 09012345678</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        40,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        60,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-19 21:44:17
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/120"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="120" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="119" />
                    </td>
                                        <td >
                        119
                    </td>
                                        <td >
                        q@gmail.com
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="119" data-toggle="collapse" data-target="#grid-collapse-119">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-119">
    <div id="grid-collapse-119" class="collapse"><br><span style="padding-left:20px;">Người nhận: trucnguyen</span><br><span style="padding-left:20px;">Địa chỉ: viet nam viet nam</span><br><span style="padding-left:20px;">Số điện thoại: 0975236548</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        200,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        215,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-17 23:38:23
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/119"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="119" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="118" />
                    </td>
                                        <td >
                        118
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="118" data-toggle="collapse" data-target="#grid-collapse-118">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-118">
    <div id="grid-collapse-118" class="collapse"><br><span style="padding-left:20px;">Người nhận: krissanawat kaewsanmuang</span><br><span style="padding-left:20px;">Địa chỉ: rhtrthrth rthrth</span><br><span style="padding-left:20px;">Số điện thoại: 0843534534</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-17 06:42:22
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/118"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="118" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="117" />
                    </td>
                                        <td >
                        117
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="117" data-toggle="collapse" data-target="#grid-collapse-117">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-117">
    <div id="grid-collapse-117" class="collapse"><br><span style="padding-left:20px;">Người nhận: paul</span><br><span style="padding-left:20px;">Địa chỉ: Najjera Kazo</span><br><span style="padding-left:20px;">Số điện thoại: 0785297660</span><br><span style="padding-left:20px;"><span style="color:red;font-weight:bold;">Ghi chú:</span> Hi</span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-09 18:02:43
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/117"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="117" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="116" />
                    </td>
                                        <td >
                        116
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="116" data-toggle="collapse" data-target="#grid-collapse-116">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-116">
    <div id="grid-collapse-116" class="collapse"><br><span style="padding-left:20px;">Người nhận: zxcas4asd</span><br><span style="padding-left:20px;">Địa chỉ: Ha noi ba dinh ha noi</span><br><span style="padding-left:20px;">Số điện thoại: 0955071019</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-09 11:23:37
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/116"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="116" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="115" />
                    </td>
                                        <td >
                        115
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="115" data-toggle="collapse" data-target="#grid-collapse-115">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-115">
    <div id="grid-collapse-115" class="collapse"><br><span style="padding-left:20px;">Người nhận: ngnfg</span><br><span style="padding-left:20px;">Địa chỉ: sdhsdh ndfnjdf</span><br><span style="padding-left:20px;">Số điện thoại: 0956756746</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-08 18:14:53
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/115"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="115" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="114" />
                    </td>
                                        <td >
                        114
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="114" data-toggle="collapse" data-target="#grid-collapse-114">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-114">
    <div id="grid-collapse-114" class="collapse"><br><span style="padding-left:20px;">Người nhận: Test</span><br><span style="padding-left:20px;">Địa chỉ: Le Duc Tho vietnam</span><br><span style="padding-left:20px;">Số điện thoại: 0988606927</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-08 09:31:50
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/114"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="114" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="113" />
                    </td>
                                        <td >
                        113
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="113" data-toggle="collapse" data-target="#grid-collapse-113">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-113">
    <div id="grid-collapse-113" class="collapse"><br><span style="padding-left:20px;">Người nhận: sdfsdf</span><br><span style="padding-left:20px;">Địa chỉ: 123 123</span><br><span style="padding-left:20px;">Số điện thoại: 01234567890</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-07 22:14:36
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/113"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="113" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="112" />
                    </td>
                                        <td >
                        112
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="112" data-toggle="collapse" data-target="#grid-collapse-112">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-112">
    <div id="grid-collapse-112" class="collapse"><br><span style="padding-left:20px;">Người nhận: rtada</span><br><span style="padding-left:20px;">Địa chỉ: 1231addasd ádasdasd</span><br><span style="padding-left:20px;">Số điện thoại: 0166468236014</span><br><span style="padding-left:20px;"><span style="color:red;font-weight:bold;">Ghi chú:</span> đấ</span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-10-05 21:40:26
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/112"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="112" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="111" />
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="111" data-toggle="collapse" data-target="#grid-collapse-111">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-111">
    <div id="grid-collapse-111" class="collapse"><br><span style="padding-left:20px;">Người nhận: dũng</span><br><span style="padding-left:20px;">Địa chỉ: dũng dũng</span><br><span style="padding-left:20px;">Số điện thoại: 094949494545</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-28 09:37:05
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/111"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="111" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="110" />
                    </td>
                                        <td >
                        110
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="110" data-toggle="collapse" data-target="#grid-collapse-110">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-110">
    <div id="grid-collapse-110" class="collapse"><br><span style="padding-left:20px;">Người nhận: vhh</span><br><span style="padding-left:20px;">Địa chỉ: 86/26 nguyen huy tuong kjhkj</span><br><span style="padding-left:20px;">Số điện thoại: 0935147435</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        25,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        45,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-26 10:23:16
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/110"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="110" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="109" />
                    </td>
                                        <td >
                        109
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="109" data-toggle="collapse" data-target="#grid-collapse-109">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-109">
    <div id="grid-collapse-109" class="collapse"><br><span style="padding-left:20px;">Người nhận: viet</span><br><span style="padding-left:20px;">Địa chỉ: ha noi ha noi</span><br><span style="padding-left:20px;">Số điện thoại: 0966694980</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        30,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-25 18:52:30
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/109"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="109" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="108" />
                    </td>
                                        <td >
                        108
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="108" data-toggle="collapse" data-target="#grid-collapse-108">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-108">
    <div id="grid-collapse-108" class="collapse"><br><span style="padding-left:20px;">Người nhận: aaa</span><br><span style="padding-left:20px;">Địa chỉ: aaaa aaaaa</span><br><span style="padding-left:20px;">Số điện thoại: 0989653466</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        25,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        45,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-25 08:41:44
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/108"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="108" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="107" />
                    </td>
                                        <td >
                        107
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="107" data-toggle="collapse" data-target="#grid-collapse-107">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-107">
    <div id="grid-collapse-107" class="collapse"><br><span style="padding-left:20px;">Người nhận: fgh</span><br><span style="padding-left:20px;">Địa chỉ: ỷty ẻye</span><br><span style="padding-left:20px;">Số điện thoại: 076895684</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        25,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        45,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-24 15:59:29
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/107"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="107" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="106" />
                    </td>
                                        <td >
                        106
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="106" data-toggle="collapse" data-target="#grid-collapse-106">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-106">
    <div id="grid-collapse-106" class="collapse"><br><span style="padding-left:20px;">Người nhận: qrweqr</span><br><span style="padding-left:20px;">Địa chỉ: safsdafsd safsfds</span><br><span style="padding-left:20px;">Số điện thoại: 0112353534253</span><br></span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-24 11:55:30
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/106"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="106" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="105" />
                    </td>
                                        <td >
                        105
                    </td>
                                        <td >
                        N/A
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="105" data-toggle="collapse" data-target="#grid-collapse-105">
    <i class="fa fa-caret-right"></i> Thông tin nhận hàng
</a>
<template class="grid-expand-105">
    <div id="grid-collapse-105" class="collapse"><br><span style="padding-left:20px;">Người nhận: ádas</span><br><span style="padding-left:20px;">Địa chỉ: đâsd ádasd</span><br><span style="padding-left:20px;">Số điện thoại: 0123456789</span><br><span style="padding-left:20px;"><span style="color:red;font-weight:bold;">Ghi chú:</span> ádasd</span></span><br></div>
</template>
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        35,000
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <span >Mới</span>
                    </td>
                                        <td >
                        2018-09-24 10:02:55
                    </td>
                                        <td >
                        <a title="Show Customer detail" href="shop_order_edit/105"><i class="fa fa-edit"></i></a><a href="javascript:void(0);" data-id="105" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>20</b> of <b>40</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    
    <!-- Pagination viewAdmin.elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="https://demo.s-cart.org/system_admin/shop_order?page=2">2</a></li>
                
    <!-- Next Page Link -->
        <li class="page-item"><a class="page-link" href="https://demo.s-cart.org/system_admin/shop_order?page=2" rel="next">&raquo;</a></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="https://demo.s-cart.org/system_admin/shop_order?per_page=10" >10</option>
<option value="https://demo.s-cart.org/system_admin/shop_order?per_page=20" selected>20</option>
<option value="https://demo.s-cart.org/system_admin/shop_order?per_page=30" >30</option>
<option value="https://demo.s-cart.org/system_admin/shop_order?per_page=50" >50</option>
<option value="https://demo.s-cart.org/system_admin/shop_order?per_page=100" >100</option>
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

                    
$('.grid-expand').on('click', function () {
    if ($(this).data('inserted') == '0') {
        var key = $(this).data('key');
        var row = $(this).closest('tr');
        var html = $('template.grid-expand-'+key).html();

        row.after("<tr><td colspan='"+row.find('td').length+"' style='padding:0 !important; border:0px;'>"+html+"</td></tr>");

        $(this).data('inserted', 1);
    }

    $("i", this).toggleClass("fa-caret-right fa-caret-down");
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
                    url: '/system_admin/shop_order/' + id,
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

                    
$('.export-selected').click(function (e) {
    e.preventDefault();
    
    var rows = selectedRows().join(',');
    if (!rows) {
        return false;
    }
    
    var href = $(this).attr('href').replace('__rows__', rows);
    location.href = href;
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
                    url: '/system_admin/shop_order/' + id,
                    data: {
                        _method:'delete',
                        _token:'2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa'
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

                    
$('.grid-refresh').on('click', function() {
    $.pjax.reload('#pjax-container');
    toastr.success('Refresh succeeded !');
});

                    $('.5bcf397a10de5-filter-btn').click(function (e) {
    if ($('#filter-box').is(':visible')) {
        $('#filter-box').addClass('hide');
    } else {
        $('#filter-box').removeClass('hide');
    }
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
    LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
</script>

    @include("viewAdmin.elements.script")


</body>
</html>
