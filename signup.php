<?php
    include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Origin Game - SignUp</title>
</head>
<body>
    <div  class="row h-100 d-flex align-items-center">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div id="signIn" class="col-3">
            <form action="signup.php" method="POST" id="form" data-parsley-validate>
                <p class="signin text-center"> SIGN UP </p>
                <div class="email pt-3">
                    <p>User Name</p>
                    <input class="input form form-control" type="text" name="user" data-parsley-trigger="keyup" required>
                </div>
                <div class="email pt-3">
                    <p>Email Address</p>
                    <input class="input form form-control" type="email" name="email" data-parsley-type="email" required>
                </div>
                <div class="password pt-3">
                    <p>Password</p>
                    <input class="input form form-control" type="password" name="password" data-parsley-minlength="8" required>
                </div>
                <div class="row justify-content-center mt-3"><button class="btn" name="signup">SIGN UP</button></div>
                <div class="privacy text-center mt-4">
                    By clicking on "SIGN UP" you agree to <a class="link" href="">Privacy Policy</a>
                </div>
                </form>
            </div>
        </div>
</body>
</html>
<?php
    if(isset($_POST['signup'])){
        $connect = connection();
        $name = $_POST['user'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);;
        //SQL SELECT
        $sql = "INSERT INTO users VALUES (null, '$name','$email','$password')";
        $result=mysqli_query($connect,$sql);
        //SQL INSERT
        if($result){ 
            header('location: signin.php');
        }
    }
?>