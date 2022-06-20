<?php

include "../app/class.php";

$id = $_GET['id'];
$post = new Post();
$rows = $post->hapusPost($id);