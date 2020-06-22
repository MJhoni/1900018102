<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dan Validasi-1900018102</title>
</head>
<body>
<?php
$nama = $gender = $gender = $Agama = $message = "";
$namaErr = $genderErr = $genderErr = $AgamaErr = $messageErr = "";

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
      $messageErr = "Prestasi Tidak Boleh Kosong";
    } else {
      $message = test_input($_POST["message"]);
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["name"]);
  $gender = test_input($_POST["gender"]);
  $Agama = test_input($_POST["Agama"]);
  $message = test_input($_POST["message"]);
  
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
echo "Jenis Kelamin &emsp;&emsp;&emsp;&emsp;&emsp; : ".$gender;
echo "<br>";
echo "Agama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : ".$Agama;
echo "<br>";
echo "Prestasi yang pernah diraih : ".$message;
echo "<br>";
?>

</body>
</html>