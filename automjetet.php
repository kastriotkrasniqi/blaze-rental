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
        padding-top: 80px !important;
        padding-bottom: 100px !important;
    }
    </style>
    <title>Document</title>
</head>

<?php 

                    if(isset($_GET['automjetiid'])){
                        $automjetiid=$_GET['automjetiid'];

                        fshiAutomjetin($automjetiid);
                        header('location:automjetet.php');
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

    <div class="container  " id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Automjetet</h2>


        <table class="table table-bordered mt-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Emri</th>
                    <th scope="col">Kategoria</th>
                    <th scope="col">Nr Regjistrimit</th>
                    <th scope="col">Pershkrimi</th>
                    <th scope="col">Kostoja</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <?php $result=merrAutomjetet(); $i=1; ?>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)): ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['emri'] ?></td>
                    <td><?php echo $row['kategoria'] ?></td>
                    <td><?php echo $row['nr_regjistrimit'] ?></td>
                    <td><?php echo $row['pershkrimi'] ?></td>
                    <td><?php echo $row['kostoja'] ?></td>

                    <td class="text-center"><a
                            href="shtoModifiko_Automjetet.php?automjetiid=<?php echo $row['automjetiid']; ?>"
                            class="btn text-light btn-warning btn-sm  px-3"><i class="far fa-edit"></i></a>
                    </td>
                    <td class="text-center"> <a onClick="return confirm('Please confirm deletion');"
                            href="?automjetiid=<?php echo $row['automjetiid']; ?>" type="button"
                            class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </a></td>

                </tr>
                <?php endwhile; ?>

            </tbody>

        </table>
        <a href="shtoModifiko_Automjetet.php" id="shtoklient" class="btn px-3 float-end mt-3"><i
                class="fas fa-user-plus"></i> Shto Automjet</a>
    </div>
    <!-- ========== End tabela ========== -->
    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php'; ?>
    <!-- ========== End footer ========== -->
</body>

</html>