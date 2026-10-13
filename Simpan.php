<?php
require_once "config/database.php";

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori    = $_POST['kategori'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];

$stmt = $conn->prepare(
    "INSERT INTO barang_155 (kode_barang, nama_barang, kategori, harga, stok) VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssii", $kode_barang, $nama_barang, $kategori, $harga, $stok);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

echo "Gagal menyimpan data barang.";
?>