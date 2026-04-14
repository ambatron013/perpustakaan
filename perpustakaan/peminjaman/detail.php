<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$data = mysqli_fetch_array($query);
?>

<h2>Detail Siswa</h2>
<table>
    <tr>
        <th>Nama</th>
        <td><?= $data['nama'] ?></td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td><?= $data['kelas'] ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?= $data['alamat'] ?></td>
    </tr>
</table>

<a href="index.php" class="btn-kembali">Kembali</a>
<!-- Tombol Edit -->
<a href="edit.php?id=<?= $data['id'] ?>" class="btn-edit">Edit</a>
<!-- Tombol Hapus -->
<a href="hapus.php?id=<?= $data['id'] ?>" class="btn-hapus">Hapus</a>
<!-- Tombol Tambah Data -->
<a href="tambah.php" class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data </a>
    <!-- Tombol Kembali -->
<a href="index.php" class="btn-kembali">Kembali</a> 