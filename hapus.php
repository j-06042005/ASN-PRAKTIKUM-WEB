<?php
include 'koneksi.php';
$id = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

if ($hapus) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data";
}
?>
