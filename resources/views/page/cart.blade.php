@extends('master')
@section('content')
    <section class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
          <li class="home-link">
            <a href="/" class="icon icon-home">
            </a>
          </li>
          <li>
            <span>Your Shopping Cart
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <!-- CONTENT section -->
      <div class="container">
        <!-- title -->
        <div class="title-box">
          <h1 class="text-center text-uppercase title-under">Shopping Cart
          </h1>
        </div>
        <!-- /title -->
        <form  method="post" novalidate action="{{route('cart')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <!-- Shopping cart table -->
          <div class="container-widget">
            <table class="shopping-cart-table">
              <thead>
                <tr>
                  <th>Product
                  </th>
                  <th>&nbsp;
                  </th>
                  <th>&nbsp;
                  </th>
                  <th>Price
                  </th>
                  <th>Quantity
                  </th>
                  <th>Total
                  </th>
                  <th>&nbsp;
                  </th>
                </tr>
              </thead>
              <tbody>
                @if(Session::has('cart'))
                      @foreach($product_cart as $product)
                <tr class="trr">
                  <td>
                    <div class="shopping-cart-table__product-image"  >
                      <a href="{{ route('productTitle',$product['item']['id'])}}">
                              <img style="width: 240px" style=" height:194px"  src="{{ asset('image/')}}/products/{{ $product['item']['image'] }}" alt=""/>
                            </a>
                    </div>
                  </td>
                  <td>
                    <h5 class="shopping-cart-table__product-name text-left text-uppercase">
                      <a href="{{ route('productTitle',$product['item']['id'])}}">{{ $product['item']['name'] }}
                                </a>
                    </h5>
                    <ul class="shopping-cart-table__list-parameters">
                      <li class="visible-xs">
                        <span>Price
                        </span>
                        <span class="price-mobile">
                          <span class=money>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif
                          </span>
                        </span>
                      </li>
                      <li class="visible-xs">
                        <span>Quantity
                        </span>
                        <span class="shopping-cart-table__input">
                          <input type="text" name="updates" id="updates_31530897420" class="form-control input-mobile" value="1" min="1" max="100000">
                        </span>
                      </li>
                      <li class="visible-xs">
                        <span>Subtotal
                        </span>
                        <span class="price-mobile">
                          <span class=money>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif
                          </span>
                        </span>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a class="shopping-cart-table__delete icon icon-delete visible-xs" href="/cart/change?line=1&quantity=0">
                    </a>
                  </td>
                  <td>
                    <div class="shopping-cart-table__product-price unit-price">
                      <span class=money> @if($product['item']['price_sale']==0){{number_format($product['item']['price_out'])}} @else {{number_format($product['item']['price_sale'])}}@endif
                      </span>
                    </div>
                  </td>
                  <td>
                    <div class="shopping-cart-table__input">
                      <input type="number" name="updates" id="zzz" class="qty-item form-control " value="{{$product['qty']}}" min="1" max="100000" >
                    </div>
                  </td>
                  <td>
                    <div class="shopping-cart-table__product-price subtotal">
                      <span class=money> @if($product['item']['price_sale']==0){{number_format($product['qty'] * $product['item']['price_out'])}} @else {{number_format($product['qty'] * $product['item']['price_sale'])}}@endif
                      </span>
                    </div>
                  </td>
                  <td>
                    <a class="shopping-cart-table__delete icon icon-clear" href="{{ route('deleteCart',$product['item']['id'])}}">
                    </a>
                    <a  class="sub-cart" href="javascript:void(0)" url="{{ action('controllerPage@getUpdateCart', [
                      'id' =>$product['item']['id'] ,
                      'qty' => 2
                    ]) }}">
                   
                    <span class="icon icon-autorenew">  </span>
                    
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /Shopping cart table -->
          <div class="divider divider--xs">
          </div>
          <div class="clearfix shopping-cart-btns">
            
            <div class="divider divider--xs visible-xs">
            </div>
            <a class="btn btn--ys btn--light" href="/cart/clear">
              <span class="icon icon-delete">
              </span>CLEAR SHOPPING CART
            </a>
            <div class="divider divider--xs visible-xs">
            </div>
            <a class="btn btn--ys btn--light pull-left btn-right" href="{{route('index')}}">
              <span class="icon icon-keyboard_arrow_left">
              </span>CONTINUE SHOPPING
            </a>
            <div class="divider divider--xs visible-xs">
            </div>   	
          </div>
          <div class="divider--md">
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card--padding">
                <h4>ESTIMATE SHIPPING AND TAX
                </h4>
                <p>Enter your destination to get a shipping estimate.
                </p>
                <form action="#">
                  <div class="form-group">
                    <label for="address_country">Country 
                      <sup>*
                      </sup>
                    </label>
                    @include('page/optionCart')
                  </div>
                  <div class="form-group" id="address_province_container" style="display:none;">
                    <label  for="address_province">State/Province 
                      <sup>*
                      </sup>
                    </label>      
                    <select  id="address_province" name="address[province]" class="form-control "  data-style="select--ys"  data-width="100%" data-default="">
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address_zip">Zip/Postal Code
                    </label>
                    <input type="text" name="address[zip]" class="form-control" id="address_zip"  value="Zip/Postal Code" onblur="if (this.value == '') {this.value = 'Zip/Postal Code';}" onfocus="if(this.value == 'Zip/Postal Code') {this.value = '';}"/>
                  </div>
                  <div class="divider divider--xs">
                  </div>
                  <a class="get-rates btn btn--wd text-uppercase wave waves-effect">Calculate shipping
                  </a>
                  <div class="divider divider--xs">
                  </div>
                  <div id="wrapper-response" style="display:none">
                  </div>
                </form>
                <script id="shipping-calculator-response-template" type="text/template">
                  <p id="shipping-rates-feedback" <% if (success) { %> class="success" <% } else { %> class="error" <% } %>>
                    <% if (success) { %>
                      <% if (rates.length > 1) { %> 
                      There are <%= rates.length %> shipping rates available for <%= address %>, starting at <%= rates[0].price %>.
                      <% } else if (rates.length == 1) { %>
                      There is one shipping rate available for <%= address %>.
                      <% } else { %>
                      We do not ship to this destination.
                      <% } %>
                    <% } else { %>
                      <%= errorFeedback %>
                    <% } %>
                  </p>
                  <ul id="shipping-rates">
                    <% for (var i=0; i<rates.length; i++) { %>
                    <li><%= rates[i].name %> at <%= rates[i].price %></li>
                    <% } %>
                  </ul> 
                </script>
               
              </div>
            </div>
            <div class="divider--md visible-sm visible-xs">
            </div>
            <div class="col-md-4">
              <div class=" card card--padding">
                <h4 class="offset-1">Note
                </h4>
                <p>Add special instructions for your order...
                </p>
                <textarea id="note" name="note" class="form-control" rows="4">
                </textarea>
              </div>
            </div>
            <div class="divider--md visible-sm visible-xs">
            </div>
            <div class="col-md-4">
              <div class="card card--padding">
                <table class="table-total">
                  <tbody>
                    <tr id="subtotal">
                      <th class="text-left">Subtotal
                      </th>
                      <td class="text-right">
                        <span class=money>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif
                        </span>
                      </td>
                    </tr>
                    <tr id="tax" style="display:none">
                      <th class="text-left">Shipping &amp; Handling
                      </th>
                      <td class="text-right">
                        <span class=money>$0.00
                        </span>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr id="grandtotal">
                      <th>GRAND TOTAL
                      </th>
                      <td>
                        <span class=money>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif
                        </span>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                @endif
                
                  <script src="{{ asset('js/underscore-min.js') }}" type="text/javascript"></script>
                  <script src="/services/javascripts/countries.js" type="text/javascript"></script>

              </div>
            </div>
          </div>
          
        </form>
        <a href="{{route('getCustomerInformation')}}">
                  <button   class="btn btn--ys btn--full btn--xl">PROCEED TO CHECKOUT
                    <span class="icon icon--flippedX icon-reply">
                    </span>
                  </button>
                </a>
      </div>

    </div>
@endsection