<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecart</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensures the body takes the full height of the viewport */
        }
        .custom-login {
            height: 650px;
            padding-top: 100px; 
        }
        img.slider-img {
            height: 400px !important;
            margin-left: 200px;
        }
        .custom-product {
            height: 1150px;
        }
        .trending-image {
            height: 100px;
        }
        .trending-item {
            text-align: center;
            float: left;
            width: 20%;
        }
        .detail-img {
            height: 200px;
        }
        .search-box {
            width: 500px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto; /* Pushes the footer to the bottom */
        }
    </style>
</head>

<body>
    {{ View::make('header') }}
    <main role="main" class="flex-fill">
        @yield('content')
    </main>
    {{ View::make('footer') }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
