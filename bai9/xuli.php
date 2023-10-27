<?php
// folder de up file len
$target_path = "uploads/";
if(isset($_FILES['ufile']))
{
$target_path = $target_path . basename( $_FILES['ufile']['name']);
//VD: C:/images/abc.jpg
//echo "<br>type:".$_FILES['ufile']['type'];
//kiem tra kieu file upload
if ( !preg_match('/\.(jpg|gif)$/i',basename($_FILES['ufile']['name'] )) )
{ echo "Khong phai file anh!";}
else
// xu ly trung ten
if (file_exists($target_path))
{
echo basename( $_FILES['ufile']['name']) . " already exists. ";}
else
if(move_uploaded_file($_FILES['ufile']['tmp_name'], $target_path)) {
echo "The file ". basename( $_FILES['ufile']['name']).
" has been uploaded";
} else{
echo "There was an error uploading the file, please try again!";
}
}
?>