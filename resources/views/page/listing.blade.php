
<div id="shopify-section-1480804481290" class="shopify-section index-section">
        <!-- recent-posts-carousel -->
        <section class="content" data-section-id="1480804481290" data-section-type="blogslider-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- title -->
                <div class="title-with-button">
                  <div class="carousel-products__button pull-right"> 
                    <span class="btn-prev">
                    </span> 
                    <span class="btn-next">
                    </span> 
                  </div>
                  <h2 class="text-center text-uppercase title-under">Listing
                  </h2> 
                </div>
                <!-- /title -->
                <!-- carousel-new -->
                <div class="carousel-products row postscarousel-js-1480804987566" id="postsCarousel" data-autoplay="true" data-speed="7000" data-step="2" data-showproducts="4">
                  <!-- slide-->
                  @foreach( $categories as $test )
                  <div class="col-sm-3 col-xl-12">
                                      <a href="#" class="banner zoom-in"> 
                    <span class="figure buttononhover">
                      <img style="width: "370px" height="370.33px" " src="image/Categories/{{ $test->image }}" alt="">
                      <span class="figcaption">
                        <span class="block-table">
                          <span class="block-table-cell">
                            <span class="banner__title size40">{{ $test->name }}
                            </span> 
                            <span class="btn btn--ys btn--xl">Shop now!
                            </span> 
                          </span>
                        </span>
                      </span>
                    </span>
                  </a>
                    <!-- / -->
                  </div>
                  @endforeach
                </div>
                <!-- /carousel-new -->
              </div>
            </div>
          </div>
        </section>
        <!-- /recent-posts-carousel -->
        <style>
          @media (min-width: 1770px) {
            [data-section-id~="1480804987566"] .recent-post-box p {
              padding-right: 15px;
            }
            [data-section-id~="1480804987566"] .recent-post-box > div:last-child {
              padding-left: 0 !important;
            }
          }
        </style>
      </div>