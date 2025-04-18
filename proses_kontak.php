<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);
    
    // Simpan ke database (buat tabel kontak jika belum ada)
    $query = "INSERT INTO kontak (nama, email, pesan, tanggal) VALUES ('$nama', '$email', '$pesan', NOW())";
    
    if (mysqli_query($conn, $query)) {
        header('Location: kontak.php?status=sukses');
    } else {
        header('Location: kontak.php?status=gagal');
    }
} else {
    header('Location: kontak.php');
}
?>