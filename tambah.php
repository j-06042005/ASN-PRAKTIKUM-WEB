<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Barang</title></head>
<body>
<h2>Form Tambah Barang</h2>
<form method="POST" action="">
    Kode Barang: <input type="text" name="kode_barang"><br>
    Nama Barang: <input type="text" name="nama_barang"><br>
    Kategori: <input type="text" name="kategori"><br>
    Jumlah: <input type="number" name="jumlah"><br>
    Harga: <input type="number" step="0.01" name="harga"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    $kode   = $_POST['kode_barang'];
    $nama   = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga  = $_POST['harga'];

    $insert = mysqli_query($conn, "INSERT INTO barang VALUES (NULL, '$kode', '$nama', '$kategori', $jumlah, $harga)");

    if ($insert) {
        echo "Data berhasil ditambahkan <br><a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>
</body>
</html>
