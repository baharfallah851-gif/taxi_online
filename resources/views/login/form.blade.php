<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('img/taxi.ico')}}" type="image/icon">
    <title>TaxiOnline | VIVARA</title>

    <style>
        html, body {
            height: 100%;
            background-image:
                linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url({{ asset('img/image.jpg') }});

            background-size: cover;
            background-position: center -180px;
        }

        .login-box {
            position: absolute;
            top: 40%;
            left: 70%;
            transform: translate(-50%, -45%);
            width: 100%;
            max-width: 400px;
            padding: 25px;
            background: rgba(191, 191, 191, 0.7);
            border-radius: 6px;
            box-shadow: 0 0 15px rgb(213, 158, 42);
        }

        .primary-btn {
            background: #817667;
            line-height: 40px;
            padding-left: 30px;
            padding-right: 30px;
            border: none;
            font-weight: 600;
        }
        .primary-btn:hover {
            background-color: #b68747;
            color: #fff;
        }


    </style>
</head>

<body>
    <div class="login-wrapper">
        <form method="post" class="login-box" action="{{route('login.enter')}}">
            @csrf
            <h1 class="text-center">Login</h1>
            <div class="form-group">
                <label>username</label>
                <input class="form-control" type="text" name="username" required>
            </div>

            <div class="clearfix"></div>
            <div class="form-group">
                <label>password</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember" class="form-check-input" value="1">
                    remember me
                </label>
            </div>

            <div class="clearfix"></div>
            <button class="btn btn-block primary-btn" type="submit" href="{{route('dashboard')}}">login</button>

        </form>
    </div>
</body>
</html>
