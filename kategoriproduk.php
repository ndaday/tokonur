<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Produk</h2>
<table border=1 width=100%>
    <tr>
        <th>NO</th><th>Kode Produk</th><th>Nama Produk</th><th>Harga</th><th>Kategori</th>
    </tr>";
$tampil = mysqli_query($koneksi, "SELECT * FROM produk where kd_kategori='$_GET[id]'");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td align='center'>$no</td>
            <td> <a href='produkdetail.php?id=$r[kd_produk]'>$r[kd_produk]</a> </td>
            <td>$r[nama_produk]</td>
            <td>$r[harga]</td>
            <td>$r[kd_kategori]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
