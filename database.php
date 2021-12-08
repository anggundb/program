<?php 
if (!mysqli_connect('localhost', 'anggun', '123', 'koneksi')) { 
die('Koneksi gagal: ' . mysqli_connect_error()); 
}
echo 'Koneksi berhasil';
?>
