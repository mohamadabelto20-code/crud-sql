<?php
require_once "config/database.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM barang_155 WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Edit Data Barang</h1>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Kode Barang</label><br>
        <input type="text" name="kode_barang" value="<?= htmlspecialchars($data['kode_barang']); ?>" required><br><br>

        <label>Nama Barang</label><br>
        <input type="text" name="nama_barang" value="<?= htmlspecialchars($data['nama_barang']); ?>" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" value="<?= htmlspecialchars($data['kategori']); ?>" required><br><br>

        <label>Harga (Rp)</label><br>
        <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="<?= $data['stok']; ?>" required><br><br>

        <button type="submit">Update Barang</button>
    </form>

    <br>
    <a href="index.php">Batal & Kembali</a>

</body>
</html>