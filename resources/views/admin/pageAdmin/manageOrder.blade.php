@extends('masterAdmin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
                      <th>ID user
                      </th>
                      <th>Total price
                      </th>
                      <th>Payment
                      </th>
                      <th>Satatus
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting">Check
                      </th>
                      <th>Date order
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting" >Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($orders as $order)
                    <?php $stt=$stt+1 ;
                    
                    
                    ?>
                    <?php  $status = $order->status;
                    ?>
                    <tr>
                      <td >{!!$stt!!}
                      </td>
                      <td>{{$order->id_user}}
                      </td>
                      <td>{{number_format($order->totalPrice)}}
                      </td>
                      <td style="width: 20px">{{$order->payment}}
                      </td>
                      @if('{{$order->paid}}' == '0')
                        <td >
                          <button class="btn btn-success btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>new
                          </button>
                        </td>
                      @else
                        <td >
                          <button class="btn btn-warning btn-xs" >
                            <span class="glyphicon glyphicon-pencil">
                            </span>old
                          </button>
                        </td>
                      @endif
                      <td style="text-align: center; width: 20px">
                      <a>
                        <div class="active{{$order->id}}">
                       @if($status == 0)
                          <img src="{{asset('image/')}}/img/cancel.png" onclick="ajaxToggoActiveStatusAdmin({{$order->id}}, 0)">
                       @else
                          <img src="{{asset('image/')}}/img/checked.png" onclick="ajaxToggoActiveStatusAdmin({{$order->id}}, 1)">
                       @endif
                       </div>
                     </a>
                      </td>
                      <td>{{$order->date_order}}
                      </td>
                      <td>
                        <a href="{{route('getEditManagementOrder2',$order['id'])}}">
                          <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                            <span class="glyphicon glyphicon-pencil">
                            </span>View
                          </button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID
                      </th>
                      <th>ID user
                      </th>
                      <th>Total price
                      </th>
                      <th>Payment
                      </th>
                      <th>Status
                      </th>
                      <th>Date order
                      </th>
                      <th>Action
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

  <script type="text/javascript">
        function ajaxToggoActiveStatusAdmin(id_user, presentStatus){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('postCheckOrder') }}",
                type: 'POST',
                cache: false,
                data: {id:id_user, status:presentStatus},
                success: function(data){
                    $('.active'+id_user).html(data);
                },
                error: function (){
                    alert('Lỗi đã xảy ra');
                }
            });
            return false;
        }
  </script>

  @endsection
