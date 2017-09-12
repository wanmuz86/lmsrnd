<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->

    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('css/font-awesome.min.css')!!}
    <!-- Ionicons -->
    {!!Html::style('css/ionicons.min.css')!!}

    <!-- Theme style -->
    {!!Html::style('css/AdminLTE.min.css')!!}


    {!!Html::style('css/blue.css')!!}


    @yield('style')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#" class=""><b>Asia Dev</b>Academy LMS</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body bg-orange ">
    <p class="login-box-msg ">Sign in to start your session</p>

    <form action="{{route('login')}}" method="post">
    {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a >I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>

{!!Html::script('js/jquery.min.js')!!}
<!-- Bootstrap 3.3.6 -->
{!!Html::script('js/bootstrap.min.js')!!}
<!-- AdminLTE App -->
{!!Html::script('js/app.min.js')!!}

@yield('script')
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
