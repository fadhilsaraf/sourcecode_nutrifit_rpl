<?php
 if (isset($_POST['save'])){
 $fileName = $_FILES['image']['name'];
  // Simpan ke Database
  $sql = "insert into post (image) values ('$fileName')";
  mysql_query($sql);
  // Simpah di folder gambar
 if($_FILES['File']['type']=='image/png'||$_FILES['File']['type']=='image/jpeg'||$_FILES['File']['type']=='image/jpg'){
	move_uploaded_file($_FILES['File']['tmp_name'], 'img/gal'.$_FILES['File']['type']);
  header('location:http://localhost/ProjectWisata/application/views/tambah.php');
 }
 else {
			echo "File tidak sesuai";
			}
?>

<?php

$upload = new upload;
$upload->unggah();

?>