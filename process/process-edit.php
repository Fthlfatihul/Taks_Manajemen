<?php
include_once "../config/database.php";
global $conn;

// 1. Ambil data dari form POST ke dalam variabel
$id                 = $_POST['id'];
$mata_kuliah        = $_POST['mata_kuliah'];
$priority           = $_POST['priority'];
$deadline           = $_POST['deadline'];
$jenis              = $_POST['jenis'];
$status             = $_POST['status'];
$keterangan         = $_POST['keterangan'];
$pengumpulan        = $_POST['pengumpulan'];
$status_pengumpulan = $_POST['status_pengumpulan'];

// 2. Query UPDATE dengan tanda petik untuk setiap nilai teks/tanggal
$sql = "UPDATE tasks SET 
        Mata_kuliah         = '$mata_kuliah', 
        priority            = '$priority', 
        deadline            = '$deadline', 
        jenis               = '$jenis', 
        status              = '$status', 
        keterangan          = '$keterangan', 
        pengumpulan         = '$pengumpulan', 
        status_pengumpulan  = '$status_pengumpulan' 
        WHERE id = '$id'";

// 3. Jalankan query
if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>