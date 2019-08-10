<?php
session_start(); 
include ("commons.php")
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Po uzoru na: https://www.templatemonster.com/demo/58330.html -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" type="text/css">

    <title>MetHotels</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light justify-content-center">

        <a class="navbar-brand" href="#" style="padding-left: 12%; padding-right: 12%">
            <img src="images/logo_jasmine.png" style="max-width:100%; height: 80%;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link rounded-0 nav-link-top" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 nav-link-top" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 nav-link-top" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 nav-link-top" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 nav-link-top" href="#">Contact</a>
                </li>
            </ul>

            <button class="d-none d-lg-block btn btn-primary" style="margin-left: 12%;">Book a Room</button>
            
            <?php
            if(isLoggedIn()) {
                echo "<a class=\"d-none d-lg-block btn btn-link\" style=\"margin-left: 1%\" href=\"signout.php\">SignOut</a>";
            } else {
                echo "<a class=\"d-none d-lg-block btn btn-link\" style=\"margin-left: 1%\" href=\"login.php\">Login/Register</a>";
            }
            ?>
            
        </div>

    </nav>

    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; background-color: #f7f7f7;">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 center_text_1"><b>Your Perfect<br>Accommodation</b></h1>
                <p class="lead center_text_2">Jasmine hotel offers comfortable accommodation with a wide variety of rooms, additional services, and amenities available to all our guests. We offer the highest level of hospitality and great customer service.</p>
            </div>
        </div>

        <div class="container room-cards-container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card img-fluid card-room">
                        <img class="card-img-top card-room-image" src="images/room_1.jpg" alt="Room Image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Standard Room</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros tortor, bibendum non neque vel, fringilla fermentum sapien. Nunc sodales nunc massa.</p>
                            <a href="#" class="btn btn-primary">Check availability</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card img-fluid card-room">
                        <img class="card-img-top card-room-image" src="images/room_2.jpg" alt="Room Image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Deluxe Room</h4>
                            <p class="card-text">Curabitur elementum, orci sit amet pretium ullamcorper, neque nisl elementum justo, eget porttitor massa sapien eget est. Donec egestas dui tellus.</p>
                            <a href="#" class="btn btn-primary">Check availability</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card img-fluid card-room">
                        <img class="card-img-top card-room-image" src="images/room_3.jpg" alt="Room Image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">Premium Suite</h4>
                            <p class="card-text">Nam auctor efficitur neque suscipit scelerisque. Sed rutrum maximus ipsum. Mauris auctor ultrices elit, eget convallis ligula mollis eget.</p>
                            <a href="#" class="btn btn-primary">Check availability</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="background-color: #171422; height: 15vh;">
            <div class="col-sm-12" style="display: flex; align-items: center;">
                <div class="container">
                    <p class="text-center" style="color: rgba(255, 255, 255, 0.4); font-size: 1rem;"> © 2019 Jasmine Hotel. All rights reserved. Design by Milan Jović - 1177</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
