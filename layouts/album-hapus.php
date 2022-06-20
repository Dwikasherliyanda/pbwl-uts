<?php

include "../app/class.php";

$id = $_GET['id'];
$alb = new Album();
$rows = $alb->hapusAlbum($id);