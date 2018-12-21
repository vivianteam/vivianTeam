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
           <!--  -->
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
                      <a href="#">{{$countComment}} comment(s)
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
            </div>
<!--             <?php
                    //dd($preson_posts->id);
            ?> -->
            <form class="form form-horizontal" action="{{route('postcomment',$preson_posts->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" >
              <div class="form-group">
                <label for="InputComment">Comment
                </label>
                <textarea name="txt_comment" class="form-control" rows="4"></textarea>
              </div>
                <button type="submit" class="btn btn-top btn--ys" data-toggle="modal" data-target="#myModal">Post comment
                </button>
            </form>
            @foreach($comments as $comment)
              <div class="form-group" style="margin-top: 10px">
                <fieldset class="spr-form-contact">
                  <div class="spr-form-contact-name">
                    <img src="{{asset('image/')}}/img/user.png" alt="Bright White Shoes"> &nbsp;&nbsp;
                    <label class="spr-form-label" for="review_email_9097940044">{{$comment->username}}
                    </label>
                    <label style="margin-left: 20px" class="spr-form-label" for="review_email_9097940044">{{$comment->date}}
                    </label>

                  </div>
                </fieldset>
                <label style="margin-top: 10px; margin-left: 15px" class="spr-form-label" for="review_email_9097940044">{{$comment->content}}
                    </label>
              </div>
            @endforeach
            {!! $comments->links() !!}
            <!-- /form comment-->
          </div>
          <div class="divider divider--lg visible-md visible-sm visible-xs">
          </div>
          <!-- right column -->
          <aside class="col-xl-4 col-lg-4  col-md-12" id="rightColumn">
            <h4 class="text-uppercase title-aside">Tags
            </h4>
            <div class="block-underline">
              <ul class="categories-list">
                @foreach($sp_small as $sp_nho)
                  <li class="">
                    <a href="{{ route('collection_women',$sp_nho->id)}}">{{$sp_nho->nameSmallCate}}
                    </a>
                  </li>
                  @endforeach
              </ul>
            </div>
            <h4 class="text-uppercase  title-aside">RECENT POSTS
            </h4>
            <div class="block-underline">
              <!--  -->
              @foreach($persons as $person)
                    <?php
                      $day=date("d", strtotime("$person->created_at"));
                      $month=date("M", strtotime("$person->created_at"));
                    ?>
                    {{csrf_field()}}
                <div class="recent-post-box">
                  <div class="col-lg-12 col-xl-6">
                    <a href="{{route('getcomment',$person->id)}}">
                      <span class="figure">
                        <img src="{{asset('image/')}}/bogs/{{ $person->image }}" alt="Mauris Lacinia Lectus">
                        <span class="figcaption label-top-left">
                          <span>
                            <b>{{$day}}
                            </b>
                            <em>{{$month}}
                            </em>
                          </span>
                        </span>
                      </span>
                    </a>
                  </div>

                  <div class="col-lg-12 col-xl-6">
                    <div class="recent-post-box__text">
                      <h4>
                        <a href="{{route('getcomment',$person->id)}}">{{$person->title}}
                        </a>
                      </h4>
                      <div class="author">by 
                        <b>{{$person->username}}
                        </b>
                      </div>
                      <p>{{$person->title}}
                      </p>
                    </div>
                  </div>
                </div>
              @endforeach
              <!-- / -->
            </div>
          </aside>
        </div>
      </div>
    </div>
@endsection