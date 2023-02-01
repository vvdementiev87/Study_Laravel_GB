<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Page</title>
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
                <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
                <a class="nav-link fw-bold py-1 px-0" href="{{route('categories.index') }}">Categories</a>
                <a class="nav-link fw-bold py-1 px-0" href="{{route('admin.admin.index') }}">Admin panel</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>Заказ</h1>
        <div>
            <form method="post" action="{{route('orders.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                </div>
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="tel" id="phone" name="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                </div>
                @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                </div>
                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                <div class="form-group">
                    <label for="info">Запрос</label>
                    <textarea class="form-control @error('info') is-invalid @enderror" id="info" name="info">{{old('info')}}</textarea>
                </div>
                @error('info') <span class="text-danger">{{$message}}</span> @enderror
                <br>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
</div>


</body>
</html>
