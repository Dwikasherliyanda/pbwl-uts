<?php

include "../app/class.php";

$id = $_GET['id'];
$foto = new Foto();
$rows = $foto->hapusFoto($id);