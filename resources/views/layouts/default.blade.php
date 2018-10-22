<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>

<div class="container">

    <header class="row">

        @include('includes.header')

    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">

        @include('includes.footer')

    </footer>

</div>

</body>

<!--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
-->

</html>