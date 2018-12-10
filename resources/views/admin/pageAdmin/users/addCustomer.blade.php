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
                  <form class="form form-horizontal" action="{!! route('getCustomer')!!}" method="POST" enctype="multipart/form-data" id="form-AddCustomer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4> 
                       @include('admin.pageAdmin.error')
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
                              <fieldset class="form-group">
                                <input type="text" id="txt_phone" class="form-control" placeholder="Phone"
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
                      <a href="{{route('getCustomer')}}">
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
    <!--
    <script type="text/javascript">
      $(document).ready(function() {
       $(".form").validate({
        rules: {
            userName: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            userName: {
                required: "specify userName"
            },
            password: {
                required: "specify password"
            }
        },
        errorClass: "help-inline text-danger",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-success');
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            console.log('Form submitted');
            $.ajax({
                type: 'POST',
                url: 'authenticate.jsp',
                dataType: "html",
                data: $('form').serialize(),
                success: function(result) {
                    window.location.href = "dashboard.jsp";
                },
                error : function(error) {

                }
            });
            return false;
        }
    });
    }); 
    </script>
    <!-- // Basic form layout section end -->
    <!--
    <script type="text/javascript">
    $(function() {
      $('#form-AddCustomer').validate({
        rules : {
          txt_name:{
            required : true,
            minlength : 8,
            maxlength : 30
          },
          txt_phone:{
            required: true, 
            number : true, //  bắt buộc là kiểu số
            digits :true,  // không được tồn tại số âm
            maxlength: 10
          },
          email : {
            required : true,
            email : true
          },
          txt_address:{
            required: true;
          },
          password : {
            required : true,
            minlength : 8
          }
        },
        messages : {
          txt_name:{
            required:"User name không được trống",
            minlength:"User name phải có ít nhất 8 kí tự",
            maxlength:"User name không được lớn hơn 30 kí tự"
          },
          txt_phone:{
            required:"Phone không được trống",
            number:" chỉ được phép nhập số",
            digits:"Không được tồn tại số âm",
            maxlength:"không được lớn hơn 10 số"
          },
          email : {
            required : "Email không được để trống",
            email : "Email không đúng định dạng",
          },
          txt_address:{
            required:" Address không được trống",
          },
          password : {
            required : "Mật khẩu không được để trống",
            minlength : "Mật khẩu phải có ít nhất 8 ký tự"
          }
        },
        submitHandler : function(form-AddCustomer) {
            //do something here
            form-AddCustomer.submit();
        }
        -- !>

        // submitHandler : function () {
        //   $.ajaxSetup({
        //     headers:{
        //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contents')
        //     }
        //   });
        //   $ajax({
        //     'url':'{{route('postAddCustomer')}}',
        //     'data':{
        //         'username':$('#txt_name').val(),
        //         'password':$('#password').val(),
        //         'phone':$('#txt_phone').val(),
        //         'email':$('#email').val(),
        //         'address':$('#txt_address').val(),
        //         'gender':$('#txt_gender').val(),
        //         'id_type':$(1).val()
        //     }
        //     'type':'POST',
        //     success: function(dat){
        //       if(data.error == true){
        //         $('.error').hide();
        //         if(data.messages.txt_name!=undefined){
        //           $('.errorLogin').show().text(data.messages.txt_name(0));
        //         }
        //         else{
        //           window.location.href="{{route('getAddCustomer')}}"
        //         }
        //       }
        //     }
        //   })
        // }

      });
    })
  </script>
    -->
  </div>
</div>
@endsection
