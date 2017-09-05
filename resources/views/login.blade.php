<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <title>WAMPLO</title>
</head>
<body>
<div class="wrapper">
    <form action="{{url('/login')}}" method="post">
    {{csrf_field()}}
        <div class="container">
        <i class="fa fa-envelope-o"></i>
                <input type="text" name="user" id="user" class="form-log" placeholder="Email">
        </div>
        <div class="container">
            <i class="fa fa-lock"></i>
                <input type="password" name="pass" id="pass" class="form-log" placeholder="Password">
        </div>
        <div class="container">
                <input type="submit" value="LOGIN" class="btn-log pull-left">
                <input type="reset" value="RESET" class="btn-log pull-right">
        </div>
    
    </form>

</div>
    
</body>
</html>
