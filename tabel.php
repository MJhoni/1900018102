<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3-Tabel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url(aqars.jpeg);">
    <center>
<p class="bag">Contoh Gambar Logo Pada Kartu Member Fancard</p><br>
<div class="main">
    <div class="box">
        <img src="pngegg.png" alt="">
        <p>Jhoni/VIP/0220F</p>
    </div>
</div></center>

   

<?php 
$lines = file('fancard.txt'); 
echo "<h3 class='bag'>Berikut ini daftar member Fancard AqAr.s</h3><hr>";
echo "<table border='1'>";
echo "<th>Nama|Jenis Kelamin|Agama|Alamat|No. HP|Email|Tanggal Lahir|Jenis Kartu</th>";
foreach ($lines as $line_num => $line){
    $line_num+=1;
	print "<tr><td><font color=red>{$line_num}. </font>" . $line ."</tr></td>"; 
}
echo "</table>";
?>
<p>Ingin Menambah Data?</p>
<script>
alert("Tekan OK untuk melanjutkan");
</script>
<a class="tombol tombol_red" href="form.html">Halaman Awal</a>
</body>
</html>