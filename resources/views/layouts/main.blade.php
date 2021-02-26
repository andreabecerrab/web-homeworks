<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <!-- google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <title>Our web application</title>
    </head>
    <body>
    <!-- create row -->
    <ul class="nav" style="background-color:#222;">
        <li class="nav-item">
            <a class="nav-link" style="color:white;" href="{{ route('products.index') }}">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:white;"  href="{{ route('instructions.index') }}">Nutritional Contents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:white;" href="{{ route('guides.index') }}" >Guides</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:white;" href="{{ route('recipes.index') }}" >Recipes</a>
        </li>
    </ul>
    @yield('content')
    </body>
</html>
