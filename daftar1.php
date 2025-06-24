<?php
// Panggil file koneksi
include 'koneksi.php';

// Cek apakah form dikirim via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $nama          = $_POST["nama"];
    $nisn          = $_POST["nisn"];
    $tempat_lahir  = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat        = $_POST["alamat"];
    $nama_ortu     = $_POST["nama_ortu"];
    $no_hp         = $_POST["no_hp"];

    // Query simpan ke tabel
    $sql = "INSERT INTO pendaftar (nama, nisn, tempat_lahir, tanggal_lahir, alamat, nama_ortu, no_hp)
          VALUES ('$nama', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$nama_ortu', '$no_hp')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Pendaftaran berhasil! Terima kasih, $nama.";
    } else {
        echo "❌ Gagal menyimpan data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "⚠️ Form tidak dikirim dengan benar.";
}
