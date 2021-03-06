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
        padding-top: 80px;
        padding-bottom: 100px;
    }
    </style>
    <title>Document</title>
</head>
<?php 
                
                    if(isset($_GET['rezervimiid'])){
                        $rezervimiid=$_GET['rezervimiid'];
                        fshiRezervimet($rezervimiid);
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

    <div class="container  " id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Rezervimet</h2>


        <table class="table table-bordered mt-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Klienti</th>
                    <th scope="col">Automjeti</th>
                    <th scope="col">Data Rezervimit</th>
                    <th scope="col">Data Kthimit</th>
                    <th scope="col">Komente</th>

                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <?php $rezervimet = merrRezervimetId($_SESSION['klientiid']);  $i=1;  ?>


            <tbody>
                <?php while ($row = mysqli_fetch_assoc($rezervimet))  : ?>
                <?php // $klientiid=merrKlientiid($_SESSION['klientiid']);
                   // $klienti=mysqli_fetch_assoc($klientiid) ?> 
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['klienti'] ?></td>
                    <td><?php echo $row['emri'] ?></td>
                    <td><?php echo $row['data_e_rezervimit']; ?></td>
                    <td><?php echo $row['data_e_kthimit']; ?></td>
                    <td><?php echo $row['komente'] ?></td>

                    <td class="text-center"><a
                            href="shtoModifiko_Rezervim.php?rezervimiid=<?php echo $row['rezervimiid'] ?>"
                            class="btn text-light btn-warning btn-sm  px-3"><i class="far fa-edit"></i></a>
                    </td>
                    <td class="text-center"> <a onclick="return confirm('confirm the deletion?')"
                            href="?rezervimiid=<?php echo $row['rezervimiid']?>" type="button"
                            class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </a></td>

                </tr>
                <?php endwhile; ?>

            </tbody>

        </table>
        <a href="shtoModifiko_Rezervim.php" id="shtoklient" class="btn px-3 float-end"><i class="fas fa-user-plus"></i>
            Shto Rezervim</a>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>