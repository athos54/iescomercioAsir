<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
$file = $_GET['file'];
$file = str_replace("\\", "/", $file);
$file = str_replace("F:/xampp/htdocs",'',$file); 
echo "<br>";echo $file;
header("Location: http://localhost{$file}");
?>