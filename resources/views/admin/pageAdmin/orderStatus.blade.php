@extends('masterAdmin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All order status
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID
                      </th>
                      <th>Date order
                      </th>
                      <th>Satatus
                      </th>
                      
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting">Shipping
                      </th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($orders as $order)
                    <?php $stt=$stt+1 ;
                    ?>
                    <?php
                      $status = $order->status;
                      $checks=$order->paid;
                    ?>
                    <tr>
                      <td >{!!$stt!!}
                      </td>
                      <td>{{$order->date_order}}
                      </td>
                      <td >
                      @if($checks == 0)
                          <button class="btn btn-success btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>new
                          </button>
                      @else
                          <button class="btn btn-warning btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>old
                          </button>
                      @endif
                      </td>
                      <td>
                      @if($checks == 0)
                          <button class="btn btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>Not sent
                          </button>
                      @else
                          <button class="btn btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>Sending
                          </button>
                      @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID
                      </th>
                      <th>Date order
                      </th>
                      <th>Satatus
                      </th>
                      
                      <th>Shipping
                      </th>
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
