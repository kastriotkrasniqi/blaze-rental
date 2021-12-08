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

    #shtoklient {
        color: #ec5538;
        border-color: #ec5538;
    }

    #shtoklient:hover {
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

    input {
        border: 1px solid #ec5538 !important;
    }
    </style>
    <title>Document</title>
</head>

<?php 
        
        if(isset($_POST['shtoKategori'])){
            $emri=$_POST['emri'];
            $pershkrimi=$_POST['pershkrimi'];
            shtoKategori($emri,$pershkrimi);
        }
        
        if(isset($_GET['kategoriaid'])){
            $kategoria=mysqli_fetch_assoc(merrKategoriaid($_GET['kategoriaid']));
        }
        
        if(isset($_POST['modifikoKategori'])){
            $kategoriaid=$_POST['kategoriaid'];
            $emri=$_POST['emri'];
            $pershkrimi=$_POST['pershkrimi'];

            modifikoKategori($emri,$pershkrimi,$kategoriaid);
        }
        
        
        
        
        ?>

<body>
    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ========== -->


    <!-- ========== Start banner ========== -->
    <div class="banner">
        <div class="container">
            <h1 class="text-light p-4 ">Kategorite</h3>
        </div>
    </div>
    <!-- ========== End banner ========== -->

    <!-- ========== Start tabela ========== -->

    <div class="container w-50" id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Kategorite</h2>

        <form action="" class="mt-4" method="POST">
            <input type="hidden" name="kategoriaid"
                value="<?php if(isset($_GET['kategoriaid'])) echo $kategoria['kategoriaid']; ?>">
            <div class="mb-3">
                <label for="emri">Emri:</label>
                <input type="text" class="form-control" name="emri"
                    value="<?php if(isset($_GET['kategoriaid'])) echo $kategoria['emri']; ?>">
            </div>

            <div class=" mb-3">
                <label for="pershkrimi">Pershkrimi:</label>
                <input type="text" class="form-control" name="pershkrimi"
                    value="<?php if(isset($_GET['kategoriaid'])) echo $kategoria['pershkrimi']; ?>">
            </div>
            <?php if(isset($_GET['kategoriaid'])) : ?>
            <button type="submit" id="shtoklient" name="modifikoKategori" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i> Modifiko
                Kategorite</button>

            <?php else: ?>
            <button type="submit" id="shtoklient" name="shtoKategori" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i> Shto
                Kategorite</button>
            <?php endif; ?>
        </form>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>