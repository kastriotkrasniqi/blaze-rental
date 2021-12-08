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
                    
                        if(isset($_GET['klientiid'])){
                            $klienti=mysqli_fetch_assoc(merrKlientiid($_GET['klientiid']));
                        }
                        
                        if(isset($_POST['shtoKlient'])){
                            shtoKlient($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['telefoni'],$_POST['nr_personal'],$_POST['adresa']);
                        }
                    
                    
                           
                        if(isset($_POST['modifikoKlient'])){
                            modifikoKlient($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['telefoni'],$_POST['nr_personal'],$_POST['adresa'],$_POST['klientiid']);
                        }
                    
                    
                    
                    
                    
                    
                    ?>

<body>
    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ========== -->


    <!-- ========== Start banner ========== -->
    <div class="banner">
        <div class="container">
            <h1 class="text-light p-4 ">Klientet</h3>
        </div>
    </div>
    <!-- ========== End banner ========== -->

    <!-- ========== Start tabela ========== -->

    <div class="container w-50" id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Klientet</h2>


        <form class="mt-4" method="POST">
            <input type="hidden" name="klientiid"
                value="<?php if(isset($_GET['klientiid'])) echo $klienti['klientiid'] ?>">
            <div class="mb-3">
                <label for="emri">Emri:</label>
                <input type="text" class="form-control" name="emri"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['emri'] ?>">
            </div>
            <div class="mb-3">
                <label for="mbiemri"> Mbiemri:</label>
                <input type="text" class="form-control" name="mbiemri"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['mbiemri'] ?>">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="telefoni">Telefoni:</label>
                <input type="text" class="form-control" name="telefoni"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['telefoni'] ?>">
            </div>
            <div class="mb-3">
                <label for="nr_personal">Nr Personal:</label>
                <input type="text" class="form-control" name="nr_personal"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['nr_personal'] ?>">
            </div>
            <div class="mb-3">
                <label for="adresa">Adresa:</label>
                <input type="text" class="form-control" name="adresa"
                    value="<?php if(isset($_GET['klientiid'])) echo $klienti['adresa'] ?>">
            </div>
            <?php     if(isset($_GET['klientiid'])): ?>
            <button type="submit" name="modifikoKlient" id="shtoklient" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i> Modifiko
                Klient</button>
            <?php else: ?>
            <button name="shtoKlient" id="shtoklient" class="btn px-3 float-end mt-3"><i class="fas fa-user-plus"></i>
                Shto
                Klient</button>
            <?php endif; ?>
        </form>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>