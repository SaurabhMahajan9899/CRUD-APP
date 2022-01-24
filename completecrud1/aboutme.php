<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSKM CRUD App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eb1205b787.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
        body {
            background: linear-gradient(to right, lightblue, lightgreen);

        }


        .container {
            background: white;
            width: 700px;
            padding: 25px;
            margin: 77px auto 20px;
            border: 10px solid blue;
            border-color: blue purple;
            box-shadow: 0 0 7px 5px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"> SSKM CRUD App</a>

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
                <li class="nav-item active">
                    <a class="nav-link" href="aboutme.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactme.php">Contact Us</a>
                </li>
            </ul>

            <script src="http://code.jquery.com/jquery-3.3.1.js">

            </script>
            <script type="text/javascript">
                $(document).on('click', 'ul li', function() {
                    $(this).addClass('active').siblings().removeClass('active');
                });
            </script>



        </div>
    </nav>
    <center>
        <div class="container">
            <h2>Creator...</h2>
            <h3>Hi I am Saurabh Mahajan</h3>
            <img src="img/me.jpg" alt="me" width="100" height="100">
            <h4> Contact:7900138937 <br> Email:saurabhmahajan012@gmail.com </h4>
            <h3> Follow Me: </h3>
            <a href="https://www.instagram.com/s_s_k_mahajan/"><img src="img/insta.png" width="50"> </a>
            <a href="https://www.linkedin.com/in/saurabh-mahajan-8419b51a2/"><img src="img/linkedin.png" width="50"> </a>
        </div>
    </center>

</body>