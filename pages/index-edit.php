<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manejemen</title>
    <link rel="stylesheet" href="../assets/Css/index-edit.css">
</head>
<body>

    <?php
    include_once "../config/database.php";
    global $conn;
    
    // Gunakan ?? 0 agar tidak warning jika ID tidak diisi di URL
    $id = $_GET['id'] ?? 0;

    $sql = "SELECT Mata_kuliah, priority, deadline, jenis, status, keterangan, pengumpulan, status_pengumpulan FROM tasks WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if (!$data){
        die("Data Tidak Ditemukan");
    }
    ?>

    <h2 class="judul">Edit Task</h2>
    <form action="../process/process-edit.php" method="post" class="form">
        
        <!-- Input Hidden ID -->
        <input type="hidden" name="id" value="<?= $id; ?>">
        
        <div class="inputan">
            <label for="mata_kuliah">Mata Kuliah</label>
            <input type="text" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" value="<?= htmlspecialchars($data['Mata_kuliah']); ?>" required>
        </div>

        <div class="inputan">
            <label for="priority">Priority</label>
            <input type="text" id="priority" name="priority" placeholder="Priority" value="<?= htmlspecialchars($data['priority']); ?>">
        </div>
        
        <div class="inputan">
            <label for="deadline">Deadline</label>
            <?php 
                // Ubah format tanggal ke YYYY-MM-DD
                $tanggal_formatted = !empty($data['deadline']) ? date('Y-m-d', strtotime($data['deadline'])) : '';
            ?>
            <input type="date" id="deadline" name="deadline" value="<?= $tanggal_formatted; ?>">
        </div>

        <div class="inputan">
            <label for="jenis">Jenis</label>
            <input type="text" id="jenis" name="jenis" placeholder="Jenis" value="<?= htmlspecialchars($data['jenis']); ?>">
        </div>
        
        <div class="inputan">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Not Started" <?= ($data['status'] == 'Not Started') ? 'selected' : ''; ?>>Not Started</option>
                <option value="In Progress" <?= ($data['status'] == 'In Progress') ? 'selected' : ''; ?>>In Progress</option>
                <option value="Done" <?= ($data['status'] == 'Done') ? 'selected' : ''; ?>>Done</option>
            </select>
        </div>

        <div class="inputan">
            <label for="keterangan">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= htmlspecialchars($data['keterangan']); ?>">
        </div>

        <div class="inputan">
            <label for="Pengumpulan">Pengumpulan</label>
            <textarea name="pengumpulan" id="Pengumpulan" placeholder="Pengumpulan"><?= htmlspecialchars($data['pengumpulan']); ?></textarea>
        </div>

        <div class="inputan">
            <label for="Status_pengumpulan">Status Pengumpulan</label>
            <select name="status_pengumpulan" id="Status_pengumpulan">
                <option value="Submitted" <?= ($data['status_pengumpulan'] == 'Submitted') ? 'selected' : ''; ?>>Submitted</option>
                <option value="Not Submitted" <?= ($data['status_pengumpulan'] == 'Not Submitted') ? 'selected' : ''; ?>>Not Submitted</option>
            </select>
        </div>

        <div class="input-action">
            <button type="button" class="btn-cancel" onclick="history.back()">Cancel</button>
            <button type="submit" class="btn-submit">Submit</button>
        </div>
        
    </form>
</body>
</html>