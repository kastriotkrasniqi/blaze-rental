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

    #butoni {
        color: #ec5538;
        border-color: #ec5538;
    }

    #butoni:hover {
        color: white;
        background-color: #ec5538;
    }

    #tabela {
        padding-top: 30px !important;
        padding-bottom: 80px !important;
        border: 2px solid #ec5538;
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    input,
    select {
        border: 1px solid #ec5538 !important;
    }
    </style>
    <title>Document</title>
</head>

<?php
if(isset($_POST['shtoAutomjet'])){
    shtoAutomjet($_POST['emri'], $_POST['kategoriaid'], $_POST['nr_regjistrimit'], $_POST['pershkrimi'], $_POST['kostoja']);
}

if(isset($_GET['automjetiid'])){
   $automjeti = mysqli_fetch_assoc(merrAutomjetinId($_GET['automjetiid']));
}

if(isset($_POST['modifikoAutomjet'])){
    modifikoAutomjet($_GET['automjetiid'], $_POST['emri'], $_POST['kategoriaid'], $_POST['nr_regjistrimit'], $_POST['pershkrimi'], $_POST['kostoja']);
}

?>

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

    <div class="container w-50" id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Automjetet</h2>


        <form class="mt-4" id="shtoForma" method="POST">
            <div class="mb-3">
                <label for="emri">Emri:</label>
                <input type="text" class="form-control" name="emri"
                    value="<?php if(isset($_GET['automjetiid'])) echo $automjeti['emri']; ?>">
            </div>
            <div class=" mb-3">
                <label for="kategoriaid">Kategoria:</label>
                <select name="kategoriaid" id="" class="form-select">
                    <?php $kategorite = merrKategorit();
            while ($kategoria = mysqli_fetch_assoc($kategorite)) : ?>
                    <option value="<?php echo $kategoria['kategoriaid']; ?>"
                        <?php if(isset($_GET['automjetiid']))if($kategoria['kategoriaid'] == $automjeti['kategoriaid']) echo 'selected' ; ?>>
                        <?php echo $kategoria['emri']; ?></option>
                    <?php
            endwhile;
            ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nr_regjistrimit">Nr Regjistrimit:</label>
                <input type="text" class="form-control"
                    value="<?php if(isset($_GET['automjetiid'])) echo $automjeti['nr_regjistrimit']; ?>"
                    name="nr_regjistrimit">
            </div>
            <div class="mb-3">
                <label for="pershkrimi">Pershkrimi:</label>
                <input type="text" class="form-control" name="pershkrimi"
                    value="<?php if(isset($_GET['automjetiid'])) echo $automjeti['pershkrimi']; ?>">
            </div>
            <div class="mb-3">
                <label for="kostoja">Kostoja:</label>
                <input type="text" class="form-control" name="kostoja"
                    value="<?php if(isset($_GET['automjetiid'])) echo $automjeti['kostoja']; ?>">
            </div>


            <?php if(isset($_GET['automjetiid'])) : ?>
            <button type="submit" name="modifikoAutomjet" id="butoni" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i>
                Modifiko
                Automjet</button>
            <?php else : ?>
            <button type="submit" name="shtoAutomjet" id="butoni" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i>Shto
                Automjet </button>

            <?php endif; ?>
        </form>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>