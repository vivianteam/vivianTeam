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
            <a href="/account" title="">Account
            </a>
          </li>
          <li>
            <span>Update Account
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">       
        <!-- title -->
        <div class="title-box">
          <h1 class="text-center text-uppercase title-under">Update AN ACCOUNT
          </h1>
        </div>
        <!-- /title -->   
        <div class="row">
          <section class="col-sm-12 col-md-6 col-lg-6col-sm-12 col-sm-offset-0  col-md-offset-3  col-lg-offset-3 col-xl-4 col-xl-offset-4">
            <div class="login-form-box">
              <div id="login">
                <h3 class="color small">PERSONAL INFORMATION
                </h3>
                @if(Auth::check())
                  <form id="register" action="{{route('postUpdateAcc')}}" method="post" class="beta-form-checkout">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                      <div class="col-sm-3"></div>
                      @if(count($errors)>0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                          {{$err}}
                          @endforeach
                        </div>
                      @endif
                      @if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                      @endif
                    </div>
                    <input type="hidden" name="form_type" value="create_customer" />
                    <input type="hidden" name="utf8" value="?" />
                    <div class="form-group">
                      <label for="fname">Full Name
                        <sup>*
                        </sup>
                      </label>
                      <input type="text" name="txt_fullName" class="form-control" id="" value="{{Auth::user()->username}}">
                    </div>
                    <div class="form-group">
                      <label for="email">Email 
                        <sup>*
                        </sup>
                      </label>
                      <input type="email" name="txt_Email" class="form-control" id="" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                      <label for="email">Phone 
                        <sup>*
                        </sup>
                      </label>
                      <input type="text" name="txt_phone" class="form-control" id="" value="{{Auth::user()->phone}}">
                    </div>

                    <div class="form-group">
                      <label for="pass">Password 
                        <sup>*
                        </sup>
                      </label>
                      <input type="password" name="txt_Password" class="form-control" id="" value="{{Auth::user()->password}}">
                    </div>
                    <div class="form-group">
                      <label for="lname">Gender
                        <sup>*
                        </sup>
                      </label>
                      <input type="text" name="txt_Gender" class="form-control" id="" value="{{Auth::user()->gender}}">
                    </div>
                    <div class="form-group">
                      <label for="lname">Address
                        <sup>*
                        </sup>
                      </label>
                      <input type="text" name="txt_Address" class="form-control" id="" value="{{Auth::user()->address}}">
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn--ys btn-top btn--xl">Update
                        </button>
                        <div class="cancel-bottom">
                          &nbsp;or
                          <a href="{{route('index')}}">Return to Store
                          </a>
                        </div>
                      </div>
                      <div class="divider divider--md visible-xs">
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pull-right note btn-top">* Required Fields
                        </div>
                      </div>
                    </div>
                  </form>
                @else
               <div class="container">        
                <!-- title -->
                <div class="title-box">
                  <!--  -->
                  <br/>
                  <br/>
                </div>
                </div>
                <!-- /title -->   
                <div class="text-center"> 
                  <img src="{{asset('image/')}}/img/error.png" alt="empty cart icon" class="img-responsive-inline" />
                  <div class="divider divider--lg">
                  </div>
                  <br/>
                  <br/>
                  <h4 class="color">You need to login or register here
                  </h4>
                  <div class="divider divider--lg">
                  </div>
                  <br/>
                  <br/>
                  <a class="btn btn--ys" href="{{route('loginPage')}}">
                    <span class="icon icon-keyboard_arrow_left">
                    </span>Login
                  </a>              
                </div>          
              </div>
              @endif
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection