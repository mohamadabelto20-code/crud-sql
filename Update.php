<?php
require_once "config/database.php";

$id          = $_POST['id'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori    = $_POST['kategori'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];

$stmt = $conn->prepare(
    "UPDATE barang_155 SET kode_barang = ?, nama_barang = ?, kategori = ?, harga = ?, stok = ? WHERE id = ?"
);

$stmt->bind_param("sssiii", $kode_barang, $nama_barang, $kategori, $harga, $stok, $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

echo "Gagal mengupdate data barang.";
?>