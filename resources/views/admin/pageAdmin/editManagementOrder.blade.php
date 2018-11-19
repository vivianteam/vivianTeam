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
                      <span class="item_191_id">{!!$stt!!}
                      </span>
                    </td>
                    <td>
                      <span class="item_191_sku">{{$detail['id_product']}}
                      </span>
                    </td>
                    <td align="right">
                      <span class="item_191_price">{{number_format($detail['price'])}}
                      </span>
                    </td>
                    <td align="right">x 
                      <span class="item_191_qty">{{$detail['quanitily']}}
                      </span>
                    </td>
                    <td align="right">
                      <span  class="item_191_total_price">{{number_format($detail['price']*$detail['quanitily'])}}
                      </span>
                    </td>
                    <td>
                      <button onclick="dataEdit(191);" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                        <span class="glyphicon glyphicon-pencil">
                        </span>Edit
                      </button>
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
                        <a href="#" class="updateStatus" data-name="status" data-type="select" data-source ="[{&quot;value&quot;:0,&quot;text&quot;:&quot;M\u1edbi&quot;},{&quot;value&quot;:1,&quot;text&quot;:&quot;\u0110ang x\u1eed l\u00fd&quot;},{&quot;value&quot;:2,&quot;text&quot;:&quot;T\u1ea1m gi\u1eef&quot;},{&quot;value&quot;:3,&quot;text&quot;:&quot;H\u1ee7y b\u1ecf&quot;},{&quot;value&quot;:4,&quot;text&quot;:&quot;Ho\u00e0n th\u00e0nh&quot;},{&quot;value&quot;:5,&quot;text&quot;:&quot;Failed&quot;}]"  data-pk="125" data-value="0" data-url="https://demo.s-cart.org/system_admin/shop_order_update" data-title="Thay đổi trạng thái đơn hàng">Mới
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <th>Shipping status:  
                      </th>
                      <td>
                        <a href="#" class="updateStatus" data-name="shipping_status" data-type="select" data-source ="[{&quot;value&quot;:0,&quot;text&quot;:&quot;Ch\u01b0a g\u1eedi&quot;},{&quot;value&quot;:1,&quot;text&quot;:&quot;\u0110ang g\u1eedi&quot;},{&quot;value&quot;:2,&quot;text&quot;:&quot;G\u1eedi xong&quot;}]"  data-pk="125" data-value="0" data-url="https://demo.s-cart.org/system_admin/shop_order_update" data-title="Thay đổi trạng thái ship hàng">Chưa gửi
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
            <div class="modal fade" id="editItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Edit
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
                            <input  type="number" disabled class="form_id form-control" name="form_id" value="{!! old('form_id',isset($data)? $data['id']: null) !!}">
                          </td>
                          <td>
                            <input   type="text" disabled class="form_sku form-control" name="form_sku" value="{!! old('form_sku',isset($data)? $data['id_product']: null) !!}">
                          </td>
                          <td>
                            <input type="number" class="form_qty form-control" name="form_qty" value="{!!old('form_qty',isset($data)?$data['quanitily']: null)!!}">
                          </td>
                          <td>
                            <input  type="number" class="form_price form-control" name="form_price" value="">
                          </td>
                          <td>
                            <input  type="number" disabled class="form_total_price form-control" name="form_total_price" value="">
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
            <script type="text/javascript">
              function dataRemove(id){
                $('#removeItem [name="form_id"]').val(id);
              }
              function dataEdit(id){
                $('#editItem [name="editItem-form"]').val(125);
                $('#editItem .form_id').val($('.item_'+id+'_id').html().toString().replace(/,/g,''));
                $('#editItem .form_sku').val($('.item_'+id+'_sku').html().toString().replace(/,/g,''));
                $('#editItem .form_name').val($('.item_'+id+'_name').html().toString().replace(/,/g,''));
                $('#editItem .form_qty').val($('.item_'+id+'_qty').html().toString().replace(/,/g,''));
                $('#editItem .form_price').val($('.item_'+id+'_price').html().toString().replace(/,/g,''));
                $('#editItem .form_attr').val($('.item_'+id+'_attr').html());
                $('#editItem .form_total_price').val($('.item_'+id+'_total_price').html().toString().replace(/,/g,''));
                $('#editItem .form_price,#editItem .form_qty').change(function(){
                  $('#editItem .form_total_price').val(
                    parseInt($('#editItem .form_qty').val()) * parseInt($('#editItem .form_price').val())
                  );
                }
                                                                     );
              }
              $('#more-item').click(function(){
                $('tr#addnew').before('<tr><td><select required onChange="selectProduct($(this));" class="form_id form-control" name="form_id[]"><option value="0">Vui lòng chọn sản phẩm</option><option  value="30" >Easy Polo Black Edition (3D-BELT-GT2)</option><option  value="21" >Easy Polo Black Edition (3D-CARBON1.75)</option><option  value="22" >Easy Polo Black Edition (3D-GOLD1.75)</option><option  value="32" >Easy Polo Black Edition (3D-HOTWIRE1240)</option><option  value="35" >Easy Polo Black Edition (3D-SENSOR-NTC 100K)</option><option  value="29" >Easy Polo Black Edition (3D-TEFLONLOCK)</option><option  value="31" >Easy Polo Black Edition (3D-TEFLONLOCK-M10)</option><option  value="33" >Easy Polo Black Edition (3D-TEFTLON-24)</option><option  value="34" >Easy Polo Black Edition (3D-TEFTLON-W24)</option><option  value="12" >Easy Polo Black Edition (3DHLFD)</option><option  value="28" >Easy Polo Black Edition (3DNOZZLE)</option><option  value="10" >Easy Polo Black Edition (A4988)</option><option  value="27" >Easy Polo Black Edition (ANYCUBIC-I3M)</option><option  value="11" >Easy Polo Black Edition (ANYCUBIC-P)</option><option  value="37" >Easy Polo Black Edition (ARDUINO-NANO)</option><option  value="47" >Easy Polo Black Edition (BX-5U0)</option><option  value="48" >Easy Polo Black Edition (BX-5UT)</option><option  value="49" >Easy Polo Black Edition (BX-5UTbnv)</option><option  value="5" >Easy Polo Black Edition (CLOCKFAN1)</option><option  value="6" >Easy Polo Black Edition (CLOCKFAN2)</option><option  value="7" >Easy Polo Black Edition (CLOCKFAN3)</option><option  value="26" >Easy Polo Black Edition (EFULL-3D)</option><option  value="9" >Easy Polo Black Edition (FILAMENT)</option><option  value="23" >Easy Polo Black Edition (LCD12864-3D)</option><option  value="24" >Easy Polo Black Edition (LCD2004-3D)</option><option  value="4" >Easy Polo Black Edition (LEDFAN1)</option><option  value="38" >Easy Polo Black Edition (LEDSTRIP-5050RGB)</option><option  value="39" >Easy Polo Black Edition (LEDSTRIP-S)</option><option  value="45" >Easy Polo Black Edition (LFF)</option><option  value="3" >Easy Polo Black Edition (MEGA2560)</option><option  value="36" >Easy Polo Black Edition (nRLF24L01+2.4HZ)</option><option  value="42" >Easy Polo Black Edition (P10-IB)</option><option  value="41" >Easy Polo Black Edition (P10-IG)</option><option  value="40" >Easy Polo Black Edition (P10-IR)</option><option  value="44" >Easy Polo Black Edition (P10-IRG)</option><option  value="43" >Easy Polo Black Edition (P10-IRGB)</option><option  value="46" >Easy Polo Black Edition (P2.5-I)</option><option  value="25" >Easy Polo Black Edition (RAMPS1.5-3D)</option><option  value="20" >Easy Polo Black Edition (SS495A)</option><option  value="8" >Easy Polo Black Edition (TMC2208)</option></select></td><td><input disabled class="form_sku form-control" name="form_sku[]" value=""></td><td><input class="form_qty form-control" name="form_qty[]" value=""></td><td><input class="form_price form-control" name="form_price[]" value=""></td><td><input class="form_attr form-control" name="form_attr[]" value=""></td><td> <span class="glyphicon glyphicon-remove btn btn-danger" onclick="removeItemForm(this);"></span></td></tr>');
              }
                                   );
              function removeItemForm(elmnt){
                elmnt.closest('tr').remove();
              }
              function selectProduct(elemnt){
                node = elemnt.closest('tr');
                var id = parseInt(node.find('option:selected').eq(0).val());
                if(id == 0){
                  node.find('[name="form_sku[]"]').val('');
                  node.find('[name="form_qty[]"]').eq(0).val('');
                  node.find('[name="form_price[]"]').eq(0).val('');
                  node.find('[name="form_attr[]"]').eq(0).val('');
                }
                else{
                  $.ajax({
                    url : 'https://demo.s-cart.org/system_admin/getInfoProduct',
                    type : "get",
                    dateType:"application/json; charset=utf-8",
                    data : {
                      id : id
                    }
                    ,
                    success: function(result){
                      var returnedData = JSON.parse(result);
                      node.find('[name="form_sku[]"]').val(returnedData.sku);
                      node.find('[name="form_qty[]"]').eq(0).val(1);
                      node.find('[name="form_price[]"]').eq(0).val(returnedData.price);
                    }
                  }
                        );
                }
              }
              $('#editItem-button').click(function(){
                $.ajax({
                  url:'https://demo.s-cart.org/system_admin/shop_order_edit',
                  type:'post',
                  dataType:'json',
                  data:{
                    'editItem-form':$('#editItem [name="editItem-form"]').val(),
                    'pId':$('#editItem [name="form_id"]').val(),
                    'pName':$('#editItem [name="form_name"]').val(),
                    'pQty':$('#editItem [name="form_qty"]').val(),
                    'pPrice':$('#editItem [name="form_price"]').val(),
                    'pAttr':$('#editItem [name="form_attr"]').val(),
                    '_token': "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx",
                  }
                  ,
                  success: function(result){
                    if(parseInt(result.stt) ==1){
                      location.reload();
                    }
                    else{
                      alert('Error');
                    }
                  }
                }
                      );
              }
                                         );
              $('#removeItem-button').click(function(){
                $.ajax({
                  url:'https://demo.s-cart.org/system_admin/shop_order_edit',
                  type:'post',
                  dataType:'json',
                  data:{
                    'removeItem-form':1,
                    'pId':$('#removeItem [name="form_id"]').val(),
                    '_token': "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx",
                  }
                  ,
                  success: function(result){
                    if(parseInt(result.stt) ==1){
                      location.reload();
                    }
                    else{
                      alert('Error');
                    }
                  }
                }
                      );
              }
                                           );
              $('#addItem-button').click(function(){
                $.ajax({
                  url:'https://demo.s-cart.org/system_admin/shop_order_edit',
                  type:'post',
                  dataType:'json',
                  data:{
                    'addItem-form':$('[name="addItem-form"]').val(),
                    'pId':$('[name="form_id[]"]').serializeArray(),
                    'pQty':$('[name="form_qty[]"]').serializeArray(),
                    'pPrice':$('[name="form_price[]"]').serializeArray(),
                    'pAttr':$('[name="form_attr[]"]').serializeArray(),
                    '_token': "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx",
                  }
                  ,
                  success: function(result){
                    if(parseInt(result.stt) ==1){
                      location.reload();
                    }
                    else{
                      alert(result.msg);
                    }
                  }
                }
                      );
              }
                                        );
              $(document).ready(function() {
                $('.updateInfo').editable({
                }
                                         );
                $(".updatePrice").on("shown", function(e, editable) {
                  var value = $(this).text().replace(/,/g, "");
                  editable.input.$input.val(parseInt(value));
                }
                                    );
                $('.updateStatus').editable({
                  validate: function(value) {
                    if (value == '') {
                      return 'Không được để trống';
                    }
                  }
                }
                                           );
                $('.updateInfoRequired').editable({
                  validate: function(value) {
                    if (value == '') {
                      return 'Không được để trống';
                    }
                  }
                }
                                                 );
                $('.updatePrice').editable({
                  ajaxOptions: {
                    type: 'post',
                    dataType: 'json'
                  }
                  ,
                  validate: function(value) {
                    if (value == '') {
                      return 'Không được để trống';
                    }
                    if (!$.isNumeric(value)) {
                      return 'Chỉ được dùng số';
                    }
                  }
                  ,
                  success: function(response, newValue) {
                    // var rs = JSON.parse(response);
                    console.log(response);
                    var rs = response;
                    if(rs.stt ==1){
                      $('.data-shipping').html(rs.msg.shipping);
                      $('.data-received').html(rs.msg.received);
                      $('.data-total').html(rs.msg.total);
                      $('.data-shipping').html(rs.msg.shipping);
                      $('.data-discount').html(rs.msg.discount);
                      $('.data-balance').remove();
                      $('#update-status').before(rs.msg.balance);
                      $('.payment_status').html(rs.msg.payment_status);
                    }
                  }
                }
                                          );
              }
                               );
              function toggleIcon(e) {
                $(e.target)
                  .prev('.panel-heading')
                  .find(".more-less")
                  .toggleClass('glyphicon-plus glyphicon-minus');
              }
              $('.panel-group').on('hidden.bs.collapse', toggleIcon);
              $('.panel-group').on('shown.bs.collapse', toggleIcon);
            </script>
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
