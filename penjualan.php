<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Penjualan</h2>
<table border=1 width=100%>
    <tr>
        <th>NO</th><th>Kode Penjualan</th><th>Tanggal Penjualan</th><th>Kode pelanggan</th><th>Nama Pelanggan</th>
    </tr>";
$tampil = mysqli_query(
    $koneksi,
    "SELECT penjualan.kd_pelanggan, penjualan.kd_penjualan, penjualan.tgl_penjualan, pelanggan.nama_pelanggan from penjualan
left join pelanggan on penjualan.kd_pelanggan=pelanggan.kd_pelanggan"
);
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td>$no</td>
            <td>$r[kd_penjualan]</td>
            <td>$r[tgl_penjualan]</td>
            <td>$r[kd_pelanggan]</td>
            <td>$r[nama_pelanggan]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
