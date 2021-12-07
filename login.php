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
        margin-top: 10%;
        border: 4px solid #ec5538;
        height: 400px;
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
                <h2 class="text-white text-center pt-4 mb-5">Login</h2>
                <div class="mb-4">
                    <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <input class="form-control" type="password" placeholder="Password">
                </div>
                <p class="text-light float-end">Not a user yet? <a href="register.php" id="register"> Register</a> </p>
                <div class="clearfix"></div>
                <button type="submit" class="w-100 btn mt-4" id="login">Login</button>
            </form>

        </div>
    </div>
    <!-- ========== End main ========== -->






</body>

</html>