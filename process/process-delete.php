<?php
include_once "../config/database.php";
global $conn;

// 1. Ambil ID dari URL
$id = $_GET['id'] ?? 0;

// 2. Query DELETE tanpa tanda bintang (*)
$sql = "DELETE FROM tasks WHERE id = '$id'";

// 3. Jalankan query
$result = mysqli_query($conn, $sql);

// 4. Jika query berhasil dijalankan
if ($result) {
    header("Location: ../index.php");
    exit(); // Hentikan eksekusi script setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>