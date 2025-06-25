<?php include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Barang</title></head>
<body>
<h2>Edit Barang</h2>
<form method="POST" action="">
    Kode Barang: <input type="text" name="kode_barang" value="<?= $row['kode_barang'] ?>"><br>
    Nama Barang: <input type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>"><br>
    Kategori: <input type="text" name="kategori" value="<?= $row['kategori'] ?>"><br>
    Jumlah: <input type="number" name="jumlah" value="<?= $row['jumlah'] ?>"><br>
    Harga: <input type="number" step="0.01" name="harga" value="<?= $row['harga'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $kode = $_POST['kode_barang'];
    $nama = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $update = mysqli_query($conn, "UPDATE barang SET kode_barang='$kode', nama_barang='$nama', kategori='$kategori', jumlah=$jumlah, harga=$harga WHERE id=$id");

    if ($update) {
        echo "Data berhasil diperbarui <br><a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>
</body>
</html>
