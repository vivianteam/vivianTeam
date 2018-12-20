@extends('masterAdmin')
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"> 
        <!-- eCommerce statistic -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">{{$totalOrder}}</h3>
                      <h6>New Orders</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning"></h3>
                      <h6>New Orders</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">{{$totalCustomer}}</h3>
                      <h6>Total Customers</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">{{$totalrequest}}</h3>
                      <h6>Total Request</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ eCommerce statistic -->
        <!-- Products sell and New Orders -->
        <div class="row match-height">
          <div class="col-xl-8 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                <div class="btn-group dropdown">
                  <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                  <div class="dropdown-menu animate" role="menu">
                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                    <a class="dropdown-item" href="#" role="menuitem">profit</a>
                  </div>
                </div>
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                  <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="new-orders" class="media-list position-relative">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">ID</th>
                          <th class="border-top-0">Date order</th>
                          <th class="border-top-0">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($showNewOrders as $showNewOrder)
                        <tr>
                          <td class="text-truncate">{{$showNewOrder->id}}</td>
                          <td class="text-truncate">{{$showNewOrder->date_order}}
                          </td>
                          <td class="text-truncate">{{number_format($showNewOrder->totalPrice)}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              {!! $showNewOrders->links() !!}
            </div>
          </div>
        </div>
        <!--/ Products sell and New Orders -->
        <!-- Recent Transactions -->
        <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">ID</th>
                        <th class="border-top-0">Product name</th>
                        <th class="border-top-0">Small cate</th>
                        <th class="border-top-0">Image</th>
                        <th class="border-top-0">Sold</th>
                        <th class="border-top-0">Inventory</th>
                        <th class="border-top-0">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt=0 ?>
                      @foreach($reportProducts as $reportProduct)
                                            <?php $stt=$stt+1 ?>

                      <tr>
                        <td class="text-truncate">{{$stt}}</td>
                        <td class="text-truncate"><a href="#">{{$reportProduct->name}}</a></td>
                        <td class="text-truncate">{{$reportProduct->nameSmallCate}}
                        </td>
                        <td class="text-truncate p-1"><img style='max-width:80px;max-height:80px' class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="{{asset('image/')}}/products/{{ $reportProduct->image }}"
                              alt="Avatar">
                        </td>
                        <td class="text-truncate">
                          {{$reportProduct->sold}}</button>
                        </td>
                        <td>{{$reportProduct->amount}}
                        </td>
                        <td > <button type="button" class="btn btn-sm btn-outline-danger round">{{$reportProduct->status}}</button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              {!! $reportProducts->links() !!}
            </div>
          </div>
        </div>
        <!--/ Recent Transactions -->
        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Report Day</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">ID</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Quanitily</th>
                        <th class="border-top-0">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt=0 ?>
                        @foreach($reportDays as $reportDay)
                      <?php $stt=$stt+1 ?>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>{{$stt}}</td>
                        <td class="text-truncate"><a href="#">{{$reportDay->date_order}}</a></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">{{$reportDay->totalQty}}</button>
                        </td>
                        <td class="text-truncate">{{number_format($reportDay->total)}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            {!! $showNewOrders->links() !!}
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Report Month</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                <form action="{{route('indexAdmin')}}"  method="GET">
                  <select id="projectinput6" value="{!! old('cmb_Small') !!}"  name="cmb_Small" class="form-control pull-right">

                            @for($stt=1; $stt<=12;$stt++)
                            <option value="{{$stt}}">{{$stt}}
                            </option>
                            @endfor
                  </select>
                  <button type="submit" class="btn btn-primary">
                      <i class="la la-check-square-o">
                      </i> Next
                    </button>
                </form>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">ID</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Quanitily</th>
                        <th class="border-top-0">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $stt=0 ?>
                        @foreach($reportMonths as $reportMonth)
                      <?php $stt=$stt+1 ?>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>{{$stt}}</td>
                        <td class="text-truncate"><a href="#">{{$reportMonth->date_order}}</a></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">{{$reportMonth->totalQty}}</button>
                        </td>
                        <td class="text-truncate">{{number_format($reportMonth->total)}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->
@endsection