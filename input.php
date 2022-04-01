<?php

$servername="localhost";
$username="root";
$password="";
$db="pemilihanpresma";

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn){
    echo "terhubung";
}

$input=$_POST['pilihan'];
$query = "INSERT INTO daftarpemilih (pilihan) VALUES ('$input')";
$inputpilihan=mysqli_query($conn,$query);
if ($inputpilihan){
    echo "berhasil memilih";
}
else {echo "gagal";}

?>