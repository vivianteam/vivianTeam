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
        <span>Contact
        </span>
      </li>
    </ol>
  </div>
</section>
<div id="pageContent" class="starthide">
  <!-- map -->
  <section class="content-bottom">
    <div id="map">
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Bps63tvWGEu5HywG8-jqgl5GvySUwLMU" width="100%" height="100%">
      </iframe>
    </div>
  </section>
  <!-- /map -->
  <section class="container">       
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <h2 class="text-uppercase title-bottom">CONTACTS
        </h2>
        <ul class="list-icon">
          <li>
            <span class ="icon icon-home">
            </span> 
            <strong>Address :
            </strong> 199 Lê Đại Hành|250 Phan Chu Trinh
          </li>
          <li>
            <span class ="icon icon-call">
            </span> 
            <strong>Phone:
            </strong> +777 2345 7885
          </li>
          <li>
            <span class ="fa fa-fax">
            </span> 
            <strong>Fax:
            </strong> +777 2345 7886
          </li>
          <li>
            <span class="icon icon-schedule">
            </span> 
            <strong>Hours:
            </strong> 7 Days a week from 10:00 am to 6:00 pm
          </li>
          <li>
            <span class="icon icon-mail">
            </span> 
            <strong>E-mail:
            </strong> 
            <a class="color" href="mailto:info@mydomain.com">vivian@gmail.com
            </a>
          </li>
        </ul>
        <div class="divider divider--sm">
        </div>
        <div class="social-links social-links--large">
          <ul>
            <li>
              <a class="icon fa fa-facebook" href="#">
              </a>
            </li>
            <li>
              <a class="icon fa fa-twitter" href="#">
              </a>
            </li>
            <li>
              <a class="icon fa fa-google-plus" href="#">
              </a>
            </li>
            <li>
              <a class="icon fa fa-instagram" href="#">
              </a>
            </li>
            <li>
              <a class="icon fa fa-youtube-square" href="#">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="divider divider--lg visible-xs">
        </div>
        <h2 class="text-uppercase title-bottom">GET IN TOUCH WITH US
        </h2>
        <form method="post" action="{{route('contact')}}" id="contact_form" accept-charset="UTF-8" class="contact-form">
          <input type="hidden" name="form_type" value="contact" />
          <input type="hidden" name="utf8" value="✓" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}" >
          <!-- input -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-g roup">
                <label for="inputName">Name 
                  <sup>
                  </sup>
                </label>
                <input name="txt_name" type="text" class="form-control" id="inputName">
                <p style="color:red;display:none;" class="error errorEmail"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="inputEmail">Email 
                  <sup>*
                  </sup>
                </label>
                <input name="txt_email" type="email" class="form-control" id="inputEmail">
                <p style="color:red;display:none;" class="error errorEmail"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="inputPhone">Phone 
                  <sup>*
                  </sup>
                </label>
                <input name="txt_phone" type="tel" class="form-control" id="inputPhone" maxlength="10"></input>
                <p style="color:red;display:none;" class="error errorEmail" name="phone-error-message"></p>
              </div>
            </div>
          </div>
          <!-- /input -->
          <!-- textarea --> 
          <div class="form-group">
            <label for="textareaMessage">Message 
              <sup>*
              </sup>
            </label>
            <textarea class="form-control" name="txt_message" rows="12"  id="textareaMessage"></textarea>
            <p style="color:red;display:none;" class="error errorEmail"></p>
          </div>
          <!-- /textarea -->
          <!-- button -->
          <div class="pull-right note">* Required Fields
          </div>
          <button class="btn btn--ys btn--xl btn-top" type="submit">Send Message
          </button>
          <!-- /button -->               
        </form>
      </div>
    </div>          
  </section>
</div>

<!--VIM add JS validate-->
    <script type="text/javascript">
      $(function() {
        $('#contact_form').validate({
          rules : {
            txt_name : {
              required : true,
              number : false,
              maxlength: 30       
            },

            txt_email : {
              required : true,
              email : true
            },

            txt_phone : {
              required : true,
              number: true,
              minlength: 9.5
            },
            
            txt_message : {
              required : true
            }
          },

          messages : {
            txt_name : {
              required : "You must fill information",
              number: "Your inforamtion contain Number",    
              maxlength: "your Name Over 30 character"      
            },

            txt_email : {
              required : "You must fill information",
              email : "format wrong email"
            },

            txt_phone : {
              required : "you must fill information",  
              number : "you must fill Number",
              minlength: "your phone Less 10 character",     
            },

            txt_message : {
              required : "you must fill information" 
            }
          },
        });
      })
    </script>
<!--END JS validate-->
@endsection
