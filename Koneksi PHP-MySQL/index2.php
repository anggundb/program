<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "anggun", "123", "koneksi");

// Ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");
//var_dump($result); //cek isi tabel
// if( !$result ) {  // ! = not > untuk memunculkan pesan error ketika gagal
//     echo mysqli_error($conn);
// }

// ambil data (fetch) siswa dari object result (ada 4 cara)
// mysqli_fetch_row()     // mengembalikan array numerik
// mysqli_fetch_assoc()   // mengembalikan array associative 
// mysqli_fetch_array()   // mengembalikan keduanya
// mysqli_fetch_object()  // mengembalikan object


// $sis = mysqli_fetch_row($result);
// var_dump($sis[3]);

// $sis = mysqli_fetch_assoc($result);
// var_dump($sis["jurusan"]);

// $sis = mysqli_fetch_array($result);
// var_dump($sis["jurusan"]);     // boleh angka, boleh string tapi kekurangannya data yang disajikan doble

// $sis = mysqli_fetch_object($result);
// var_dump($sis->nama);

// while( $sis = mysqli_fetch_assoc($result) ) {
//     var_dump($sis["nama"]);
// }

?>

<!DOCTYPE html>
<html>
<head>
     <title>Halaman Admin</title>
</head>
<body>
     
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
 // <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>