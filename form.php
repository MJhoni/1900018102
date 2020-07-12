<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dan Validasi-1900018102</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<?php
$nama = $gender = $gender = $Agama = $message = $hp = $tgl = $email = $jkr = "";
$namaErr = $genderErr = $genderErr = $AgamaErr = $messageErr = $hpErr = $tglErr = $emailErr = $jkrErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $namaErr = "Nama Tidak Boleh Kosong";
    } else {
      $nama = test_input($_POST["name"]);
    }
    
    if (empty($_POST["gender"])) {
      $genderErr = "Jenis Kelamin Tidak Boleh Kosong";
    } else {
      $gender = test_input($_POST["gender"]);
    }
      
    if (empty($_POST["Agama"])) {
      $AgamaErr = "Agama Tidak Boleh Kosong";
    } else {
      $Agama = test_input($_POST["Agama"]);
    }
  
    if (empty($_POST["message"])) {
      $messageErr = "Alamat tidak boleh kosong";
    } else {
      $message = test_input($_POST["message"]);
    }
    if (empty($_POST["hp"])) {
      $hpErr = "Nomor HP tidak boleh kosong";
    } else {
      $hp = test_input($_POST["hp"]);
    }
    if (empty($_POST["tgl"])) {
      $tglErr = "Nomor HP tidak boleh kosong";
    } else {
      $tgl = test_input($_POST["tgl"]);
    }
    if (empty($_POST["email"])) {
      $emailErr = "Nomor HP tidak boleh kosong";
    } else {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["jkr"])) {
      $jkrErr = "Nomor HP tidak boleh kosong";
    } else {
      $jkr = test_input($_POST["jkr"]);
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["name"]);
  $gender = test_input($_POST["gender"]);
  $Agama = test_input($_POST["Agama"]);
  $message = test_input($_POST["message"]);
  $hp = test_input($_POST["hp"]);
  $tgl = test_input($_POST["tgl"]);
  $email = test_input($_POST["email"]);
  $jkr = test_input($_POST["jkr"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Selamat Datang:</h2>";
echo "Nama  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   : ".$nama;
echo "<br>";
echo "Jenis Kelamin &emsp;&emsp;&emsp;&emsp;&emsp;: ".$gender;
echo "<br>";
echo "Agama   &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   : ".$Agama;
echo "<br>";
echo "Alamat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: ".$message;
echo "<br>";
echo "No. HP&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: ".$hp;
echo "<br>";
echo "Tanggal Lahir &emsp;&emsp;&emsp;&emsp;&emsp;: ".$tgl;
echo "<br>";
echo "Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : ".$email;
echo "<br>";
echo "Jenis Kartu &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: ".$jkr;
echo "<br>";
?>
<?php
echo "<head><title>Fancard Jhoners</head></title>";
$fp = fopen("fancard.txt","a+");
$nama = $_POST['name'];
$gender = $_POST['gender'];
$Agama= $_POST['Agama'];
$message = $_POST['message'];
$hp= $_POST['hp'];
$tgl = $_POST['tgl'];
$email = $_POST['email'];
$jkr = $_POST['jkr'];
 
fputs($fp,"$nama|$gender|$Agama|$message|$hp|$tgl|$email|$jkr\n");
fclose($fp);
?>
<br><br>
<p>Ingin Melihat Tabel Pendaftaran?klik tombol dibawah</p>
<a class="tombol tombol_red" href="tabel.php">Halaman Tabel</a>
</body>
</html>