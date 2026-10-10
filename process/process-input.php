<?php

include_once "../config/database.php";
global $conn;

$sql =  "INSERT INTO tasks (Mata_kuliah,priority,deadline,jenis,status,keterangan,pengumpulan,status_pengumpulan) 
        values ('$_POST[mata_kuliah]','$_POST[priority]','$_POST[deadline]','$_POST[jenis]','$_POST[status]','$_POST[keterangan]','$_POST[pengumpulan]','$_POST[status_pengumpulan]')";

if(mysqli_query($conn, $sql)){
    echo"Data Berhasil Di Tambah";
    header("Location: ../index.php");
}else {
    echo "Error: " . $sql ."<br>" .mysqli_error($conn);
}
?>