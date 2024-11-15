<?php
require 'function.php';

if(isset($_POST['submit'])){
    if(tambah($_POST) > 0)
    echo
    "<script>alert('Data berhasil ditambahkan');
    document.location.href = 'tambahkontakkami.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form kontak kami</title>
    <link rel="stylesheet" href="">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Lato&family=Poppins&family=Montserrat:wght@400;500&family=Oswald&family=Rubik&display=swap');

  body{
    font-family: Montserrat;
  }
</style>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1 align="center">Form kontak kami</h1>
    <table border="0" align="center" cellpadding="20">
        <tr>
            <td>
                <label for="">Nama</label>
            </td>
            <td>
                <input type="text" name="nama" required placeholder="Masukkan nama">
            </td>
        </tr>
        <tr>
            <td>
                <label for="">Email</label>
            </td>
            <td>
                <input type="text" name="email" required placeholder="Masukkan email">
            </td>
        </tr>
        <tr>
            <td>    
                <label for="">Nomor Handphone&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" name="nohp" required placeholder="Masukkan nomor handphone">
            </td>
        </tr>
            <td>
                <label for="">Pesan&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" name="pesan" required placeholder="Masukkan pesan">
            </td>
        <tr>
            <td>
                <button name="submit" type="submit">Tambah</button>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>