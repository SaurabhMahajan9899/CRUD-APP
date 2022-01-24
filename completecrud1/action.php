<?php
session_start();
include 'config.php';
//This variable is et for change the butoon value if update/edit option is clicked..
$update = false;
$id = "";
$name = "";
$email = "";
$phone = "";
$photo = "";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $photo = $_FILES['image']['name'];
    $upload = "uploads/" . $photo;

    $query = "INSERT INTO crud(name,email,phone,photo)VALUES(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $phone, $upload);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);

    header("Location: http://localhost/completecrud1/index.php");
    $_SESSION['response'] = "Successfully Inserted to the Database!";
    $_SESSION['res_type'] = "success";
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "SELECT photo from crud where id=?";
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();

    $imagepath = $row['photo'];
    unlink($imagepath);

    $query = "DELETE FROM crud where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: http://localhost/completecrud1/index.php");
    $_SESSION['response'] = "Record has been Successfully Deleted!";
    $_SESSION['res_type'] = "danger";
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM crud WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $photo = $row['photo'];

    $update = true;
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $oldimage = $_POST['oldimage'];
    $newimage1 = $_FILES['image']['name'];

    if (isset($newimage1) && ($newimage1 != "")) {
        $newimage2 = "uploads/" . $newimage1; //specifis path to save updated photo data
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage2);
    } else {
        $newimage2 = $oldimage;
    }
    $query = "UPDATE crud SET name=?,email=?,phone=?,photo=? where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi", $name, $email, $phone, $newimage2, $id);
    $stmt->execute();

    $_SESSION['response'] = "Record has been Updated Successfully!!";
    $_SESSION['res_type'] = "primary";
    header("Location: http://localhost/completecrud1/index.php");
}
if (isset($_GET['details'])) {
    $id = $_GET['details'];
    $query = "SELECT * FROM crud WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $vid = $row['id'];
    $vname = $row['name'];
    $vemail = $row['email'];
    $vphone = $row['phone'];
    $vphoto = $row['photo'];
}
