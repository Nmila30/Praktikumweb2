<?php require_once 'class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI UJIAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
</head>
<body>
  
<h2 class="text-center">FROM NILAI UJIAN</h2>
    <form action="" method="post">
        <label for="matkul">Mata Kuliah:</label>
        <input type="text" id="matkul" name="matkul" required><br><br>

        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $matakuliah = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        $nim = $_POST['nim'];

        // Membuat objek NilaiMahasiswa
        $mahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "NIM: " . $mahasiswa->nim . "<br>";
        echo "Mata Kuliah: " . $mahasiswa->matakuliah . "<br>";
        echo "Nilai: " . $mahasiswa->nilai . "<br>";
        echo "hasil_ujian: " . $mahasiswa->hasil_ujian() . "<br>";
        echo "grade: " . $mahasiswa->grade() . "<br>";
    }
    ?>    
</body>
</html>