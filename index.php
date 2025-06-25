<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventaris Barang</title>
</head>
<body>
    <h2>Daftar Barang</h2>
    <a href="tambah.php">+ Tambah Barang</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th><th>Kode</th><th>Nama</th><th>Kategori</th><th>Jumlah</th><th>Harga</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM barang");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>$no</td>
                <td>{$row['kode_barang']}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['kategori']}</td>
                <td>{$row['jumlah']}</td>
                <td>{$row['harga']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
