<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eb1205b787.js" crossorigin="anonymous"></script>
    <style>
        /* .vl { */
        /* border: 2px solid gray;
            height: 440px;
            position: absolute;
            left: 33%;
            top: 180px;
        } */

        i {
            color: #0000cc;
            font-size: 20px
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">CRUD App</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>



        </div>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </nav>
    <div class="container">
        <h2 class="text-center">Details of : <?= $vname; ?></h2>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-2 bg-info p-2 rounded">
                <h4 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h4>
                <div class="text-center">
                    <img src="<?= $vphoto ?>" width="200" class="img-thumbnail" alt="">
                </div>
                <h5 class="text-light">Name : <?= $vname; ?></h5>
                <h5 class="text-light">Email : <?= $vemail; ?></h5>
                <h5 class="text-light">Phone No : <?= $vphone; ?></h5>

            </div>

        </div>
        <div class="container-fluid flex-grow-1 m-1" style="border:3px solid blue; border-radius:10px;">

            <div class="col-lg-10 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-2"><u>FOLLOW US AT:</u></h6>
                <p class="text-muted mb-1">Thank you for your Love and Support...</p>
                <ul class="list-inline mt-1">
                    <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fab fa-2x fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fab fa-2x fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fab fa-2x fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="YouTube"><i class="fab fa-2x fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="Google"><i class="fab fa-2x fa-google"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- <hr class="p-0 m-0 b-0"> -->
        <div class="bg-light py-2">
            <div class="container text-center">
                <a href="#" class="text-primary mb-0 py-2" title="© 2021 Creator:@Saurabh Mahajan.">© 2021 Creator:@Saurabh Mahajan.</a>
            </div>
        </div>
        </footer>
    </div>
</body>

</html>