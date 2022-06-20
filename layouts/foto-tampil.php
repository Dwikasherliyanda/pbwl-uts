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

    .foto-tambah{
        text-decoration: none;
        color: white;
        background-color: green;
        padding: 10px;
        font-size: 20px;
        position: relative;
        left: 330px;

    }

    table{
        position: relative;
        left: 340px;
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

    .post-id{
        width: 80px;
        text-align: center;
    }

    .foto-title{
        width: 200px;
        text-align: left;
    }

    .foto-file{
        width: 150px;
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
    $foto = new Foto(); 
    $rows = $foto->tampilFoto();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data foto</title>
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
        <a href="foto-tambah.php" class="foto-tambah">+</a>
        <table>
            <tr>
                <th>ID</th>
                <th>ID Post</th>
                <th>Judul</th>
                <th>File</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php foreach ($rows as $row) { ?> 
            <tr>
                <td><?php echo $row['photo_id']; ?></td>
                <td class="post-id"><?php echo $row['photo_id_post']; ?></td>
                <td class="foto-title"><?php echo $row['photo_title']; ?></td>
                <td class="foto-file"><?php echo $row['photo_file']; ?></td>
                <td><a href="foto-edit.php?id=<?php echo $row['photo_id']; ?>" class="aksi-edit">Edit</a></td>
                <td><a href="foto-hapus.php?id=<?php echo $row['photo_id']; ?>" class="aksi-hapus">Hapus</a></td>
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