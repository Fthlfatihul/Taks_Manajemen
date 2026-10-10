<?php
// 1. Hubungkan koneksi database
include 'config/database.php';
global $conn;
// 2. Query data dari tabel tasks
$sql = 'SELECT * FROM tasks ORDER BY id DESC'; 
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}

// 3. Render baris tabel HTML
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { 
        $deadline_formatted = date("d M Y, H:i", strtotime($row['deadline']));
?>
        <tr class="space">
            <td><?= htmlspecialchars($row['Mata_kuliah']); ?></td>
            <td><?= htmlspecialchars($row['priority']); ?></td>
            <td><?= $deadline_formatted; ?></td>
            <td><?= htmlspecialchars($row['jenis']); ?></td>
            <td><?= htmlspecialchars($row['status']); ?></td>
            <td><?= htmlspecialchars($row['keterangan'] ?? '-'); ?></td>
            <td><?= htmlspecialchars($row['pengumpulan'] ?? '-'); ?></td>
            <td>
                <!-- id otomatis dari DB digunakan sebagai identifier di URL -->
                <a href="pages/index-edit.php?id=<?= $row['id']; ?>">
                    <button type="button" class="btn-edit">Edit</button>
                </a>
                <a href="process/process-delete.php?action=delete&id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus tugas ini?')">
                    <button type="button" class="btn-delete">Delete</button>
                </a>
            </td>
        </tr>
<?php 
    }
} else { 
?>
    <tr>
        <td colspan="8" style="text-align: center;">Belum ada data tugas.</td>
    </tr>
<?php 
} 
?>