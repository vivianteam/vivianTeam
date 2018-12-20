<div class="header-wrapper">
  <header id="header" class="header-design8" style="height: 130px">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-5">
          <a href="#">
            <img style="height: 80px; margin-top: -20px" src="{{asset('image/')}}/img/logo2.png ">
          </a>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-7 text-right">
          <div class="settings">
            <div class="account-row-list mobile-menu-off" style="display: inline-block;">
              <ul>
                <li>
                  <a href="{{route('getUpdateAcc')}}">
                    <span class="icon icon-person">
                    </span>Account
                  </a>  
                </li>
                <li>
                  <a href="checkout.html">
                    <span class="icon icon-done_all">
                    </span>Checkout
                  </a> 
                </li>
                @if(Auth::check())
                  <li><a href=""><span class="icon icon-lock">
                    </span>Chào bạn {{Auth::user()->username}}</a></li> 
                  <li><a href="{{route('logout')}}"><span class="icon icon-lock">
                    </span>Log out</a></li>
                @else
                  <li><a href="{{route('signin')}}"><span class="icon icon-lock">
                    </span>Register</a></li>
                  <li><a href="{{route('loginPage')}}"><span class="icon icon-lock">
                    </span>Sign In </a></li>
                @endif
                <li><a href="{{route('cart')}}">
                  <div class="cart link-inline header-cart mobile-menu-off" href="{{route('cart')}}">
                    <div class="dropdown text-right">
                      <a href="{{route('cart')}}">
                        <span class="icon icon-shopping_basket">
                        </span>
                        <span class="badge badge--cart bigcounter">
                          @if(Session::has('cart'))
                            {{Session('cart')->totalQty}}
                          @else
                            0
                          @endif
                        </span>
                      </a>
                    </div>
                  </div>
                </a>
                </li>
              </ul>
            </div>
            <!-- shopping cart start -->
            
            <!-- shopping cart end -->
          </div>
        </div>
      </div>
    </div>
    <div class="container showscreen1024">
      <div class="row text-center">
        <div class="text-right extra-right">
          <!-- account menu start -->
          <div class="account link-inline ">
            <div class="dropdown text-right">
              <a class="dropdown-toggle" data-toggle="dropdown"> 
                <span class="icon icon-person ">
                </span> 
              </a>
              <ul class="dropdown-menu dropdown-menu--xs-full">
                <li>
                  <a href="account.html">
                    <span class="icon icon-person">
                    </span>Account
                  </a> 
                </li>
                <li>
                  <a href="checkout.html">
                    <span class="icon icon-done_all">
                    </span>Checkout
                  </a> 
                </li>
                <li>
                  <a href="account/login.html">
                    <span class="icon icon-lock">
                    </span>Sign In
                  </a> 
                </li>
                <li>
                  <a href="account/register.html">
                    <span class="icon icon-person_add">
                    </span>Register
                  </a> 
                </li>
                <li class="dropdown-menu__close">
                  <a href="#">
                    <span class="icon icon-close">
                    </span>close
                  </a> 
                </li>
              </ul>
            </div>
          </div>
          <!-- account menu end -->
        </div>
      </div>
    </div>
    <div class="stuck-nav">
      <div class="container offset-top-5">
        <div class="row">
          <div class="pull-left col-sm-10 col-md-10 col-lg-10">
            <nav class="navbar ">
              <div class="responsive-menu mainMenu">
                <div class="col-xs-2 visible-mobile-menu-on">
                  <div class="expand-nav compact-hidden">
                    <a href="#off-canvas-menu" id="off-canvas-menu-toggle">
                      <div class="navbar-toggle">
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="menu-text">MENU
                        </span>
                      </div>
                    </a>
                  </div>
                </div>
                <ul class="nav navbar-nav">
                  <li class="dl-close">
                  </li>
                  <li class="dropdown dropdown-mega-menu dropdown-one-col">
                    <a href="{{route('index')}}" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="act-underline">Home
                      </span>
                    </a> 
                  </li>
                  <li class="dropdown dropdown-mega-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="act-underline">Collections
                      </span>
                    </a>
                    <ul class="dropdown-menu megamenu" role="menu">
                      @foreach($cate as $loai)
                      @if(count($loai->SmallCategories)>0) 
                      <li class="col-sm-3">
                        <a href="#" class="megamenu__subtitle">
                          <span>{{ $loai->name}}
                          </span>
                        </a>
                        <ul class="megamenu__submenu">
                          @foreach($loai->SmallCategories as $nho)
                          <li class="level2">
                            <a href="{{route('collection_women',$nho->id)}}">{{ $nho->nameSmallCate }}
                            </a>
                          </li>
                          @endforeach
                        </ul>
                      </li>
                      @endif
                     @endforeach
                    </ul>
                  </li>
                  
                  <li class="dropdown dropdown-mega-menu dropdown-two-col"> 
                    <a href="pages/about.html" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="act-underline">About
                      </span>
                    </a>
                    <ul class="dropdown-menu multicolumn two-col" role="menu">
                      <li class="dl-back">
                        <a href="#">
                          <span class="icon icon-chevron_left">
                          </span>back
                        </a> 
                      </li>
                      <li> 
                        <a href="pages/typography.html">Typography
                        </a> 
                      </li>
                      <li> 
                        <a href="pages/delivery-page.html">Delivery Page
                        </a> 
                      </li>
                      <li> 
                        <a href="pages/faq.html">Faq
                        </a> 
                      </li>
                      <li> 
                        <a href="pages/support-24.html">Support-24
                        </a> 
                      </li>
                      <li> 
                        <a href="pages/warranty-and-services.html">Warranty and Services
                        </a> 
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-mega-menu dropdown-one-col"> 
                    <a href="{{route('getBlog')}}" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="act-underline">BLOG
                      </span>
                    </a> 
                  </li>
                  <li class="dropdown dropdown-mega-menu dropdown-one-col"> 
                    <a href="{{route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="act-underline">Contacts
                      </span>
                    </a> 
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="pull-right col-sm-2 col-md-2 col-lg-2">
            <div class="text-right">
              <!-- search start -->
              <div class="search link-inline "> 
                <a href="#" class="search__open">
                  <span class="icon icon-search">
                  </span>
                </a>
                <div class="search-dropdown">
                  <form action="{{route('getSearch')}}" method="get">
                    <div class="input-outer">
                      <input type="hidden" name="type" value="product" />
                      <input type="text" name="key" class="search_field" value="" maxlength="128" placeholder="SEARCH:">
                      <button type="submit" title="" class="icon icon-search">
                      </button>
                    </div> 
                    <a href="#" class="search__close">
                      <span class="icon icon-close">
                      </span>
                    </a> 
                  </form>
                </div>
              </div>
              <!-- search end -->
              <!-- shopping cart start -->
              <div class="cart link-inline header-cart mobile-menu-off">

              <div class="dropdown text-right">
                <a class="dropdown-toggle">
                  <span class="icon icon-shopping_basket">
                  </span>
                  <span class="badge badge--cart bigcounter">
                    @if(Session::has('cart'))
                      {{Session('cart')->totalQty}}
                    @else
                      0
                    @endif
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu--xs-full slide-from-top cart-group-1" role="menu">
                  <div class="container">
                    <div class="cart__top">Recently added item(s)
                    </div>
                    <a href="#" class="icon icon-close cart__close">
                      <span>close
                      </span>
                    </a>
                    <ul>
                      @if(Session::has('cart'))
                      @foreach($product_cart as $product)
                        <li class="cart__item">
                          <div class="cart__item__image pull-left">
                            <a href="{{ route('productTitle',$product['item']['id'])}}">
                              <img src="{{ asset('image/')}}/products/{{ $product['item']['image'] }}" alt=""/>
                            </a>
                          </div>
                          <div class="cart__item__control">
                            <div class="cart__item__delete">
                              <a href="{{ route('deleteCart',$product['item']['id'])}}" class="icon icon-delete">
                                <span>Delete
                                </span>
                              </a>
                            </div>
                            <div class="cart__item__edit">
                              <a href="{{ route('productTitle',$product['item']['id'])}}" class="icon icon-edit">
                                <span>Edit
                                </span>
                              </a>
                            </div>
                          </div>
                          <div class="cart__item__info">
                            <div class="cart__item__info__title">
                              <h2 class="title-center">
                                <a href="{{ route('productTitle',$product['item']['id'])}}">{{ $product['item']['name'] }}
                                </a>
                              </h2>
                            </div>
                            <div class="cart__item__info__price">
                              <span class="info-label">Price:
                              </span>
                              <span>
                                <span class=money>
                                  @if($product['item']['price_sale']==0){{number_format($product['qty'] * $product['item']['price_out'])}} @else {{number_format($product['qty'] * $product['item']['price_sale'])}}@endif
                                </span>
                              </span>
                            </div>
                            <div class="cart__item__info__price" style="right: 35%;">
                              <span class="info-label">Qty:
                              </span>
                              <span>{{ $product['qty'] }}
                              </span>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                    <div class="cart__bottom">
                      <a href="{{route('getCustomerInformation')}}" class="btn btn--ys btn-checkout">Checkout 
                        <span class="icon icon--flippedX icon-reply">
                        </span>
                      </a>
                      <div class="cart__total">Cart subtotal: 
                        <span class="shopping-cart__total"> 
                          <span class=money>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng
                          </span>
                        </span>
                      </div>
                      <a href="{{route('cart')}}" class="btn btn--ys">
                        <span class="icon icon-shopping_basket">
                        </span>View Cart
                      </a>
                    </div>
              @endif
                  </div>
                </div>
              </div>

            </div>
              <!-- shopping cart end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
