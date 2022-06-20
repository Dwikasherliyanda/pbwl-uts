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

    .teks-kat{
        resize: none;
        font-family: 'Be Vietnam Pro', sans-serif;
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
    $rows = $kat->tambahKategori();
?>
<form action="" method="post">
    <h1>Tambah Kategori</h1>
        <ul>
            <li>Nama Kategori</li>
            <li><input type="text" class="nama-kat" name="kat-nama"></li>
        </ul>
        <ul>
            <li>Teks Kategori</li>
            <li><textarea name="kat-teks" id="" cols="35" rows="10" class="teks-kat"></textarea></li>
        </ul>
        <button class="btn-primary" name="btn-tambah-kategori">Tambah</button>
</form>