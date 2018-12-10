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
            <a href="{{route('getBlog')}}">BLOG
            </a>
          </li>
          <li>
            <span>{{$preson_posts->title}}
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
              <?php
                $day=date("d", strtotime("$preson_posts->created_at"));
                $month=date("M", strtotime("$preson_posts->created_at"));
              ?>
              <!-- title post -->
              <div class="post__title_block">
                <div class="pull-left">
                  <time>
                    <span>{{$day}}
                    </span>{{$month}}
                  </time>
                </div>
                <div class="pull-left">
                  <h2 class="post__title text-uppercase">
                    <a href="#">{{$preson_posts->title}}
                    </a>
                  </h2>
                  <div class="post__meta">
                    <span class="post__meta__item">
                      <span class="autor">by 
                        <b>{{$preson_posts->username}}
                        </b>
                      </span>
                    </span>
                    <span class="post__meta__item">
                      <span class="icon icon-message">
                      </span>
                      <a href="#">0 comment(s)
                      </a>
                    </span>
                    <span class="post__meta__item">
                      <span class="icon icon-folder">
                      </span>
                      <a href="#">News
                      </a> 
                    </span>
                  </div>
                </div>
              </div>
              <!-- /title post -->
              <!-- content post -->
              <p>
                <img style="width: 770px;height: 488px" src="{{asset('image/')}}/bogs/{{ $preson_posts->image }}" class="img-responsive" alt="">
              </p>
              <div class="divider divider--xs">
              </div>
              <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
              </p>
              <blockquote class="quote-left">
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <cite> 
                  <b>Amanda Smith
                  </b> - designer 
                </cite>
              </blockquote>
              <p>Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <!-- /content post -->
            </div>
            <div style="position: relative;">
              <div id="addcomment" style="position: absolute; top: -190px;">
              </div>
            </div>
            <!-- form like -->
            <div class="form-group">
              @if($getPerson->id_user==Auth::user()->id)
              <?php
dd($getPerson->id_user);
              ?>

                @if($getPerson->status==1)
                  <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id_user}}, 1,{{$getPerson->id}})" style="margin-right: 20px" name="testCountLike"  >
                    <img src="{{asset('image/')}}/like/like.png">(2)
                  </a>
                  <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id}}, 0)" style="margin-right: 20px" id="{{$getPerson->id}}" >
                    <img src="{{asset('image/')}}/like/1.png">(1)
                  </a>
                @else
                  <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id_user}}, 1,{{$getPerson->id}})" style="margin-right: 20px" name="testCountLike">
                    <img src="{{asset('image/')}}/like/2.png">(2)
                  </a>
                  <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id}}, 0)" style="margin-right: 20px" id="{{$getPerson->id}}" >
                    <img src="{{asset('image/')}}/like/dislike.png">(1)
                  </a>
                @endif
              @else
                <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id_user}}, 1,{{$getPerson->id}})" style="margin-right: 20px" name="testCountLike" >
                  <img src="{{asset('image/')}}/like/2.png">(2)
                </a>
                <a href="{{route('getLikeTest01',$getPerson->id)}}" onclick="ajaxToggoActiveStatusAdmin({{$getPerson->id}}, 0)" style="margin-right: 20px" id="{{$getPerson->id}}" >
                  <img src="{{asset('image/')}}/like/1.png">(1)
                </a>
              @endif
            </div>

            <!-- end form like -->

            <!-- form comment-->
            <form class="form form-horizontal" action="{{route('getcomment',$preson_posts->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                @foreach($comments as $comment)
                  <div class="form-group">
                    <b>ten</b>: {{ $comment->id }}
                    <p style="font-size:9px;">date</p>
                  </div>
                @endforeach
              <div class="form-group">
                <label for="InputComment">Comment
                </label>
                <textarea name="txt_comment" class="form-control" rows="8">
                </textarea>
              </div>
              <button type="submit" class="btn btn-top btn--ys">Post comment
              </button>
            </form>
            <!-- /form comment-->
          </div>
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
            </div>
          </aside>
        </div>
      </div>
    </div>
@endsection