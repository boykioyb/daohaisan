<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('back/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <form method="post" class="m-t" role="form" action="{{ route('login') }}">
            {{ csrf_field() }}
            @if(session('msg'))
                <span class="text-danger">
                {{ session('msg') }}
            </span>
            @endif
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" >
                @if(asset($errors->first('username')))
                    <span class="text-danger">{{$errors->first('username')}}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" >
                @if(asset($errors->first('password')))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('back/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>

</body>

</html>
