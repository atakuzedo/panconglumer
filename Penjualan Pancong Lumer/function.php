<?php
$con = mysqli_connect("localhost","root","","kontakkami");


if(!$con){
    echo "Failed Connection";
}

function tambah($data){
    global $con;
    $nama = ($data['nama']);
    $email = ($data['email']);
    $nohp = ($data['nohp']);
    $pesan = ($data['pesan']);

    $result = mysqli_query($con, "SELECT nama FROM datakontak WHERE nama = '$nama'");
    
    $query = "INSERT INTO datakontak VALUES ('$nama','$email','$nohp','$pesan')";
    mysqli_query($con,$query);
    return mysqli_affected_rows($con);
}
function query($query){
    global $con;
    $result = mysqli_query($con,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

?>