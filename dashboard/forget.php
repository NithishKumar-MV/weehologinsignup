<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password?</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/forgetpass.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            <form action="forgetb.php" method="post" >
                <div class="logo-container">
                    <img src="images/Weeho.png" alt="Your Logo">
                </div>
                <h3><i class="fa fa-lock fa-4x"></i></h3>
                    <h2 class="text-center">Forgot Password?</h2><br><br>
                    <p>You can reset your password here</p>
                <div class="input-field">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <input type="submit" class="btn solid" value="Reset Password">
            </form>
            </div>
        </div>
    </div>
    <script src="js/forgetpass.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>