<?php
include "koneksi.php";
include "header.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM produk where kd_produk='$_GET[id]'");
$r = mysqli_fetch_array($tampil);
echo "
<h2>Detail Produk</h2>
<table border=1 width=100%>
    <tr><td>Kode produk</td><td>$r[kd_produk]</td></tr>
    <tr><td>Nama produk</td><td>$r[nama_produk]</td></tr>
    <tr><td>Harga</td><td>$r[harga]</td></tr>
    <tr><td>Kode Kategori</td><td>$r[kd_kategori]</td></tr>
</table>";
include "footer.php";
