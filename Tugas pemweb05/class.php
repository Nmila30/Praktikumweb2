<?php
class NilaiMahasiswa {

    // Tangkap data dari form
    function __construct ($matkul, $nilai, $nim) {
        $this->matakuliah = $matkul;
        $this->nim = $nim;
        $this->nilai = $nilai;
      
} 

    function Hasil_Ujian() {
        if ($this->nilai >= 90) {
            return "A+";
        } elseif ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 80) {
            return "A-";
        } elseif ($this->nilai >= 75) {
            return "B+";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 65) {
            return "B-";
        } elseif ($this->nilai >= 60) {
            return "C+";
        } elseif ($this->nilai >= 55) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    function Grade() {
        if ($this->nilai >= 56) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
}
?>
}
?>
