<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<main role="main">

    @yield('content')

    <footer class="row">
        @include('includes.footer')
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>