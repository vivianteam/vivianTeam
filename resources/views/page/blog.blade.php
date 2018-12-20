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
        <span>News
        </span>
      </li>
    </ol>
  </div> 
</section>
<div id="pageContent" class="starthide">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-12" id="centerColumn">
        <div class="blog-layout">
          <!-- title -->
          <div class="title-box">
            <h1 class="text-center text-uppercase title-under">Blog
            </h1>
            <p id="msg" class="alert alert-success">
            </p>
            <form action="{!! route('getBlog')!!}" method="POST">
              @foreach($persons as $person)
              <?php
                $day=date("d", strtotime("$person->created_at"));
                $month=date("M", strtotime("$person->created_at"));
              ?>
              {{csrf_field()}}
              <div class="">
                <div class="post">
                  <div class="post__title_block">
                    <figure>
                      <a href="{{route('getcomment',$person->id)}}">
                        <img src="{{asset('image/')}}/bogs/{{ $person->image }}" alt="Mauris Lacinia Lectus">
                      </a>
                    </figure>
                    <div class="pull-left">
                      <time>
                        <span>{{$day}}
                        </span>{{$month}}
                      </time>
                    </div>
                    <div class="pull-left">
                      <h2 class="post__title text-uppercase">
                        <a href="#">{{$person->title}}
                        </a>
                      </h2>
                      <div class="post__meta">
                        <span class="post__meta__item">
                          <span class="autor">by 
                            <b>{{$person->username}}
                            </b>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div> 
                  <p>{{ $person->description }}</p>
                  <a id="containnerTest">
                    @if($person->id_user==Auth::user()->id)
                      <div class="active{{$person->id}}">
                      @if($getPerson->status==1)
                        <img src="{{asset('image/')}}/like/1.png" onclick="ajaxToggoActiveStatusLike({{$person->id}}, 0)">(2)
                      @else
                        <img src="{{asset('image/')}}/like/like.png" onclick="ajaxToggoActiveStatusLike({{$person->id}}, 1)">(1)
                      @endif
                    @else
                        <img src="{{asset('image/')}}/like/like.png" onclick="ajaxToggoActiveStatusLike({{$person->id}}, 0)">(2)
                    @endif
                  </a>
                </div>
              </div>
              @endforeach
            </form>
          </div>
          <ul class="pagination">
            <li class="active">
              <a>1
              </a>
            </li>
            <li>
              <a href="/blogs/news?page=2" title="">2
              </a>
            </li>
            <li>
              <a href="/blogs/news?page=3" title="">3
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="divider divider--lg visible-md visible-sm visible-xs">
      </div>
      <form class="form form-horizontal" action="{!! route('getBlog')!!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <aside class="col-xl-4 col-lg-4  col-md-12" id="rightColumn">
          <h4 class="text title-aside">USERNAME :
            <a href="#">vim ♥
            </a>
          </h4>
          <div class="form-group">
            <label for="Description">Title:
            </label>
            <input type="text" class="form-control" rows="2" />
          </div>
          <div class="form-group">
            <label for="Description">Description:
            </label>
            <textarea class="form-control" rows="5" id="description" name="txt_Decription">
            </textarea>
          </div>
          <div class="block-underline">
            <ul class="categories-list">
            </ul>
            <div class="upload-btn-wrapper">
              <button class="btnInputFile">Upload a file
              </button>
              <input type="file" name="img" id="chooseimg" />
            </div>
          </div>
          <div class="form-group">
            <img id="image" height="200px" />
          </div>
          <button type="submit" class="btn btn--ys btn--xl">submit
          </button>
        </aside>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  function ajaxToggoActiveStatusLike(id_user, presentStatus){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{ route('postCheckLike') }}",
      type: 'POST',
      cache: false,
      data: {
        id:id_user, status:presentStatus}
      ,
      success: function(data){
        $('.active'+id_user).html(data);
      }
      ,
      error: function (){
        alert('Lỗi đã xảy ra');
      }
    });
    return false;
  }
</script>
@endsection
