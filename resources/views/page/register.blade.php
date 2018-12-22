@extends('master')
@section('content')
<style type="text/css">
  .error{
    color: red;
  }
</style>
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
            <span>Create Account
            </span>
          </li>
        </ol>
      </div>
    </section>
    <div id="pageContent" class="starthide">
      <div class="container">       
        <!-- title -->
        <div class="title-box">
          <h1 class="text-center text-uppercase title-under">CREATE AN ACCOUNT
          </h1>
        </div>
        <!-- /title -->   
        <div class="row">
          <section class="col-sm-12 col-md-6 col-lg-6col-sm-12 col-sm-offset-0  col-md-offset-3  col-lg-offset-3 col-xl-4 col-xl-offset-4">
            <div class="login-form-box">
              <div id="login">
                <h3 class="color small">PERSONAL INFORMATION
                </h3>
                <form id="register" action="{{route('signin')}}" method="post" class="beta-form-checkout">
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
                    <input type="text" name="txt_fullName" class="form-control" id="" required pattern="^[a-zA-Z0-9 ]*$" title="Name Invalid">
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email 
                      <sup>*
                      </sup>
                    </label>
                    <input type="email" name="txt_Email" class="form-control" id="" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid">
                  </div>
                  <div class="form-group">
                    <label for="email">Phone 
                      <sup>*
                      </sup>
                    </label>
                    <input type="text" name="txt_phone" class="form-control" id="" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="invalid Phone Numbers">
                  </div>

                  <div class="form-group">
                    <label for="pass">Password 
                      <sup>*
                      </sup>
                    </label>
                    <input type="password" name="txt_Password" class="form-control" id="" required pattern=".{6,}" title="Six or more characters">
                  </div>
                  <div class="form-group">
                    <label for="lname">Gender
                      <sup>*
                      </sup>
                    </label>
                    <select id="txt_gender" value="{!!old('txt_Gender')!!}" name="txt_Gender" class="form-control">
                      <option value="Nam" id="txt_gender">Male
                      </option>
                      <option value="Nữ" id="txt_gender">Famale
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lname">Address
                      <sup>*
                      </sup>
                    </label>
                    <input type="text" name="txt_Address" class="form-control" id="" required>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <button type="submit" class="btn btn--ys btn-top btn--xl">Create
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
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    </div>

<!-- <script>
 $(function() {
$('#register').validate({
rules : {
  txt_fullName : {
    required : true,
  },
  email : {
    required : true,
    email : true
  },
  txt_Email : {
    required : true,
    email : true
  },
  txt_phone : {
    required: true,
    minlength: 5
  },
  txt_Password : {
    required : true,
    minlength : 8
  },
  txt_Gender : {
    required : true,
  },
  txt_Address : {
    required: true,
    minlength: 2
  }
},
messages : {
  txt_fullName : {
    required : "Please enter a full name",
  },
  txt_Email : {
    required : "Email can not be empty",
    email : "Email invalidate"
  },
  txt_phone : {
    required: "Please enter the phone number",
    minlength: "The number entered is not real"
  },
  txt_Password : {
    required : "Password can not be empty",
    minlength : "Passwords must be at least 8 characters long"
  },
  txt_Gender : {
    required : "Please enter the gender",
  },
  txt_Address : {
    required: "Please enter address",
    minlength: "The address is too short"
  },
  
},

});
})
</script> -->
</div>

@endsection