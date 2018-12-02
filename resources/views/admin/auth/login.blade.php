<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClownCms') }}后台-登陆</title>


    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

<!-- Styles -->

    <link href="{{asset('hadmin/css/bootstrap.min.css')}}?v=3.3.6" rel="stylesheet">
    <link href="{{asset('hadmin/css/font-awesome.min.css')}}?v=4.4.0" rel="stylesheet">
    <link href="{{asset('hadmin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('hadmin/css/style.css')}}?v=4.1.0" rel="stylesheet">
    <link href="{{asset('hadmin/css/login.css')}}" rel="stylesheet">

    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-12">
            <form method="post" action="{{route('admin.login')}}">
                {{csrf_field()}}
                <h1 class="no-margins text-center">登录</h1>
                {{--<p class="m-t-md">登录到H+后台主题UI框架</p>--}}
                <input type="text" class="form-control uname" placeholder="用户名"/>
                <input type="password" class="form-control pword m-b" placeholder="密码"/>
                <button class="btn btn-success btn-block">登录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; hAdmin
        </div>
    </div>
</div>
</body>

</html>
