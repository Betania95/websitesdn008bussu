<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $nama_ortu = $_POST["nama_ortu"];
    $no_hp = $_POST["no_hp"];

    $baris = "$nama | $nisn | $tempat_lahir | $tanggal_lahir | $alamat | $nama_ortu | $no_hp" . PHP_EOL;

    $file = fopen("pendaftar.txt", "a");
    if ($file) {
        fwrite($file, $baris);
        fclose($file);
        echo "✅ Data berhasil disimpan. Terima kasih sudah mendaftar!";
    } else {
        echo "❌ Gagal menyimpan data. Silakan coba lagi.";
    }
} else {
    echo "⚠️ Formulir tidak valid.";
}
