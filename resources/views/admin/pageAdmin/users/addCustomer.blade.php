@extends('masterAdmin')
@section('content')     
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-content collpase show">
                <div class="card-body">

                  <form class="form form-horizontal" action="{!! route('getAddCustomer')!!}" method="POST" enctype="multipart/form-data" id="form-AddCustomer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4> 
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">User name
                        </label>
                        <div class="col-md-9 ">
                          <input type="text" id="txt_name" class="form-control" placeholder="User name"
                            name="txt_name" value="{!! old('txt_name') !!}">
                          <p style="color:red;display: none;" class="error errorLogin"></p>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Phone
                          </label>
                          <div class="col-md-9">
                            <fieldset class="form-group"><input type="text" id="txt_phone" class="form-control" placeholder="Phone"
                            name="txt_phone" value="{!! old('txt_phone') !!}">
                            <p style="color:red;display: none;" class="error errorPhone"></p>
                            </fieldset>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Emaill
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="txt_email" class="form-control" placeholder="Emaill"
                            name="txt_email" value="{!! old('txt_email') !!}">
                            <p style="color:red;display: none;" class="error errorEmail"></p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Address
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="txt_address" class="form-control" placeholder="Address"
                            name="txt_address" value="{!! old('txt_address') !!}">
                            <p style="color:red;display: none;" class="error errorAdress"></p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Gender
                        </label>
                        <div class="col-md-9">
                          <select id="txt_gender" value="{!!old('txt_gender')!!}" name="txt_gender" class="form-control">
                            <option value="none" selected="" disabled="">Gender
                            </option>
                            <option value="Nữ" id="txt_gender">Famale
                            </option>
                            <option value="Nam" id="txt_gender">Male
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Password
                        </label>
                        <div class="col-md-9">
                          <input type="password" id="txt_password" class="form-control" placeholder="Password"
                            name="txt_password" value="{!! old('txt_password') !!}">
                            <p style="color:red;display: none;" class="error errorPassword"></p>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <a href="{{route('getemployess')}}">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x">
                          </i> Cancel
                        </button>
                      </a>
                      <button type="submit" class="btn btn-primary" ">
                        <i class="la la-check-square-o">
                        </i> Save
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>      
          </div>
        </div>
    </section>
<!--VIM add JS validate-->
    <script type="text/javascript">
      $(function() {
        $('#contact_form').validate({
          rules : {
            txt_name : {
              required : true   
            },

            txt_email : {
              required : true
            },

            txt_phone : {
              required : true
            },
            
            txt_address : {
              required : true   
            },

            txt_message : {
              required : true
            }
          },

          messages : {
            txt_name : {
              required : "You must fill information"  
            },

            txt_email : {
              required : "You must fill information"
            },

            txt_phone : {
              required : "you must fill information"
            },

            txt_address : {
              required : "You must fill information" 
            },

            txt_message : {
              required : "you must fill information" 
            }
          },
        });
      })
    </script>
<!--END JS validate-->
  </div>
</div>
@endsection
