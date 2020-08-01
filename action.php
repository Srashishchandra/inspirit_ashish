<?php
//establishing connection to the database
include 'connect.php';

// initialize errors variable
$fnameErr = $lnameErr = $emailErr = $commentsErr = $phNumberErr = $cnfPasswordErr = $passwordErr = "";
// initialize field name variable
$fname    = $lname = $email = $phNumber = $password = $cnfpassword = "";

if (isset($_POST['submit'])) {

    // Validation for first name
    if (empty($_POST["fname"])) {
        $fnameErr = "Empty field";
    } else {
        $fname = $_POST["fname"];

    }
    // Validation for Last name
    if (empty($_POST["lname"])) {
        $lnameErr = "Empty field";
    } else {
        $lname = $_POST["lname"];
    }
    // Validation for Email ID field and its link
    if (empty($_POST["email"])) {
        $emailErr = "Missing";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validation for Phone Number field
    if (empty($_POST["phNumber"])) {
        $phNumberErr = "Phone Number Missing!!";
    }

    else {
        $phNumber = $_POST["phNumber"];
    }
    // password
    if (!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {

        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $password  = $_POST["password"];
            $cpassword = $_POST["cpassword"];
        }
    } elseif (!empty($_POST["password"])) {
        $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    } else {
        $passwordErr = "Please enter password";
    }

    // inserting field data into database
    $sql = "INSERT INTO user(fname,lname,email,contact,password)
        VALUES ('$fname','$lname','$email','$phNumber','$password')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}

// <!-- login page -->
if (isset($_POST['login'])) {
    session_start();
    $myemail    = $_POST['email'];
    $mypassword = $_POST['password'];

    $sql    = "SELECT userID FROM user WHERE email = $myemail and password = $mypassword";
    $result = mysqli_query($db, $sql);
    $count  = mysqli_fetch_array($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myemail;

        header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
        session_destroy();
    }
    header("Location: index.php");

}

?>
