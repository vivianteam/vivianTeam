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
            <a href="/blogs/news">News
            </a>
          </li>
          <li>
            <span>Mauris Lacinia Lectus
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">
        <!-- two columns -->
        <div class="row">					 
          <!-- center column -->
          <div class="col-xl-8 col-lg-8 col-md-12" id="centerColumn">
            <div class="title-box">
              <h1 class="text-center text-uppercase title-under">BLOG
              </h1>
            </div>
            <div class="post">
              <!-- title post -->
              <div class="post__title_block">
                <div class="pull-left">
                  <time>
                    <span>09
                    </span>dec
                  </time>
                </div>
                <div class="pull-left">
                  <h2 class="post__title text-uppercase">
                    <a href="#">Mauris Lacinia Lectus
                    </a>
                  </h2>
                  <div class="post__meta">
                    <span class="post__meta__item">
                      <span class="autor">by 
                        <b>{{$preson_posts->id}}
                        </b>
                      </span>
                    </span>
                    <span class="post__meta__item">
                      <span class="icon icon-message">
                      </span>
                      <a href="/blogs/news/mauris-lacinia-lectus-6#addcomment">0 comment(s)
                      </a>
                    </span>									
                    <span class="post__meta__item">
                      <span class="icon icon-folder">
                      </span>
                      <a href="/blogs/news">News
                      </a> 
                    </span>
                  </div>
                </div>									
              </div>
              <!-- /title post -->
              <!-- content post -->
              <p>
                <img src="{{asset('image/')}}/bogs/{{ $preson_posts->image }}" class="img-responsive" alt="">
              </p>
              <div class="divider divider--xs">
              </div>
              <p>{{$preson_posts->description}}
              </p>
              <blockquote class="quote-left">
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <cite> 
                  <b>Amanda Smith
                  </b> - designer 
                </cite>
              </blockquote>
              <p
              </p>
              <!-- /content post -->
            </div>
            <div style="position: relative;">
              <div id="addcomment" style="position: absolute; top: -190px;">
              </div>
            </div>
            <!-- form -->
            <div id="commentField_{{ $preson_posts->id }}" class="panel panel-default" style="padding:10px; margin-top:-20px; display:none;">
            <div id="comment_{{ $preson_posts->id }}">
            </div>
            <form id="commentForm_{{ $preson_posts->id }}">
              <input type="hidden" value="{{ $preson_posts->id }}" name="id">
              <div class="row"> 
                <div class="col-md-10">
                  <input type="text" name="commenttext" id="commenttext" data-id="{{ $preson_posts->id }}" class="form-control commenttext" placeholder="Write a Comment...">
                </div>
                <div class="col-md-2" style="margin-left:-25px;">
                  <button type="button" class="btn btn-primary submitComment" value="{{ $preson_posts->id }}"><i class="fa fa-comment"></i> Submit</button>                </div>
              </div>
            </form>

            @foreach($comments as $comment)
              <div >
                <b>{{ $comment->users->name }}</b>: {{ $comment->content }}
                <p style="font-size:9px;">date</p>
              </div>
            @endforeach
          </div>
            <!-- /form -->
         
          <div class="divider divider--lg visible-md visible-sm visible-xs">
          </div>
          <!-- right column -->
          <aside class="col-xl-4 col-lg-4  col-md-12" id="rightColumn">
            <h4 class="text-uppercase title-aside">Blogs
            </h4>
            <div class="block-underline">
              <ul class="categories-list">
                <li>
                  <a href="/blogs/blog">Blog (1)
                  </a>
                </li>
              </ul>
            </div>
            <h4 class="text-uppercase title-aside">Tags
            </h4>
            <div class="block-underline">
              <ul class="categories-list">
                <li>
                  <a href="/blogs/news/tagged/dress" title="Show articles tagged dress">Dress
                  </a>
                </li>
                <li>
                  <a href="/blogs/news/tagged/fashion" title="Show articles tagged Fashion">Fashion
                  </a>
                </li>
                <li>
                  <a href="/blogs/news/tagged/women" title="Show articles tagged Women">Women
                  </a>
                </li>
              </ul>
            </div>
            <h4 class="text-uppercase  title-aside">RECENT POSTS
            </h4>				
            <div class="block-underline">
              <!--  -->
              <div class="recent-post-box">
                <div class="col-lg-12 col-xl-6">
                  <a href="/blogs/news/mauris-lacinia-lectus-5">
                    <span class="figure">
                      <img src="//cdn.shopify.com/s/files/1/1637/5229/articles/blog1_1024x1024.jpg?v=1481316604" alt="Mauris Lacinia Lectus">
                      <span class="figcaption label-top-left">
                        <span>
                          <b>09
                          </b>
                          <em>dec
                          </em>
                        </span>
                      </span>
                    </span>
                  </a>
                </div>
                <div class="col-lg-12 col-xl-6">
                  <div class="recent-post-box__text">
                    <h4>
                      <a href="/blogs/news/mauris-lacinia-lectus-5">Mauris Lacinia Lectus
                      </a>
                    </h4>
                    <div class="author">by 
                      <b>Jon Silver
                      </b>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                    </p>
                    <a class="link-commet" href="/blogs/news/mauris-lacinia-lectus-5#addcomment">
                      <span class="icon icon-message ">
                      </span>
                      <span class="number">0
                      </span> comment(s)
                    </a>
                  </div>
                </div>
              </div>
            </div>
              <!-- / -->
              <!--  -->
              <div class="recent-post-box">
                <div class="col-lg-12 col-xl-6">
                  <a href="/blogs/news/mauris-lacinia-lectus-7">
                    <span class="figure">
                      <img src="//cdn.shopify.com/s/files/1/1637/5229/articles/blog6_1024x1024.jpg?v=1481316711" alt="Mauris Lacinia Lectus">
                      <span class="figcaption label-top-left">
                        <span>
                          <b>09
                          </b>
                          <em>dec
                          </em>
                        </span>
                      </span>
                    </span>
                  </a>
                </div>
                <div class="col-lg-12 col-xl-6">
                  <div class="recent-post-box__text">
                    <h4>
                      <a href="/blogs/news/mauris-lacinia-lectus-7">Mauris Lacinia Lectus
                      </a>
                    </h4>
                    <div class="author">by 
                      <b>Jon Silver
                      </b>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                    </p>
                    <a class="link-commet" href="/blogs/news/mauris-lacinia-lectus-7#addcomment">
                      <span class="icon icon-message ">
                      </span>
                      <span class="number">0
                      </span> comment(s)
                    </a>
                  </div>
                </div>
              </div>
              <!-- / -->
              <!--  -->
              <div class="recent-post-box">
                <div class="col-lg-12 col-xl-6">
                  <a href="/blogs/news/mauris-lacinia-lectus-1">
                    <span class="figure">
                      <img src="//cdn.shopify.com/s/files/1/1637/5229/articles/blog7_1024x1024.jpg?v=1481316484" alt="Mauris Lacinia Lectus">
                      <span class="figcaption label-top-left">
                        <span>
                          <b>09
                          </b>
                          <em>dec
                          </em>
                        </span>
                      </span>
                    </span>
                  </a>
                </div>
                <div class="col-lg-12 col-xl-6">
                  <div class="recent-post-box__text">
                    <h4>
                      <a href="/blogs/news/mauris-lacinia-lectus-1">Mauris Lacinia Lectus
                      </a>
                    </h4>
                    <div class="author">by 
                      <b>Jon Silver
                      </b>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque.
                    </p>
                    <a class="link-commet" href="/blogs/news/mauris-lacinia-lectus-1#addcomment">
                      <span class="icon icon-message ">
                      </span>
                      <span class="number">0
                      </span> comment(s)
                    </a>
                  </div>
                </div>
              </div>
              <!-- / -->
         
            <h4 class="text-uppercase title-aside">ARCHIVES
            </h4>
            <div class="block-underline">
              <ul class="categories-list">
                <li>
                  <a href="#">July 2016
                  </a>
                </li>
                <li>
                  <a href="#">Juny 2016
                  </a>
                </li>
                <li>
                  <a href="#">May 2016
                  </a>
                </li>
                <li>
                  <a href="#">April 2016
                  </a>
                </li>			              
              </ul>
            </div>
            <h4 class="text-uppercase title-aside">META
            </h4>
            <div class="block-underline">
              <ul class="categories-list">
                <li>
                  <a href="#">Entries RSS
                  </a>
                </li>
                <li>
                  <a href="#">WordPress.org
                  </a>
                </li>
                <li>
                  <a href="#">Magento
                  </a>
                </li>
                <li>
                  <a href="#">Shopify
                  </a>
                </li>
              </ul>
            </div>				
          </aside>
        </div>
      </div>
    </div>
@endsection
