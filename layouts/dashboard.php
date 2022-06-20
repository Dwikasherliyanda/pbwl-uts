<style>
    html{
        text-align:center;
    }

    .main{
        padding: 180px 0;
    }

    .navigasi{
        position: relative;
        bottom: 6px;
    }

</style>
<?php
    session_start();
    if($_SESSION['username'] == ''){
        header ("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
       <h1>Selamat Datang di Website Wika Photo</h1>
    </div>
    <div class="footer">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>