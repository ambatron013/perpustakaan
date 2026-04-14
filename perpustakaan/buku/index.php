<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!-- Tombol Tambah Data -->
<a href="tambah.php" 
   class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['kelas'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>