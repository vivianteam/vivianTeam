@extends('master')
@section('content')      
    <section class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
          <li class="home-link">
            <a href="{{route('index')}}" class="icon icon-home">
            </a>
          </li>
          <li>
            <span>{{$sp_smallName->nameSmallCate}}
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">
        <div class="row">
          <aside class="col-md-4 col-lg-3 col-xl-2 collection-list" id="leftColumn">
            <div class="move-height">
            </div>
            <a href="#" class="slide-column-close visible-sm visible-xs">
              <span class="icon icon-chevron_left">
              </span>back
            </a>
            <div class="filters-block visible-xs">
              <div class="filters-row__select">
                <label>Sort by: 
                </label>
                <div class="select-wrapper">
                  <select class="select--ys sort-position sort-select">
                    <option value="manual">Featured
                    </option>
                    <option value="title-ascending">Name Ascending
                    </option>
                    <option value="title-descending">Name Descending
                    </option>
                    <option value="created-ascending">Date Ascending
                    </option>
                    <option value="created-descending">Date Descending
                    </option>
                    <option value="price-ascending">Price Ascending
                    </option>
                    <option value="price-descending">Price Descending
                    </option>
                    <option value="best-selling">Best Selling
                    </option>
                  </select>
                </div>
              </div>
              <div class="filters-row__select grid-select">
                <label>Show: 
                </label>
                <div class="select-wrapper">
                  <select class="select--ys">
                    <option>9
                    </option>
                    <option >16
                    </option>
                    <option >32
                    </option>
                    <option >ALL
                    </option>
                  </select>
                </div>
              </div>
              <a href="#" class="icon icon-arrow-down active">
              </a>
              <a href="#" class="icon icon-arrow-up">
              </a> 
            </div>
            <div class="collapse-block open type-filter-block">
              <h4 class="collapse-block__title ">WOMEN’S
              </h4>
              <div class="collapse-block__content">
                <ul class="filter-list type-filter">
                  @foreach($sp_small as $sp_nho)
                  <li class="">
                    <a href="{{ route('collection_women',$sp_nho->id)}}">{{$sp_nho->nameSmallCate}}
                    </a>
                  </li>
                  @endforeach
                  <script class='type-filter-js-2'>
                    jQuery(function ($) {
                      if($( ".type-filter-block .active" ).length > 0) {
                        $(".type-filter-block").addClass('open');
                        $(".type-filter-block").find(".collapse-block__content").show();
                      }
                      $('.type-filter-js-2').remove();
                    }
                          );
                  </script>
                  <script class='type-filter-js'>
                    jQuery(function ($) {
                      $('.type-filter-block').show();
                      $('.type-filter-js').remove();
                    }
                          );
                  </script>
                </ul>
              </div>
            </div>
            <div class="collapse-block open price-filter-block">
              <h4 class="collapse-block__title ">PRICE
              </h4>
              <div class="collapse-block__content">
                <ul class="filter-list price-filter">
                  <li class="">
                    <a href="10-100.html">$10-$100
                    </a>
                  </li>
                  <li class="">
                    <a href="100-200.html">$100-$200
                    </a>
                  </li>
                  <li class="">
                    <a href="200-500.html">$200-$500
                    </a>
                  </li>
                  <script class='price-filter-js-2'>
                    jQuery(function ($) {
                      if($( ".price-filter-block" ).find(".active").length > 0) {
                        $(".price-filter-block").addClass('open');
                        $(".price-filter-block").find(".collapse-block__content").show();
                      }
                      $('.price-filter-js-2').remove();
                    }
                          );
                  </script>
                  <script class='price-filter-js'>
                    jQuery(function ($) {
                      $('.price-filter-block').show();
                      $('.price-filter-js').remove();
                    }
                          );
                  </script>
                </ul>
              </div>
            </div>
            <div class="collapse-block open size-filter-block">
              <h4 class="collapse-block__title">SIZE
              </h4>
              <div class="collapse-block__content">
                <ul class="options-swatch options-swatch--size options-swatch--lg size-filter filter-popup">
                  <li class="">
                    <span class="filter-title">34
                    </span>
                    <a href="34.html">34
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">36
                    </span>
                    <a href="36.html">36
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">38
                    </span>
                    <a href="38.html">38
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">40
                    </span>
                    <a href="40.html">40
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">42
                    </span>
                    <a href="42.html">42
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">44
                    </span>
                    <a href="44.html">44
                    </a>
                  </li>
                  <script class='size-filter-js-2'>
                    jQuery(function ($) {
                      if($( ".size-filter-block .active" ).length > 0) {
                        $(".size-filter-block").addClass('open');
                        $(".size-filter-block").find(".collapse-block__content").show();
                      }
                      $('.size-filter-js-2').remove();
                    }
                          );
                  </script>
                  <script class='color-filter-js'>
                    jQuery(function ($) {
                      $('.size-filter-block').show();
                      $('.size-filter-js').remove();
                    }
                          );
                  </script>
                </ul>
              </div>
            </div>

            <div class="collapse-block open vendor-filter-block">
              <h4 class="collapse-block__title ">VENDOR
              </h4>
              <div class="collapse-block__content">
                <ul class="simple-list vendor-filter">
                  <li class="">
                    <a href="levis.html">Levi's
                    </a>
                  </li>
                  <li class="">
                    <a href="gap.html">GAP
                    </a>
                  </li>
                  <li class="">
                    <a href="zara.html">ZARA
                    </a>
                  </li>
                  <li class="">
                    <a href="polo.html">Polo
                    </a>
                  </li>
                  <li class="">
                    <a href="lacoste.html">Lacoste
                    </a>
                  </li>
                  <li class="">
                    <a href="guess.html">Guess
                    </a>
                  </li>
                  <script class='vendor-filter-js-2'>
                    jQuery(function ($) {
                      if($( ".vendor-filter-block .active" ).length > 0) {
                        $(".vendor-filter-block").addClass('open');
                        $(".vendor-filter-block").find(".collapse-block__content").show();
                      }
                      $('.vendor-filter-js-2').remove();
                    }
                          );
                  </script>
                  <script class='vendor-filter-js'>
                    jQuery(function ($) {
                      $('.vendor-filter-block').show();
                      $('.vendor-filter-js').remove();
                    }
                          );
                  </script>
                </ul>
              </div>
            </div>
            <div class="collapse-block open tags-filter-block">
              <h4 class="collapse-block__title">POPULAR TAGS
              </h4>
              <div class="collapse-block__content">
                <ul class="tags-list tag-filter filter-popup">
                  <li class="">
                    <span class="filter-title">vintage
                    </span>
                    <a href="vintage.html">vintage
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">style
                    </span>
                    <a href="style.html">style
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">streetstyle
                    </span>
                    <a href="streetstyle.html">streetstyle
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">prom dresses
                    </span>
                    <a href="prom-dresses.html">prom dresses
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">model
                    </span>
                    <a href="model.html">model
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">colorful
                    </span>
                    <a href="colorful.html">colorful
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">club dresses
                    </span>
                    <a href="club-dresses.html">club dresses
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">clothes
                    </span>
                    <a href="clothes.html">clothes
                    </a>
                  </li>
                  <li class="">
                    <span class="filter-title">bikini
                    </span>
                    <a href="bikini.html">bikini
                    </a>
                  </li>
                  <script class='tag-filter-js-2'>
                    jQuery(function ($) {
                      if($( ".tags-filter-block .active" ).length > 0) {
                        $(".tags-filter-block").addClass('open');
                        $(".tags-filter-block").find(".collapse-block__content").show();
                      }
                      $('.tag-filter-js-2').remove();
                    }
                          );
                  </script>
                  <script id='tag-filter-js'>
                    jQuery(function ($) {
                      if($('.tag-filter').length > 0) {
                        $('.tags-filter-block').show();
                      }
                      $('.tag-filter-js').remove();
                    }
                          );
                  </script>
                </ul>
              </div>
            </div>
            <!-- featured block -->
            
            <!-- featured block -->
            <div class="collapse-block ">
              <h4 class="collapse-block__title">CUSTOM BLOCK
              </h4>
              <div class="collapse-block__content">
                <p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                </p>
                <ul class="marker-list">
                  <li>Lorem ipsum dolor sit amet
                  </li>
                  <li>Conse ctetur adipisicing
                  </li>
                  <li>Elit sed do eiusmod tempor
                  </li>
                </ul>
                <p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.
                </p>
              </div>
            </div>
          </aside>
          <aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
            <div class="title-box">
              <h2 class="text-center text-uppercase title-under">{{$sp_smallName->nameSmallCate}}
              </h2>
            </div>
           
            <div class="offset-top-20">
              <p class="light-font">{{$sp_smallName->descriptions}}
              </p>
            </div>
            <div id="listing-point">
            </div>
            <!-- filters row -->
            <div class="filters-row filters-panel">
              <div class="pull-left">
                <div class="filters-row__mode">
                  <a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter
                  </a>
                  <a class="filters-row__view active link-grid-view btn-img btn-img-view_module view-grid">
                    <span>
                    </span>
                  </a> 
                  <a class="filters-row__view link-row-view btn-img btn-img-view_list view-list">
                    <span>
                    </span>
                  </a> 
                </div>
                <div class="filters-row__select hidden-sm hidden-xs">
                  <label>Sort by: 
                  </label>
                  <div class="select-wrapper">
                    <select class="select--ys sort-position sort-select">
                      <option value="manual">Featured
                      </option>
                      <option value="title-ascending">Name Ascending
                      </option>
                      <option value="title-descending">Name Descending
                      </option>
                      <option value="created-ascending">Date Ascending
                      </option>
                      <option value="created-descending">Date Descending
                      </option>
                      <option value="price-ascending">Price Ascending
                      </option>
                      <option value="price-descending">Price Descending
                      </option>
                      <option value="best-selling">Best Selling
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="pull-right pagination-btns">
                <div class="filters-row__items hidden-sm hidden-xs">{{count($sp_cate)}} Item(s)
                </div>
                <div class="filters-row__select hidden-sm hidden-xs grid-select">
                  <label>Show: 
                  </label>
                  <div class="select-wrapper">
                    <select class="select--ys show-qty">
                      <option>9
                      </option>
                      <option >16
                      </option>
                      <option >32
                      </option>
                      <option >ALL
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- /filters row -->
            <!-- /filters row -->
            <div id="centerCol">
              <div class="product-listing row">
              @foreach($sp_cate as $sp)
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                  <!-- product -->
                  <div class="product product--zoom 31530889420">
                    <div class="product__inside">
                      <!-- product image -->
                      <div class="product__inside__image">
                        <a href="{{ route('productTitle',$sp->id) }}">
                          <img src="{{asset('image/')}}/products/{{ $sp->image }}" alt="Boyfriend Shirt"/>
                        </a>
                        <a href="javascript:void(0);" onclick="quiqview('boyfriend-shirt')" class="quick-view">
                          <b>
                            <span class="icon icon-visibility">
                            </span> Quick View
                          </b>
                        </a>
                      </div>
                      <!-- /product image --> 
                      <!-- label news -->
                      <!-- /label news --> 
                      <!-- label sale -->
                      @if($sp->price_sale!=0)
                      <div class="product__label product__label--left product__label--sale">
                        <span>Sale
                          
                        </span>
                      </div>
                      @endif
                      <!-- /label sale --> 
                      <!-- product name -->
                      <div class="product__inside__name">
                        <h2 class="product_title">
                          <a href="women-s/products/boyfriend-shirt.html">{{$sp->name}}
                          </a>
                        </h2>
                      </div>
                      <!-- /product name --> 
                      <!-- product description --> 
                      <!-- visible only in row-view mode -->
                      <div class="product__inside__description row-mode-visible">{{$sp->description_sort}}
                      </div>
                      <!-- /product description --> 
                      <!-- product price -->
                      <div class="product__inside__price price-box">
                         @if($sp->price_sale==0)
                            <span class=money>{{ $sp->price_out }}
                            </span>
                            @else
                              <span class=money>{{ $sp->price_sale}}
                              </span>
                              <span class="price-box__old">
                                <span class=money>{{ $sp->price_out }}
                                </span>
                              </span>
                            @endif
                      </div>
                      <!-- /product price --> 
                      <!-- product review --> 
                      <!-- visible only in row-view mode -->
                      <div class="product__inside__review row-mode-visible">
                        <div class="rating row-mode-visible">
                          <span class="shopify-product-reviews-badge" data-id="9097937292">
                          </span>
                        </div>
                      </div>
                      <!-- /product review --> 
                      <div class="product__inside__hover">
                        <!-- product info -->
                        <div class="product__inside__info">
                          <div class="product__inside__info__btns">
                            <a href="javascript:void(0);" onclick="Shopify.addItem(31530889420, 1); return false;" class="btn btn--ys btn--xl addtocart-js">
                              <span class="icon icon-shopping_basket">
                              </span> Add to Cart
                            </a>
                            <a href="javascript:void(0);" onclick="quiqview('boyfriend-shirt')" class="btn btn--ys btn--xl  row-mode-visible hidden-xs">
                              <span class="icon icon-visibility">
                              </span> Quick View
                            </a>
                          </div>
                          <div class="custom__info__link hidden-xs">
                          </div>
                        </div>
                        <!-- /product info --> 
                        <!-- product rating -->
                        <div class="rating row-mode-hide">
                          <span class="shopify-product-reviews-badge" data-id="9097937292">
                          </span>
                        </div>
                        <!-- /product rating -->
                      </div>
                    </div>
                  </div>
                  <!-- /product -->
                </div>
              @endforeach
              </div>
            </div>
            <div class="infinitybutton">
              <div class="show-more">
                <a href="women-s4658.html?page=2" class="btn btn--ys btn--xl">Show More
                </a>
              </div>
            </div>
            <div class="divider--lg visible-xs">
            </div>
          </aside>
        </div>
      </div>
      <script>
        jQuery( document ).ready(function(){
          if(jQuery(".collection-list").length == 0 ) {
            return false;
          }
          setTimeout(calcSidebarPosition, 300);
          window.onscroll = function() {
            if(window.innerWidth < 992 ) {
              jQuery(".move-height").css('height', 0);
              return false;
            }
            calcSidebarPosition();
          }
          jQuery(window).resize(calcSidebarPosition);
          function calcSidebarPosition() {
            if(window.innerWidth < 992 ) {
              jQuery(".move-height").css('height', 0);
              return false;
            }
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            var start = jQuery(".collection-list").position().top;
            var last = jQuery("#listing-point").position().top;
            var stuckHeight = jQuery(".stuck-nav").height();
            var delta = Math.max(scrolled - start + stuckHeight + 20, 0);
            delta = Math.min(delta, last);
            jQuery(".move-height").css('height', delta);
          }
        }
                                );
      </script>
    </div>
@endsection 