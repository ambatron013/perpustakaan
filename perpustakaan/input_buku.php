<!DOCTYPE html>
<html>
<head>
<title>input buku</title>
</head>
<body>

<h2>input buku perpustakaan<h2>

<from method="post" action="">
judul buku : <br>
<input type="text" name="judul"><br></br>

judul pengarang : <br>
<input type="text" name="judul"><br></br>

judul penerbit : <br>
<input type="text" name="judul"><br></br>

judul tahun : <br>
<input type="text" name="judul"><br></br>

judul stok : <br>
<input type="text" name="judul"><br></br>

<input type="submit" name="simpan" value="simpan">
</form>

</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","perpustakaan");

if(isset($_post['simpan'])){
$judul = $_posts
}



