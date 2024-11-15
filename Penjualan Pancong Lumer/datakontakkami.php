<?php
require ("function.php");

if(!$con){
    echo "Failed Connection";
}
$res = mysqli_query ($con, "SELECT * FROM datakontak");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kontak</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Montserrat:wght@400;500&family=Oswald&family=Rubik&display=swap');

  body{
    font-family: Montserrat;
  }
</style>
<body>
    <h1>Data kontak kami</h1>
    <table border="1" cellpadding="10" >
        <tr>
            <td><b>nama</td>
            <td><b>email</td>
            <td><b>nohp</td>
            <td><b>pesan</td>
        </tr>
<?php
        foreach ($res as $row){?>
        <tr>
            <td><?=$row["nama"];?></td>
            <td><?=$row["email"];?></td>
            <td><?=$row["nohp"];?></td>
            <td><?=$row["pesan"];?></td>
        </tr>
        <?php }?>
    </table>
    <a href="tambahkontakkami.php">Tambah data</a>
</body>
</html>