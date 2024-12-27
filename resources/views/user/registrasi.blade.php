<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT.DIKA | Registration </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/plugins/iCheck/square/blue.css') }}">



    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ asset('AdminLTE2/') }}index2.html"><b>PT.DIKA</b> <br> REGISTER</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>
            <div class="form-group">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <form action="{{ route('registerstore') }}" method="post">
                @csrf
                @method('POST')
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control @error('name') has-error @enderror"
                        placeholder="Full name">
                    @error('name')
                        <div class="form-group has-error">
                            <div class="help-block">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control @error('email') has-error @enderror"
                        placeholder="Email">
                    @error('email')
                        <div class="form-group has-error">
                            <div class="help-block">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control @error('password') has-error @enderror"
                        placeholder="Password">
                    @error('password')
                        <div class="form-group has-error">
                            <div class="help-block">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('AdminLTE2/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>
