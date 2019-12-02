<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Kategori</h2>
<table border=1 width=100%>
    <tr>
        <th>NO</th><th>Kategori</th><th>Nama Kategori</th>
    </tr>";
$tampil = mysqli_query($koneksi, "SELECT * FROM kategori");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td align='center'>$no</td>
            <td> <a href='kategoriproduk.php?id=$r[kd_kategori]'>$r[kd_kategori]</a> </td>
            <td>$r[nama_kategori]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
