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

    .kat-tambah{
        text-decoration: none;
        color: white;
        background-color: green;
        padding: 10px;
        font-size: 20px;
        position: relative;
        left: 410px;

    }

    table{
        position: relative;
        left: 270px;
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

    .kat-nama{
        width: 300px;
        text-align: left;
    }

    .kat-teks{
        width: 300px;
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
    $kat = new Kategori(); 
    $rows = $kat->tampilKategori();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
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
        <a href="kategori-tambah.php" class="kat-tambah">+</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Teks Kategori</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php foreach ($rows as $row) { ?> 
            <tr>
                <td><?php echo $row['cat_id']; ?></td>
                <td class="kat-nama"><?php echo $row['cat_name']; ?></td>
                <td class="kat-teks"><?php echo $row['cat_text']; ?></td>
                <td><a href="kategori-edit.php?id=<?php echo $row['cat_id']; ?>" class="aksi-edit">Edit</a></td>
                <td><a href="kategori-hapus.php?id=<?php echo $row['cat_id']; ?>" class="aksi-hapus">Hapus</a></td>
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