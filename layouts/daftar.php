<style>
    html{
        text-align:center;
    }

    .main{
        position: relative;
        top: 70px;
        left: 350px;
        margin-bottom: 150px;
        width: 500px;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Music</title>
</head>
<body>
    <div class="header">
        <?php
            include "header.php";
        ?>
    </div>
    <div class="main">
        <?php
            include "form-daftar.php";
        ?>
    </div>
    <div class="footer">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>