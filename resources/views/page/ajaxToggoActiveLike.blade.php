
@if($status == 1)
    <img src="{{asset('image/')}}/like/like.png" onclick="ajaxToggoActiveStatusLike({{$person->id}}, 1)">
@else
    <img src="{{asset('image/')}}/like/like.png" onclick="ajaxToggoActiveStatusLike({{$person->id}}, 0)">
@endif
