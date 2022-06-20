<style>
    html{
        text-align:center;
    }

    .navigasi{
        position: relative;
        bottom: 6px;
    }

    .main{
        position: relative;
        left: 390px;
        margin: 50px 0;
        width: 400px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <div class="header">
        <?php
            include "header.php";
        ?>
    </div>
    <div class="navigasi">
        <?php
            include "navigasi.php";
        ?>
    </div>
    <div class="main">
       <?php
            include "form-kategori-edit.php";
       ?>
    </div>
    <div class="footer">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>