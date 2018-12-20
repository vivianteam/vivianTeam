@if($getPerson->id_user==Auth::user()->id)
              <?php
//dd($getPerson->id_user);
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