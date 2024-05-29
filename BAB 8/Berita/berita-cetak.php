<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM proses_polisi");
$html = '<center><h3>Data Berita</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Judul</th>
                <th>Tanggal, bulan dan tahun kejadian</th>
            </tr>';
$no = 1;
while ($polisi = mysqli_fetch_array($query)) {
    $imagePath = realpath('../img_berita/' . $polisi['photo']);
    $imageData = base64_encode(file_get_contents($imagePath));
    $src = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . $imageData;

    $html .= "<tr>
                <td>" . $no . "</td>
                <td><img src='" . $src . "' width='100' height='100'></td>
                <td>" . $polisi['judul'] . "</td>
                <td>" . $polisi['kejadian'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";

$dompdf->loadHtml($html);

// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Rendering dari HTML ke PDF
$dompdf->render();

// Melakukan output file PDF
$dompdf->stream('laporan-berita.pdf');
?>
