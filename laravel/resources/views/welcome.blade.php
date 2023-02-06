<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome page</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/cover.css')}}" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Новостной портал</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link fw-bold py-1 px-0" href="{{route('categories.index') }}">Categories</a>
                <a class="nav-link fw-bold py-1 px-0" href="{{route('admin.index') }}">Admin panel</a>

            </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>News Portal</h1>
        <p class="lead">Welcome on news portal</p>
        <p class="lead">
            <a href="{{route('news.index') }}" class="btn btn-lg btn-light fw-bold border-white bg-white">read news</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        <p class="lead">
            <a href="{{route('feedbacks.create') }}" class="btn btn-sm btn-light fw-bold border-white bg-white">leave
                feedback</a>
        </p>
        <p class="lead">
            <a href="{{route('orders.create') }}" class="btn btn-sm btn-light fw-bold border-white bg-white">make order</a>
        </p>
    </footer>
</div>


</body>
</html>
