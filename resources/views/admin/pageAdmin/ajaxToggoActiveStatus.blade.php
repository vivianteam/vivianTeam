
<!-- @if($status == 1)
    <img onClick="return ajaxToggoActiveStatusAdmin({{$order_id}}, 0)" src="{{asset('image/')}}/img/cancel.png">
@else
    <img onClick="return ajaxToggoActiveStatusAdmin({{$order_id}}, 1)"  src="{{asset('image/')}}/img/checked.png">
@endif
 -->
 @if($status == 1)
    <img onClick="return ajaxToggoActiveStatusAdmin({{$order_id}}, 0)" src="{{asset('image/')}}/img/cancel.png">
@else
    <img onClick="return ajaxToggoActiveStatusAdmin({{$order_id}}, 1)"  src="{{asset('image/')}}/img/checked.png">
@endif