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
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        .wrapper {
            display: flex;
            width: 100%;
            height: 100%;
            flex-flow: column;
            justify-content: center;
            align-items: center;
        }

        .card {
            display: block;
            width: 95%;
            background: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.192);
            border-radius: 8px
        }

        .card .card-header {
            padding: 40px 10px 10px;
            text-align: center;
        }


        .card .card-body {
            padding: 10px
        }

        .footer {
            margin-top: 50px;
        }

        a {
            text-decoration: none;
            color: #f26b12
        }

        @media (min-width: 992px) {
            .card {
                width: 60%
            }

            .card .card-body {
                padding: 10px 30px
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <a href="https://mayaspringbed.id" target="_blank"><img src="{{asset('img/Logo.png')}}" alt="Logo"></a>
            </div>
            <div class="card-body">
                <h3>Nama : Indra Ranuh</h3>
                <h3>Email : <a href="mailto:">indraranuh1@gmail.com</a></h3>

                <h3>Pesan:</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quod cum laboriosam beatae quidem,
                    saepe iste commodi dicta maxime voluptatem molestiae nihil, est amet, non dolore excepturi
                    voluptates. Deleniti, rem.</p>
                {{-- <h3>Nama : {{$name}}</h3>
                <h3>Email : <a href="mailto:{{$email}}">{{$email}}</a></h3>

                <h3># Pesan:</h3>
                <p>{{$pesan}}</p> --}}
            </div>
        </div>
        <div class="footer">
            &copy; 2020. <a href="https://mayaspringbed.id" target="_blank">Maya Spring Bed</a>. All rights reserved.
        </div>
    </div>
</body>

</html>
