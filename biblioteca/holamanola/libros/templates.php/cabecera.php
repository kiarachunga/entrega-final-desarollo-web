<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body class="body">

    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.php">Speak Now</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-togller-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="mostrarCarrito.php">Prestamo(<?php
                    echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)</a>
            </li>
        </nav>
        </div>
    </nav>

    <br/>
    <br/>

    <div class="container">