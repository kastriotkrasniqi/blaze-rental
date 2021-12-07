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
    </style>
</head>

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

    <div class="container py-5 d-flex flex-column align-items-center">
        <h2 class="align-self-start d-block titulli w-100 pb-2">Kategorite</h2>


        <table class="table table-bordered mt-4 ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Emri</th>
                    <th scope="col">Pershkrimi</th>

                </tr>
            </thead>
            <?php $result=merrKategorit(); $i=1; ?>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)): ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['emri'] ?></td>
                    <td><?php echo $row['pershkrimi'] ?></td>

                </tr>
                <?php endwhile; ?>

            </tbody>
            <tfoot>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Emri</th>
                    <th scope="col">Pershkrimi</th>

                </tr>
            </tfoot>
        </table>
    </div>
    <!-- ========== End tabela ========== -->

    <!-- ========== Start footer ========== -->
    <?php include './includes/footer.php' ?>
    <!-- ========== End footer ========== -->
</body>

</html>