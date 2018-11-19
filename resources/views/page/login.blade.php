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
            <span>Account
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">				
        <!-- title -->
        <div class="title-box">
          <h1 class="text-center text-uppercase title-under">ALREADY REGISTERED?
          </h1>
        </div>
        <!-- /title -->		
        <div class="row">
          <section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
            <div class="login-form-box">
              <h3 class="color small">NEW CUSTOMER
              </h3>
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.
              </p>
              <br>
              <a class="btn btn--ys btn--xl" href="{{route('signin')}}">
                <span class="icon icon-person_add">
                </span>CREATE AN ACCOUNT
              </a>
            </div>
          </section>
          <div class="divider divider--md visible-sm visible-xs">
          </div>
          <section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="login-form-box">
              <div id="login">
                <h3 class="color small">RETURNING CUSTOMER
                </h3>
                <p>If you have an account with us, please log in.
                </p>
                <form action="{{route('loginPage')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="row">
                    <div class="col-sm-3"></div>
                      @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                      @endif
                    </div>
                  <input type="hidden" name="form_type" value="customer_login" />
                  <input type="hidden" name="utf8" value="✓" />
                  <div class="form-group">
                    <label for="email">Email Address 
                      <sup>*
                      </sup>
                    </label>
                    <input type="email" name="txt_Email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password 
                      <sup>*
                      </sup>
                    </label>
                    <input type="password" name="txt_Password" class="form-control" id="password">
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <button type="submit" class="btn btn--ys btn-top btn--xl">
                        <span class="icon icon-vpn_key">
                        </span> Login
                      </button>
                    </div>
                    <div class="divider divider--md visible-xs">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="pull-right note btn-top">* Required Fields
                      </div>
                    </div>
                  </div>  
                  <p class="btn-top">
                    <a href="#" onclick="showRecoverPasswordForm();return false;" class="link-color">Forgot your password?
                    </a>
                  </p>
                </form>
              </div>
              <div id="recover-password" style="display:none;" class="wrap">
                <h3>Reset Password
                </h3>
                <p class="note">We will send you an email to reset your password.
                </p>
                <form method="post" action="/account/recover" accept-charset="UTF-8">
                  <input type="hidden" name="form_type" value="recover_customer_password" />
                  <input type="hidden" name="utf8" value="✓" />
                  <div class="form-group">
                    <label for="email">Email Address 
                      <sup>*
                      </sup>
                    </label>
                    <input type="email" name="email" class="form-control" id="email" autocorrect="off" autocapitalize="off">
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <button type="submit" class="btn btn--ys btn-top btn--xl">Submit
                      </button>
                      <div class="cancel-bottom">
                        &nbsp;or
                        <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel
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
              </div>
            </div>
          </section>
        </div>
      </div>
      <script type="text/javascript">
        function showRecoverPasswordForm() {
          document.getElementById('recover-password').style.display = 'block';
          document.getElementById('login').style.display='none';
        }
        function hideRecoverPasswordForm() {
          document.getElementById('recover-password').style.display = 'none';
          document.getElementById('login').style.display = 'block';
        }
        if (window.location.hash == '#recover') {
          showRecoverPasswordForm() }
      </script>
    </div>
@endsection