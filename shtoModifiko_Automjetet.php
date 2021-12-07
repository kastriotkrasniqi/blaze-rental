<?php include './includes/sqlFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/typography.php'; ?>
    <style>
    @import url('./styles/banner.css');
    </style>
    <title>Document</title>
</head>

<body>
    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ========== -->


    <!-- ========== Start banner ========== -->
    <div class="banner">
        <div class="container">
            <h1 class="text-light p-4 ">Automjetet</h3>
        </div>
    </div>
    <!-- ========== End banner ========== -->

    <!-- ========== Start tabela ========== -->

    <div class="container py-5 ">
        <h2 class=" d-block titulli w-100 pb-2">Automjetet</h2>


        <form action="" class="w-75">
            <div class="mb-3">
                <label for="emri"></label>
                <input type="text" class="form-control" name="emri">
            </div>
            <div class="mb-3">
                <label for="kategoria"></label>
                <input type="text" class="form-control" name="kategoria">
            </div>
            <div class="mb-3">
                <label for="nr_regjistrimit"></label>
                <input type="text" class="form-control" name="nr_regjistrimit">
            </div>
            <div class="mb-3">
                <label for="pershkrimi"></label>
                <input type="text" class="form-control" name="pershkrimi">
            </div>
            <div class="mb-3">
                <label for="kostoja"></label>
                <input type="text" class="form-control" name="kostoja">
            </div>
            <a href="" id="shtoklient" class="btn px-3 float-end"><i class="fas fa-user-plus"></i> Shto Automjet</a>
        </form>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>