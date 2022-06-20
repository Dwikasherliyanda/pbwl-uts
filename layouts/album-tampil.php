<style>
    html{
        text-align:center;
    }

    .navigasi{
        position: relative;
        bottom: 6px;
    }

    .main{
        margin-top:30px;
        margin-bottom: 240px;
    }

    .album-tambah{
        text-decoration: none;
        color: white;
        background-color: green;
        padding: 10px;
        font-size: 20px;
        position: relative;
        left: 270px;

    }

    table{
        position: relative;
        left: 450px;
        margin-top: 10px;
    }

    th{
        background-color: orange;
        color: white;
        padding: 10px;
    }

    td{
        padding: 10px;
    }

    .foto-id{
        width: 80px;
        text-align: center;
    }

    .album-title{
        width: 200px;
        text-align: left;
    }

    .aksi-edit{
        text-decoration: none;
        padding: 10px;
        color: blue;
    }

    .aksi-hapus{
        text-decoration: none;
        padding: 10px;
        color: red;
    }

</style>
<?php 
    include "../app/class.php";
    $alb = new Album(); 
    $rows = $alb->tampilAlbum();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Album</title>
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
        <a href="album-tambah.php" class="album-tambah">+</a>
        <table>
            <tr>
                <th>ID</th>
                <th>ID Foto</th>
                <th>Judul Album</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php foreach ($rows as $row) { ?> 
            <tr>
                <td><?php echo $row['album_id']; ?></td>
                <td class="foto-id"><?php echo $row['album_id_photo']; ?></td>
                <td class="album-title"><?php echo $row['album_title']; ?></td>
                <td><a href="album-edit.php?id=<?php echo $row['album_id']; ?>" class="aksi-edit">Edit</a></td>
                <td><a href="album-hapus.php?id=<?php echo $row['album_id']; ?>" class="aksi-hapus">Hapus</a></td>
            </tr>
            <?php } ?>
        </table>
       
    </div>
    <div class="footer">
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>