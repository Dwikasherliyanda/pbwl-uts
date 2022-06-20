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

    .nama-kat{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .slug-post{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .title-post{
        font-family: 'Be Vietnam Pro', sans-serif;
        height: 35px;
        width: 281px;
    }

    .date-post{
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
    $kat = new Kategori();
    $post = new Post();
    $rows_kat = $kat->tampilKategori();
    $rows_post = $post->tambahPost();
?>
<form action="" method="post">
    <h1>Tambah Post</h1>
        <ul>
            <li>Nama Kategori</li>
            <li>
                <select name="kat-nama" id="" class="nama-kat">
                    <option value="">-Pilih-</option>
                    <?php foreach ($rows_kat as $row) { ?> 
                    <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                    <?php } ?>
                </select>
            </li>
        </ul>
        <ul>
            <li>Slug</li>
            <li><input type="text" name="post-slug" class="slug-post"></li>
        </ul>
        <ul>
            <li>Judul</li>
            <li><input type="text" name="post-title" class="title-post"></li>
        </ul>
        <ul>
            <li>Teks</li>
            <li><textarea name="post-teks" id="" cols="35" rows="10" class="teks-post"></textarea></li>
        </ul>
        <ul>
            <li>Tanggal</li>
            <li><input type="date" name="post-date" id="" class="date-post"></li>
        </ul>
        <button class="btn-primary" name="btn-tambah-post">Tambah</button>
</form>