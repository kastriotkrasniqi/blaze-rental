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
                    
                        if(isset($_GET['rezervimiid'])){
                            $rezervimi=mysqli_fetch_assoc(merrRezervimetId($_GET['rezervimiid']));
                        }
                        
                        if(isset($_POST['shtoRezervim'])){
                            shtoRezervim($_POST['emri'],$_POST['automjeti'],$_POST['datarezervimit'],$_POST['datakthimit'],$_POST['komente']);
                        }
                    
                    
                     
                        if(isset($_POST['modifikoRezervim'])){
                            modifikoRezervim($_POST['emri'],$_POST['automjeti'],$_POST['datarezervimit'],$_POST['datakthimit'],$_POST['komente'],$_POST['rezervimiid']);
                        }
                    
                    
                    
                    
                    
                    ?>

<body>
    <!-- ========== Start header ========== -->
    <?php include './includes/header.php'; ?>
    <!-- ========== End header ========== -->


    <!-- ========== Start banner ========== -->
    <div class="banner">
        <div class="container">
            <h1 class="text-light p-4 ">Rezervimet</h3>
        </div>
    </div>
    <!-- ========== End banner ========== -->

    <!-- ========== Start tabela ========== -->

    <div class="container w-50" id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Rezervimet</h2>


        <form class="mt-4" method="POST">
            <input type="hidden" name="rezervimiid"
                value="<?php if(isset($_GET['rezervimiid'])) echo $rezervimi['rezervimiid'] ?>">
            <div class="mb-3">
                <label>Emri:</label>
                <select name="emri" id="" class="form-select">
                    <?php $klientet = merrKlientet();
            while ($klienti = mysqli_fetch_assoc($klientet)) : ?>
                    <option value="<?php echo $klienti['klientiid']; ?>"
                        <?php if(isset($_GET['rezervimiid']))if($klienti['klientiid'] == $rezervimi['klientiid']) echo 'selected' ; ?>>
                        <?php echo $klienti['emri']; ?></option>
                    <?php
            endwhile;
            ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Automjeti:</label>
                <select name="automjeti" id="" class="form-select">
                    <?php $automjetet = merrAutomjetet();
            while ($automjeti = mysqli_fetch_assoc($automjetet)) : ?>
                    <option value="<?php echo $automjeti['automjetiid']; ?>"
                        <?php if(isset($_GET['rezervimiid']))if($automjeti['automjetiid'] == $rezervimi['automjetiid']) echo 'selected' ; ?>>
                        <?php echo $automjeti['emri']; ?></option>
                    <?php
            endwhile;
            ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="mbiemri"> Data e rezervimit:</label>
                <input type="date" class="form-control" name="datarezervimit"
                    value="<?php if(isset($_GET['rezervimiid'])) echo $rezervimi['data_e_rezervimit'] ?>">
            </div>
            <div class="mb-3">
                <label for="email">Date e kthimit:</label>
                <input type="date" class="form-control" name="datakthimit"
                    value="<?php if(isset($_GET['rezervimiid'])) echo $rezervimi['data_e_kthimit'] ?>">
            </div>
            <div class="mb-3">
                <label for="telefoni">Komente:</label>
                <input type="text" class="form-control" name="komente"
                    value="<?php if(isset($_GET['rezervimiid'])) echo $rezervimi['komente'] ?>">
            </div>

            <?php           if(isset($_GET['rezervimiid'])): ?>
            <button type="submit" name="modifikoRezervim" id="shtoklient" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i> Modifiko
                Rezervimin</button>
            <?php else: ?>
            <button name="shtoRezervim" type="submit" id="shtoklient" class="btn px-3 float-end mt-3"><i
                    class="fas fa-user-plus"></i>
                Shto
                Rezervim</button>
            <?php endif; ?>
        </form>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>