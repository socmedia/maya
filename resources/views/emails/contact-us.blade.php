<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            display: block;
            width: 100%;
            height: 100%;
            background: #FBE8DC;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('img/Logo.png')}}" alt="Logo">
            </div>
            <div class="card-body">
                <h3>Nama : {{$name}}</h3>
                <h3>Email : <a href="mailto:{{$email}}">{{$email}}</a></h3>

                <h3># Pesan:</h3>
                <p>{{$message}}</p>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
</body>

</html>
