<?php include './includes/sqlFunctions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/typography.php'; ?>
    <style>
    body {
        background-color: #212529;
    }

    .login-page {
        height: calc(100vh - 72px);
    }

    form {
        margin-top: 4%;
        border: 4px solid #ec5538;

        width: 500px;
        border-radius: 15px;
    }

    #register {
        color: #ec5538;
    }

    #login {
        background-color: #ec5538;
        color: white;
    }

    #login:hover {
        opacity: 0.8;
    }

    .error {
        color: lightcoral;
    }
    </style>

    <title>Document</title>
</head>


<?php
if(isset($_POST['register'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $telefoni = $_POST['telefoni'];
    $nr_personal = $_POST['nr_personal'];
    $adresa = $_POST['adresa'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    register($emri, $mbiemri, $email, $telefoni, $nr_personal, $adresa, $username, $password);
}
?>

<body>

    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ==========        -->

    <!-- ========== Start main ========== -->
    <div class="login-page">
        <div class="container d-flex justify-content-center">
            <form class="px-4" method="POST" id="register-form">
                <h2 class="text-white text-center pt-4 mb-3">Register</h2>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Emri" name="emri">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Mbiemri" name="mbiemri">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" placeholder="Email" name="email">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Telefoni" name="telefoni">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Numri Personal" name="nr_personal">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Adresa" name="adresa">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <p class="text-light float-end">Already have an account? <a href="login.php" id="register"> Login</a>
                </p>
                <div class="clearfix"></div>
                <button type="submit" name="register" class="w-100 btn my-3" id="login">Register</button>
            </form>

        </div>
    </div>
    <!-- ========== End main ========== -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="./script/validation.js"></script>


</body>

</html>