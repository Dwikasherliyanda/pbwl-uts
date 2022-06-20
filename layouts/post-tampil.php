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

    .post-tambah{
        text-decoration: none;
        color: white;
        background-color: green;
        padding: 10px;
        font-size: 20px;
        position: relative;
        left: 610px;

    }

    table{
        position: relative;
        left: 30px;
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
        width: 200px;
        text-align: left;
    }

    .post-slug{
        width: 200px;
        text-align: left;
    }

    .post-title{
        width: 200px;
        text-align: left;
    }

    .post-teks{
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
    $post = new Post(); 
    $rows = $post->tampilPost();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Post</title>
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
        <a href="post-tambah.php" class="post-tambah">+</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Judul</th>
                <th>Teks</th>
                <th>Tanggal</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php foreach ($rows as $row) { ?> 
            <tr>
                <td><?php echo $row['post_id']; ?></td>
                <td class="kat-nama"><?php echo $row['cat_name']; ?></td>
                <td class="post-slug"><?php echo $row['post_slug']; ?></td>
                <td class="post-title"><?php echo $row['post_title']; ?></td>
                <td class="post-teks"><?php echo $row['post_text']; ?></td>
                <td class="post-date"><?php echo $row['post_date']; ?></td>
                <td><a href="post-edit.php?id=<?php echo $row['post_id']; ?>" class="aksi-edit">Edit</a></td>
                <td><a href="post-hapus.php?id=<?php echo $row['post_id']; ?>" class="aksi-hapus">Hapus</a></td>
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