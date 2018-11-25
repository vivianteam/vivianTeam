@extends('masterAdmin')
@section('content')      
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
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
                        <th> Name :
                        </th>
                        <td>{{$users->username}}
                      </a>
                      </td>
                    </tr>
                  <tr>
                    <th>Phone :
                    </th>
                    <td>{{$users->phone}}
                    </td>
                  </tr>
                  <tr>
                    <th>Email:
                    </th>
                    <td>{{$users->email}}
                    </td>
                  </tr>
                  <tr>
                    <th>Adress:
                    </th>
                    <td>
                      {{$users->address}}
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
                      <span >{!!$stt!!}
                      </span>
                    </td>
                    <td>
                      <span >{{$detail['id_product']}}
                      </span>
                    </td>
                    <td align="right">
                      <span >{{number_format($detail['price'])}}
                      </span>
                    </td>
                    <td align="right">x 
                      <span >{{$detail['quanitily']}}
                      </span>
                    </td>
                    <td align="right">
                      <span  >{{number_format($detail['price']*$detail['quanitily'])}}
                      </span>
                    </td>
                    <td>
                      <button data-id="{{$detail['id']}}" data-product="{{$detail['id_product']}}" data-price="{{number_format($detail['price'])}}" data-quanitily="{{$detail['quanitily']}}" data-total2="{{number_format($detail['price']*$detail['quanitily'])}}" class="btn btn-info" data-toggle="modal" data-target="#editTest1">Edit</button>
                      &nbsp;
                      <button  onclick="dataRemove(191);" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeItem" data-placement="top" rel="tooltip" data-original-title="" title="Remove item">
                        <span class="glyphicon glyphicon-remove">
                        </span>Remove
                      </button>
                    </td>
                  </tr>
                  @endforeach
                  <tr>
                    <td  colspan="8">  
                      <button  type="button" class="btn btn-sm btn-success" data-title="Add new" data-toggle="modal" data-target="#addItem" data-placement="top" rel="tooltip" data-original-title="" title="Add new item">
                        <i class="fa fa-plus">
                        </i> Add product
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-6">
                  <table  class="table table-bordered">
                    <tr>
                      <th>Order status:
                      </th>
                      <td>
                        <a href="#">Mới
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
                        <a href="#" class="updateInfo" data-name="comment" data-type="textarea" data-pk="125" data-url="https://demo.s-cart.org/system_admin/shop_order_update" data-title="" >
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
                      <td align="right" class="data-subtotal">{{number_format($orders->totalPrice - 20000)}}
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping:
                      </td>
                      <td align="right">
                        <a href="#" class="updatePrice data-shipping"  data-name="shipping" data-type="text" data-pk="470" data-url="https://demo.s-cart.org/system_admin/shop_order_update" data-title="Nhập vào tiền ship">20,000
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
                      <td align="right" class="data-total">{{number_format($orders->totalPrice)}}
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
            <div class="modal fade" id="removeItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Xóa item
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;
                      </span>
                    </button>
                  </div>
                  <div class="modal-body ">
                    <p class="text-danger">
                      <span class="glyphicon glyphicon-warning-sign">
                      </span> Bạn có chắc sẽ xóa item này
                    </p>
                  </div>
                  <form>
                    <input  type="hidden" name="form_id" value="">
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                    <button id="removeItem-button" type="button" class="btn btn-primary">Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="editTest1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                  </div>
                  
                      {{csrf_field()}}
                    <div class="modal-body">
                      <form >
                        <input type="hidden" name="editItem-form" value="">
                        <table width="100%">
                          <tr>
                            <th style="width: 70px;">ID
                            </th>
                            <th style="width: 100px;">ID product
                            </th>
                            <th style="width: 70px;">Quantity
                            </th>
                            <th>Price
                            </th>
                            <th>Total
                            </th>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" disabled class="form_id_order form-control" id="form_id_order" name="form_id_order" >
                            </td>
                            <td>
                              <input type="text" disabled class="form_pro_order form-control" id="form_pro_order" name="form_pro_order">
                            </td>
                            <td>
                              <input type="number" class="form_qty_order form-control" id="form_qty_order" name="form_qty_order">
                            </td>
                            <td>
                              <input type="text" disabled class="form_price_order form-control" id="form_price_order" name="form_price_order" >
                            </td>
                            <td>
                              <input type="text" disabled class="form_total_price_order form-control" id="form_total_price_order" name="form_total_price_order" >
                            </td>
                          </tr>
                        </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  
                </div>
              </div>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Category</h4>
                  </div>
                    <div class="modal-body">
                      <form>
                        <input type="hidden" name="editItem-form" value="">
                        <table width="100%">
                          <tr>
                            <th style="width: 70px;">ID
                            </th>
                            <th style="width: 100px;">ID product
                            </th>
                            <th style="width: 70px;">Quantity
                            </th>
                            <th>Price
                            </th>
                            <th>Total
                            </th>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" disabled class="form_id_order form-control" id="form_id_order" name="form_id_order" >
                            </td>
                            <td>
                              <input type="text" disabled class="form_pro_order form-control" id="form_pro_order" name="form_pro_order">
                            </td>
                            <td>
                              <input type="number" class="form_qty_order form-control" id="form_qty_order" name="form_qty_order">
                            </td>
                            <td>
                              <input type="text" disabled class="form_price_order form-control" id="form_price_order" name="form_price_order" >
                            </td>
                            <td>
                              <input type="text" disabled class="form_total_price_order form-control" id="form_total_price_order" name="form_total_price_order" >
                            </td>
                          </tr>
                        </table>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                      </button>
                      <button type="button" class="btn btn-primary" id="editItem-button" >Update
                      </button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade " id="addItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Add product
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;
                      </span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <input type="hidden" name="_token" value="YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx">
                      <input type="hidden" name="addItem-form" value="125">
                      <table width="100%">
                        <tr>
                          <th>Product name
                          </th>
                          <th style="width: 150px;">ID order
                          </th>
                          <th style="width: 70px;">Quantity
                          </th>
                          <th>Price
                          </th>
                          <th style="width: 50px;">
                          </th>
                        </tr>
                        <tr>
                          <td>
                            <select required onChange="selectProduct($(this));" class="form_id form-control" name="form_id[]">
                              <option value="0">Vui lòng chọn sản phẩm
                              </option>
                              @foreach($parent as $item)
                              <option value="{!! $item["id"] !!}">{!! $item["name"]!!}
                              </option>
                              @endforeach
                            </select>
                          </td>
                          <td>
                            <input type="text" disabled class="form_sku form-control" name="form_sku[]" value="">
                          </td>
                          <td>
                            <input required type="number" class="form_qty form-control" name="form_qty[]" value="">
                          </td>
                          <td>
                            <input required type="text" class="form_price form-control" name="form_price[]" value="">
                          </td>
                          <td>
                            <input type="text" class="form_attr form-control" name="form_attr[]" value="">
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr id="addnew">
                          <td>
                            <p>
                            </p>
                            <button type="button" class="btn btn-sm btn-success" id="more-item">
                              <i class="fa fa-plus">
                              </i> Thêm nhiều hơn
                            </button>
                          </td>
                        </tr>
                      </table>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng
                    </button>
                    <button type="button" class="btn btn-primary" id="addItem-button">Thêm mới
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- // Basic form layout section end -->
  </div>
</div>
@endsection
