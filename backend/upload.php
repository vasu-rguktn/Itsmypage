<?php
//echo $_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
echo "File uploaded successfully..!";

echo "<br>";
//print_r($_FILES);
//print_r($_REQUEST);
print_r($_ENV);
?>