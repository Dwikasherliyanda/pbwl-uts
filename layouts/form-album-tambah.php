<style>
     form{
        width: 500px;
        background-color: brown;
        text-align: center;
        padding: 50px;
        border-radius: 10px;
        position:relative;
    }

    h1{
        margin: 0;
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white;
    }

    form ul li{
        list-style: none;
        text-align: left;
        position: relative;
        left: 60px;
        font-family: 'Be Vietnam Pro', sans-serif;
        color: white;
        padding: 3px;
    }

    .id-foto{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .title-album{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .btn-primary{
        padding: 10px;
        padding-right: 30px;
        padding-left: 30px;
        background-color: white;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-size:15px;
        font-weight: 600;
        color: black;
        text-decoration: none;
    }
</style>
<?php
    include "../app/class.php";
    $foto = new Foto();
    $alb = new Album();
    $rows_foto = $foto->tampilFoto();
    $rows_alb = $alb->tambahAlbum();
?>
<form action="" method="post">
    <h1>Tambah Album</h1>
        <ul>
            <li>Id Foto</li>
            <li>
                <select name="foto-id" id="" class="id-foto">
                    <option value="">-Pilih-</option>
                    <?php foreach ($rows_foto as $row) { ?> 
                    <option value="<?php echo $row['photo_id']; ?>"><?php echo $row['photo_id']; ?></option>
                    <?php } ?>
                </select>
            </li>
        </ul>
        <ul>
            <li>Judul Album</li>
            <li><input type="text" name="album-title" class="title-album"></li>
        </ul>
        <button class="btn-primary" name="btn-tambah-album">Tambah</button>
</form>