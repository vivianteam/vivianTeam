
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S-cart Admin | Login</title>
  @include("viewAdmin.elements.stylesheet")
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo">
    <a href="/test/public/"><b>S-cart admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login</p>

    <form action="/system_admin/auth/login" method="post">
      <div class="form-group has-feedback 1">

        
        <input type="input" class="form-control" placeholder="Username" name="username" value="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback 1">

        
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4 col-md-offset-4">
          <input type="hidden" name="_token" value="4jiYiwdHvcv6FYDDZlSxbeUMHgexMhpuYh9Y7acB">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include("viewAdmin.elements.script")
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
