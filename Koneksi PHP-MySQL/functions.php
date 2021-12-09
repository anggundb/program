<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "anggun", "123", "koneksi");


function query($query) {
    global $conn;        // ketika panggil $conn akan mengacu ke $conn yang atas
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;    
    }
    return $rows;
}

?>