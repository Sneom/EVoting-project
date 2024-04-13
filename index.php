<?php
session_start();
include 'conn.php';


if(isset($_POST['login']))
{
    $voter_id = $_POST['voter_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE voters_id='$voter_id' AND password='$password'";
    $q = mysqli_query($con, $sql);
    if(mysqli_num_rows($q) > 0)
    {
        $get_voters_details = mysqli_fetch_array($q);
        $get_voters_name = $get_voters_details['name'];
        $has_voted = $get_voters_details['has_voted']; 
        if($has_voted == 1) {
            $_SESSION['voter_id'] = $voter_id;
            $_SESSION['voter_name'] = $get_voters_name;
            header('Location: voting_done.php'); 
            exit(); 
        } else {
            $_SESSION['voter_id'] = $voter_id;
            $_SESSION['voter_name'] = $get_voters_name;
            header('Location: voting_page.php'); 
            exit(); 
        }
    }
    else
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Login Failed</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}


if(isset($_POST['register']))
{
    
    $voter_id = $_POST['voter_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];

  
    $sql = "INSERT INTO voters (voters_id, name, password) VALUES ('$voter_id', '$name', '$password')";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Registration Successful</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Registration Failed</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>EVoting - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1; padding: 20px; border-radius: 10px;}
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        #button:hover {
            opacity: 0.8;
        }
        span.psw {
            float: right;
            padding-top: 16px;
        }
       
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
        
        #registerButton {
            width: 100%;
            margin-bottom: 10px;
        }
        #adminButton {
            width: 100%;
            margin-bottom: 10px;
        }
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>

    <h2 class="text-center my-3">Voter's Login</h2>
    
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <form action="" method="post">
                    <label for="voter_id"><b>Voting Id</b></label>
                    <input type="text" placeholder="Enter Username" name="voter_id" id="voter_id" autofocus required>
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    <button type="submit" id="button" name="login">Login</button>
                </form>
            </div>
           
            <div class="col-md-6">
                <h2 class="text-center">Register Voter</h2>
                <button id="registerButton" class="btn btn-primary">Register</button>
            </div>

            <div class="col-md-6">
                <h2 class="text-center">Admin Login</h2>
                <button id="adminButton" class="btn btn-primary">Admin Login</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
           
            $('#registerButton').click(function () {
                window.location.href = 'register.php';
            });

            $('#adminButton').click(function () {
                window.location.href = 'superadmin.php';
            });
        });
    </script>
</body>
</html>
