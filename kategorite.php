<?php include './includes/sqlFunctions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/typography.php' ?>
    <link rel="stylesheet" href="./styles/kategorite.css">
    <title>Document</title>
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
</head>

<?php 
            
            if(isset($_GET['kategoriaid'])){
                $kategoriaid=$_GET['kategoriaid'];
                fshiKategori($kategoriaid);
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

    <div class="container " id="tabela">
        <h2 class=" d-block titulli w-100 pb-2">Kategorite</h2>


        <table class="table table-bordered mt-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Emri</th>
                    <th scope="col">Pershkrimi</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <?php $result=merrKategorit(); $i=1; ?>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)): ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['emri'] ?></td>
                    <td><?php echo $row['pershkrimi'] ?></td>
                    <td class="text-center"><a
                            href="shtoModifiko_Kategorite.php?kategoriaid=<?php echo $row['kategoriaid']; ?>"
                            class="btn text-light btn-warning btn-sm  px-3"><i class="far fa-edit"></i></a>
                    </td>
                    <td class="text-center"> <a onclick="return confirm('Confirm the deletion?')"
                            href="?kategoriaid=<?php echo $row['kategoriaid']; ?>" type="button"
                            class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-times"></i>
                        </a></td>

                </tr>
                <?php endwhile; ?>

            </tbody>

        </table>
        <a href="shtoModifiko_Kategorite.php" id="shtoklient" class="btn px-3 float-end mt-3"><i
                class="fas fa-user-plus"></i> Shto Kategori</a>
    </div>
    <!-- ========== End tabela ========== -->

    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php' ?>
    <!-- ========== End footer ========== -->
</body>

</html>