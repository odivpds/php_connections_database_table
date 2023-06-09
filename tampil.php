<?php
include "training.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PutuAgusPranaDhivaSatvika</title>
    <style>
      .container{
        align-items: center;
        justify-content: center;
      }
      h1{
        margin-left:34%;
      }
      .tabel,th,td{
        border-collapse:collapse;
        margin-left: 35%;
      }
      th{
        padding: 15px;
        background-color: tomato;
      }
      td{
        padding: 5px;
        background-color: bisque;
      }
    </style>
</head>
<body>
  <div class="container">
  <h1>Putu Agus Prana Dhiva Satvika</h1>
  <?php
    $sql = "SELECT * FROM tbl_mahasiswa";
    $result = mysqli_query($conn,$sql);
    echo "<br><br>";
    echo "<table border=1 class=tabel> ";
    echo "<tr class=bg_tbl>";
    echo "<th> Nim </th>";
    echo "<th> Nama </th>";
    echo "<th> Jenis Kelamin </th>";
    echo "<th> Alamat </th>";
    echo "</tr>";
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='data'>";
        echo "<td>".$row["Nim"]."</td>";
        echo "<td>".$row["Nama"]."</td>";
        echo "<td>" .$row["Jenis_Kelamin"]."</td>";
        echo "<td>".$row["Alamat"]."</td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
      
    }
    ?>
  </div>
   
    
    
</body>
</html>