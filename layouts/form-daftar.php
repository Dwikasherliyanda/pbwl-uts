<style>
    form{
    width: 500px;
    background-color: brown;
    text-align: center;
    padding: 50px;
    border-radius: 10px;
    position:relative;
}

form ul li{
    list-style: none;
    text-align: left;
    position: relative;
    left: 70px;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
    padding: 3px;
}

h1{
    margin: 0;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
}

.input-user{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
}
.input-password{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
    margin-bottom:20px;
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

.link-daftar{
    color: white;
}
</style>
<?php
    include "../app/class.php";
    $users = new Users();
    $rows = $users->tambahUser();
?>
<form action="" method="POST">
    <h1>Daftar</h1>
    <ul>
        <li>Username</li>
        <li><input type="text" placeholder="Username" name="username-daftar" class="input-user" required></li>
    </ul>
    <ul>
        <li>Password</li>
        <li><input type="password" name="password-daftar" placeholder="Password" class="input-password" required></li>
    </ul>
    <button class="btn-primary" name="btn-daftar">Daftar</button>
    <p><a href="../index.php" class="link-daftar">Masuk</a></p>
</form>