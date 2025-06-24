<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $targetDir = "dokumen/";
    $fileName = basename($file["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($fileType !== "pdf") {
        echo "❌ Hanya file PDF yang diperbolehkan.";
        exit;
    }

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "✅ File berhasil diunggah: <a href='$targetFile'>$fileName</a>";
    } else {
        echo "❌ Gagal mengunggah file.";
    }
}
