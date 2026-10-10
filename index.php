<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manajemen</title>
    <link rel="stylesheet" href="assets/Css/index.css">
</head>
<body>
    <?php
    include 'config/database.php'
    ?>
    <h1 id="header">Task Manajemen</h1>
        <div class="wrapper">
            <div class="container-input">
                <button type="button" class="btn-input" id="btn-input"><span class="simbol-input">+</span>Tambah Tugas </button>
        </div>
            <table border="1" class="tabel">
                <thead>
                <tr id="header_table">
                    <th>Mata Kuliah</th>
                    <th>Priority</th>
                    <th>Deadline</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Pengumupulan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php include 'process/view-data.php';?>
                </tbody>
            </table>
        <script type="module" src="assets/js/index.js"></script>
</body>
</html>