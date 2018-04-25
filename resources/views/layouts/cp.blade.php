<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('cp.users.index')}}">Users</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container" style="margin-top: 2rem">

    <div v-show="message" id="flash-message">
        <div :class="{'alert alert alert-danger alert-dismissible': true, 'show': true}"
             role="alert">
            @{{message}}
            <button @click="message = ''" type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</main>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>