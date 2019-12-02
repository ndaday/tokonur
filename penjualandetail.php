<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Detail Penjualan</h2>
<table border=1 width=100%>
    <tr>
        <th>Penjualan Detail</th><th>Kode Penjualan</th><th>Kode Produk</th><th>Quantity</th>
    </tr>";
$tampil = mysqli_query($koneksi, "SELECT * FROM penjualandetail");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td align='center'>$r[id_penjualandetail]</td>
            <td>$r[kd_penjualan]</td>
            <td>$r[kd_produk]</td>
            <td>$r[qty]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
