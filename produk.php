<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Produk</h2>
<table border=1 width=100%>
    <tr>
        <th>NO</th><th>Kode Produk</th><th>Nama Produk</th><th>Harga</th><th>Kategori</th><th>Nama Kategori</th>
    </tr>";
$tampil = mysqli_query(
    $koneksi,
    "SELECT produk.kd_produk, produk.nama_produk, produk.harga, produk.kd_kategori, kategori.nama_kategori from produk
    left join kategori on produk.kd_kategori=kategori.kd_kategori"
);
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td align='center'>$no</td>
            <td>$r[kd_produk]</td>
            <td>$r[nama_produk]</td>
            <td>$r[harga]</td>
            <td>$r[kd_kategori]</td>
            <td>$r[nama_kategori]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
