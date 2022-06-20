<style>
    .navigasi{
    height: 50px;
    background-color: brown;
    text-align: center;
}

.navigasi ul {
    list-style: none;
}

.navigasi ul li{
    display: inline-block;
    padding: 10px;
    background-color: orange;
    width: 100px;
    position: relative;
    top: 7px;
    border-radius: 20px;
}

.navigasi ul a{
    font-size: 20px;
    color: black;
}

.navigasi ul a li:hover{
    background-color: white;
    transition: 0.5s;
    color: black;
}

.logout a{
    text-decoration: none;
    color: white;
    position: relative;
    bottom: 40px;
    left: 600px;
    padding: 10px;
}
</style>
<div class="navigasi">
    <ul>
        <a href="dashboard.php"><li>Beranda</li></a>
        <a href="kategori-tampil.php"><li>Kategori</li></a>
        <a href="post-tampil.php"><li>Post</li></a>
        <a href="foto-tampil.php"><li>Foto</li></a>
        <a href="album-tampil.php"><li>Album</li></a>
    </ul>
</div>
<div class="logout">
    <a href="../index.php">Keluar</a>
</div>