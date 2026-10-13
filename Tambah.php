<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Tambah Data Barang</h1>

    <form action="simpan.php" method="POST">
        <label>Kode Barang</label><br>
        <input type="text" name="kode_barang" placeholder="Contoh: BRG004" required><br><br>

        <label>Nama Barang</label><br>
        <input type="text" name="nama_barang" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Harga (Rp)</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit">Simpan Barang</button>
    </form>

    <br>
    <a href="index.php">Kembali ke Daftar Barang</a>

</body>
</html>