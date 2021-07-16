<?php
if (isset($_FILES['file'])) {
    $file =$_FILES['file'];
    $fileName =$_FILES['file']['name'];
    $fileType =$_FILES['file']['type'];
    $fileSize =$_FILES['file']['size'];
    $fileTempLoc =$_FILES['file']['tmp_name'];
    $fileSave = "upload/".$fileName;

    if(move_uploaded_file($fileTempLoc, $fileSave)) {
        echo "Uploaded Successfully";
    };
}
?>