<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manejemen</title>
    <link rel="stylesheet" href="../assets/Css/index-input.css">
</head>
<body>
    
    <h2 class="judul">Input Task</h2>
    <form action="../process/process-input.php" method="post" class="form">
        
    <div class="inputan">
        <label for="mata_kuliah">Mata Kuliah</label>
        <input type="text" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah">
    </div>

    <div class="inputan">
        <label for="priorty">Priorty</label>
        <input type="text" id="priority" name="priority" placeholder="Priority">
    </div>
    
    <div class="inputan">
        <label for="deadline">Deadline</label>
        <input type="date" id="deadline" name="deadline">
    </div>

    <div class="inputan">
        <label for="jenis">Jenis</label>
        <input type="text" id="jenis" name="jenis" placeholder="Jenis">
    </div>
    
    <div class="inputan">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Not Started">Not Started</option>
            <option value="In Progress">In Progress</option>
            <option value="Done">Done</option>
        </select>
    </div>

    <div class="inputan">
        <label for="keterangan">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" placeholder="Keterangan">
    </div>

    <div class="inputan">
        <label for="Pengumpulan">Pengumpulan</label>
        <textarea name="pengumpulan" id="Pengumpulan" placeholder="Pengumpulan"></textarea>
    </div>

    <div class="inputan">
        <label for="Status_pengumpulan">Status Pengumpulan</label>
        <select name="status_pengumpulan" id="Status_pengumpulan">
            <option value="Submitted">Submitted</option>
            <option value="Not Submitted">Not Submitted</option>
        </select>
    </div>

    <div class="input-action">
        <button type="button" class="btn-cancel" id="btn-cancel">Cancel</button>
        <button type="submit" class="btn-submit" id="btn-submit">Submit</button>
    </div>
    
    </form>
    <script type="module" src="../assets/js/index-input.js"></script>
</body>
</html>