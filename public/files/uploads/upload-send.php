<?php
if(!empty($_FILES)) {
$dir_base = "";
//$dir_base = "";
//filter extentions
$fileExt = explode('.', $_FILES['userImage']['name']);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('txt', 'pdf', 'doc', 'xls', 'png');
if (in_array($fileActualExt, $allowed)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
if(move_uploaded_file($_FILES['userImage']['tmp_name'],$dir_base.$_FILES['userImage']['name'])) {
           // return path
echo '<div class="text-center alert alert-success" role="alert">';
echo "FILE UPLOADED";
echo '</div>';}
}
} else {
echo '<div class="text-center alert alert-danger" role="alert">';
echo 'FILE <strong>NOT</strong> UPLOADED';
echo '</div>';}
}
?>