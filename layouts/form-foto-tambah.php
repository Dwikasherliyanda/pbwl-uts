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

    .id-post{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .title-foto{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .file-foto{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .teks-post{
        resize: none;
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
    $post = new Post();
    $foto = new Foto();
    $rows_post = $post->tampilPost();
    $rows_foto = $foto->tambahFoto();
?>
<form action="" method="post">
    <h1>Tambah Foto</h1>
        <ul>
            <li>Id Post</li>
            <li>
                <select name="post-id" id="" class="id-post">
                    <option value="">-Pilih-</option>
                    <?php foreach ($rows_post as $row) { ?> 
                    <option value="<?php echo $row['post_id']; ?>"><?php echo $row['post_id']; ?></option>
                    <?php } ?>
                </select>
            </li>
        </ul>
        <ul>
            <li>Judul</li>
            <li><input type="text" name="foto-title" class="title-foto"></li>
        </ul>
        <ul>
            <li>File</li>
            <li><input type="text" name="foto-file" id="" class="file-foto"></li>
        </ul>
        <button class="btn-primary" name="btn-tambah-foto">Tambah</button>
</form>