<?php
include "koneksi.php";
include "header.php";
echo "
<h2>Pelanggan</h2>
<table border=1 width=100%>
    <tr>
        <th>NO</th><th>Kode Pelanggan</th><th>Nama Pelanggan</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Telpon</th><th>Alamat</th>
    </tr>";
$tampil = mysqli_query($koneksi, "SELECT * FROM pelanggan");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
        <tr align=center>
            <td align='center'>$no</td>
            <td>$r[kd_pelanggan]</td>
            <td>$r[nama_pelanggan]</td>
            <td align='center'>$r[jk]</td>
            <td>$r[tgl_lahir]</td>
            <td>$r[telpon]</td>
            <td>$r[alamat]</td>
        </tr>";
    $no++;
}
echo "</table>";
include "footer.php";
