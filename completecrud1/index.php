<?php
include 'action.php';
?>
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
        .vl {
            border: 2px solid gray;
            height: 440px;
            position: absolute;
            left: 33%;
            top: 180px;
        }

        i {
            color: #0000cc;
            font-size: 20px
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
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


        <form class="form-inline" action="<?php $_SERVER['PHP_SELF'] ?>">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-dark mt-2">Advanced CRUD App Using PHP & MySQLi Prepared Statement (Object Oriented)</h3>
                <hr>
                <?php if (isset($_SESSION['response'])) { ?>
                    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b><?= $_SESSION['response']; ?></b>
                    </div>
                <?php }
                unset($_SESSION['response']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-info">Add Record</h3>
                <form action="action.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="Enter Phone No." required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                        <input type="file" name="image" class="custom-file">
                        <?php if ($update == true) { ?>
                            <img src="<?= $photo; ?>" width="120" class="img-thumbnail" alt="">
                        <?php } else {
                            echo "";
                        } ?>

                    </div>
                    <div class="form-group">
                        <?php if ($update == true) { ?>
                            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
                        <?php } else { ?>
                            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
                        <?php } ?>
                    </div>
                </form>
                <div class="container-fluid flex-grow-1 justify-contet-center">

                    <div class="col-lg-10 col-md-6 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-1 text-center"><u>FOLLOW US AT:</u></h6>
                        <p class="text-muted mb-1 text-center">Thank you for your Love and Support...</p>
                        <ul class="list-inline mt-1 text-center">
                            <li class="list-inline-item"><a href="www.twitter.com" target="_blank" title="Twitter"><i class="fab fa-2x fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-2x fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-2x fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="www.youtube.com" target="_blank" title="YouTube"><i class="fab fa-2x fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="www.google.com" target="_blank" title="Google"><i class="fab fa-2x fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <hr class="p-0 m-0 b-0"> -->
                <div class="bg-light">
                    <div class="container text-center">
                        <a href="#" class="text-primary mb-0" title="© 2021 Creator:@Saurabh Mahajan.">© 2021 Creator:@Saurabh Mahajan.</a>
                    </div>
                </div>
                </footer>
            </div>

            <div class="vl"></div>

            <div class="col-md-8">
                <?php
                $query = "SELECT * FROM crud";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $result = $stmt->get_result();


                ?>
                <h3 class="text-center text-info">Records Present In Database</h3>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {  ?>
                            <tr>
                                <td><?= $row['id'] . "]"; ?></td>
                                <td><img src="<?= $row['photo']; ?>" alt="" width="100" height="60"></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['phone']; ?></td>
                                <td>
                                    <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> |
                                    <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do You Want to Delete this Record?');">Delete</a> |
                                    <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2" onclick="return confirm('Do You Want to Update this Record?');">Edit</a>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>


</html>