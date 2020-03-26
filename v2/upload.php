<?php
if (isset($_post['submit'])){
$file = $_FILES['file'];

$fileName =$_FILES['file']['name'];
$fileTmpName =$_FILES['file']['tmp_name'];
$fileSize =$_FILES['file']['size'];
$fileError =$_FILES['file']['error'];
$fileType =$_FILES['file']['type'];


$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png','pdf');

if (in_array($fileActualExt, $allowed)){
if ($fileError === 0){

if ($fileSize < 10000000){
$fileNameNew = uniqid('', true).".".$fileActualExt;
$fileDestination='uploads/'.$fileNameNew;
move_upload_file($fileTmpName, $fileDestination);
header("location: index.php?uploadsuccess");

}

else{
 echo "your files is too big!";

}
}
else{
    echo "there was an error uploading your file"
}

}

else{

    echo "you cant upload files of that type"
}
}