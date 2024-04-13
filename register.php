<!DOCTYPE html>
<html>
<head>
    <title>EVoting - Register Voter</title>
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
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>

    <h2 class="text-center my-3">Register Voter</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="index.php" method="post">
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" required>
                    <label for="voter_id_reg"><b>Voting Id</b></label>
                    <input type="text" placeholder="Enter Voting Id" name="voter_id" id="voter_id_reg" required>
                    <label for="password_reg"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password_reg" required>
                    <button type="submit" id="button" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
