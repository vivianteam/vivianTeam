@extends('masterAdmin')
@section('content')      
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="container box">
              <div class="box-header with-border">
                <h3 class="box-title">
                  <span class="glyphicon glyphicon-list-alt">
                  </span> Order detail {{$orders->id}}
                </h3>
                <div class="box-tools">
                  <div class="btn-group pull-right" style="margin-right: 10px">
                    <a href="https://demo.s-cart.org/system_admin/shop_order" class="btn btn-sm btn-default">
                      <i class="fa fa-list">
                      </i>&nbsp;List
                    </a>
                  </div>
                  <div class="btn-group pull-right" style="margin-right: 10px">
                    <a class="btn btn-sm btn-default form-history-back">
                      <i class="fa fa-arrow-left">
                      </i>&nbsp;Back
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <table class="table box table-bordered">
                  <tr>
                    <th>Name
                    </th>
                    <td>
                      <a href="#" class="updateInfoRequired" data-name="toname" data-type="text" data-pk="{{$orders->id}}" data-title="Thông tin người nhận" >{{$users->username}}
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th>Phone
                    </th>
                    <td>
                      <a href="#" class="updateInfoRequired" data-name="phone" data-type="text" data-pk="{{$orders->id}}"  data-title="Nhập số điện thoại" >{{$users->phone}}
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th>Email:
                    </th>
                    <td>{{$users->email}}
                    </td>
                  </tr>
                  <tr>
                    <th>Address
                    </th>
                    <td>
                      <a href="#" class="updateInfoRequired" data-name="address1" data-type="text" data-pk="{{$orders->id}}"  data-title="Địa chỉ 1" >{{$users->address}}
                      </a>
                    </td>
                  </tr>
                </table>
              </div>
              <table class="table box table-responsive">
                <thead>
                  <tr>
                    <th style="width: 50px;">ID
                    </th>
                    <th style="width: 100px;">ID product
                    </th>
                    <th>Price
                    </th>
                    <th style="width: 100px;">Quantity
                    </th>
                    <th>Total
                    </th>
                    <th>Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $stt=0 ?>
                  @foreach($details as $detail)
                  <?php $stt=$stt+1; ?>
                  <tr>
                    <td>
                      <span class="item_{{$detail['id']}}_id">{!! $stt !!}
                      </span>
                    </td>
                    <td>
                      <span class="item_{{$detail['id']}}_sku">{{$detail['id_product']}}
                      </span>
                    </td>
                    <td align="right">
                      <span class="item_{{$detail['id']}}_price">{{number_format($detail['price'])}}
                      </span>
                    </td>
                    <td align="right">x 
                      <span class="item_{{$detail['id']}}_qty">{{$detail['quanitily']}}
                      </span>
                    </td>
                    <td align="right">
                      <span  class="item_{{$detail['id']}}_total_price">{{number_format($detail['price']*$detail['quanitily'])}}
                      </span>
                    </td>
                    <td>
                      <button onclick="dataEdit({{$detail['id']}});" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                        <span class="glyphicon glyphicon-pencil">
                        </span>View
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-6">
                  <table  class="table table-bordered">
                    <tr>
                      <th>Order status:
                      </th>
                      <td>
                        <a href="#" >Mới
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <th>Shipping status:  
                      </th>
                      <td>
                        <a href="#">Chưa gửi
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <th>Order note: 
                      </th>
                      <td>
                        <a href="#" class="updateInfo" data-name="comment" data-type="textarea" data-pk="{{$orders->id}}" data-url="" data-title="" >
                        </a>
                      </td>
                    </tr>
                  </table>
                  <style type="text/css">
                    .history{
                      max-height: 50px;
                      max-width: 300px;
                      overflow-y: auto;
                    }
                  </style>
                  <!-- panel-group -->
                </div>
                <div class="col-md-6">
                  <table   class="table table-bordered">
                    <tr>
                      <td>Sub total:
                      </td>
                      <td align="right" class="data-subtotal">{{number_format($orders->totalPrice)}}
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping:
                      </td>
                      <td align="right">
                        <a href="#" class="updatePrice data-shipping"  data-name="shipping" data-type="text" data-pk="470"  data-title="Nhập vào tiền ship">20,000
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>Discount(-):
                      </td>
                      <td align="right">
                        <a href="#" class="updatePrice data-discount" data-name="discount" data-type="text" data-pk="471"  data-title="Nhập vào tiền discount">0
                        </a>
                      </td>
                    </tr>
                    <tr style="background:#f5f3f3;font-weight: bold;">
                      <td>Total:
                      </td>
                      <td align="right" class="data-total">{{number_format($orders->totalPrice + 20000)}}
                      </td>
                    </tr>
                    <tr>
                      <td>Received(-):
                      </td>
                      <td align="right">
                        <a href="#" class="updatePrice data-received" data-name="received" data-type="text" data-pk="473"  data-title="Nhập vào tiền discount">0
                        </a>
                      </td>
                    </tr>
                    <tr  style="font-weight:bold;"  class="data-balance">
                      <td>Còn lại:
                      </td>
                      <td align="right">{{number_format($orders->totalPrice)}}
                      </td>
                    </tr>
                    <tr id="update-status" style="display: none;">
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal fade" id="editItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">View detail
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;
                      </span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <input type="hidden" name="editItem-form" value="">
                      <table width="100%">
                        <tr>
                          <th style="width: 50px;">ID
                          </th>
                          <th style="width: 100px;">ID product
                          </th>
                          <th>Quantity
                          </th>
                          <th style="width: 100px;">Price
                          </th>
                          <th>Total
                          </th>
                        </tr>
                        <tr>
                          <td>
                            <input  type="text" disabled class="form_id form-control" name="form_id" value="">
                          </td>
                          <td>
                            <input   type="text" disabled class="form_sku form-control" name="form_sku" value="">
                          </td>
                          <td>
                            <input type="text" disabled class="form_qty form-control" name="form_qty" value="">
                          </td>
                          <td>
                            <input  type="text" disabled class="form_price form-control" name="form_price" value="">
                          </td>
                          <td>
                            <input  type="text" disabled class="form_total_price form-control" name="form_total_price" value="">
                          </td>
                        </tr>
                      </table>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      function dataEdit(id){
        $('#editItem [name="editItem-form"]').val({{$orders->id}});
        $('#editItem .form_id').val($('.item_'+id+'_id').html().toString().replace(/,/g,''));
        $('#editItem .form_sku').val($('.item_'+id+'_sku').html().toString().replace(/,/g,''));
        $('#editItem .form_qty').val($('.item_'+id+'_qty').html().toString().replace(/,/g,''));
        $('#editItem .form_price').val($('.item_'+id+'_price').html().toString().replace(/,/g,''));
        $('#editItem .form_total_price').val($('.item_'+id+'_total_price').html().toString().replace(/,/g,''));
        $('#editItem .form_price,#editItem .form_qty').change(function(){
          $('#editItem .form_total_price').val(
            parseInt($('#editItem .form_qty').val()) * parseInt($('#editItem .form_price').val())
          );
        }
                                                             );
      }
    </script>
    <!-- // Basic form layout section end -->
  </div>
</div>
@endsection
