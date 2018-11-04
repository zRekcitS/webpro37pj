<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    {{--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    {{ Html::style('vendor/bootstrap/css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{--<link href="css/modern-business.css" rel="stylesheet">--}}
    {{ Html::style('css/modern-business.css') }}

</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Post Your Things</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Admin</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                        <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{ Html::script('vendor/jquery/jquery.min.js') }}
{{ Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js') }}
</body>
</html>
