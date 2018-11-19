@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-lg-12">
                @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!! Session::get('flash_message') !!}
                  </div>
                @endif
              </div>
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All order
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="{{route('getAddImageProduct')}}">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i> 
                  </button>
                </a>
              </div>
            </div>
            
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID user</th>
                            <th>Total price</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Date order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $stt=0 ?>
                      @foreach($orders as $order)
                    <?php $stt=$stt+1 ?>
                    <tr>
                        <td>{!!$stt!!}</td>
                        <td>{{$order->id_user}}</td>
                        <td>{{number_format($order->totalPrice)}}</td>
                        <td>{{$order->payment}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->date_order}}</td>
                        <td>
                          <a href="{{route('getEditManagementOrder',$order['id'])}}">
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                            <span class="glyphicon glyphicon-pencil">
                            </span>Edit
                            </button>
                          </a>
                          &nbsp;
                          <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeItem" data-placement="top" rel="tooltip" data-original-title="" title="Remove item">
                            <span class="glyphicon glyphicon-remove">
                            </span>Remove
                          </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID user</th>
                        <th>Total price</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Date order</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          @endsection
