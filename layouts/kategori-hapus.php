<?php

include "../app/class.php";

$id = $_GET['id'];
$kat = new Kategori();
$rows = $kat->hapusKategori($id);