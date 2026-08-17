<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_process</title>
</head>

<body>
    <?php
    // database connection
    include('../config/database.php');

    //data collection from form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    // validation
    if (empty($fname)) {
        echo "First Name Required";
    } elseif (empty($lname)) {
        echo "Last Name Required";
    } elseif (empty($email)) {
        echo "Email Required";
    } elseif (empty($mobile)) {
        echo "Mobile Number Required";
    } elseif (empty($password)) {
        echo "Password Required";
    } elseif (empty($cpassword)) {
        echo "Confirm Password Required";
    } elseif (empty($gender)) {
        echo "gender Required";
    } elseif (empty($city)) {
        echo "city Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email id invalid !!";
    } elseif (strlen($password) < 6) {
        echo "password must be greater than 6";
    } elseif ($password != $cpassword) {
        echo "password does not match";
    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "Insert into users(fname,lname,email,pass,city,gender,mobile) VALUES ('$fname','$lname','$email','$hashedPassword','$city','$gender','$mobile')";

        if (mysqli_query($conn, $sql)) {

            header("Location:login.php");
            exit();

        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }


    ?>
</body>

</html>