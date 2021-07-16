<?php
$fileName = $_POST['name'];
$target_directory = "uploads/";
$target_file = $target_directory.basename($_FILES['file']);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$newFileName = $target_directory.$fileName.".".$fileType;

move_uploaded_file($_FILES['file']['tmp_name'], $newFileName);
?>