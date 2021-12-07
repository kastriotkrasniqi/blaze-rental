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
    </style>

    <title>Document</title>
</head>

<body>

    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ==========        -->

    <!-- ========== Start main ========== -->
    <div class="login-page">
        <div class="container d-flex justify-content-center">
            <form class="px-4" action="">
                <h2 class="text-white text-center pt-4 mb-3">Register</h2>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Emri">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Mbiemri">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Telefoni">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Numri Personal">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Adresa">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" placeholder="Password">
                </div>
                <p class="text-light float-end">Already have an account? <a href="login.php" id="register"> Login</a>
                </p>
                <div class="clearfix"></div>
                <button type="submit" class="w-100 btn my-3" id="login">Register</button>
            </form>

        </div>
    </div>
    <!-- ========== End main ========== -->






</body>

</html>