<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $alamat;
    public $jurusan;
    public $ipk;

    public function __construct($nama, $nim, $alamat, $jurusan, $ipk)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
    }
}

// Membuat objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Nurmila", "0110223297", "Depok", "Teknik Informatika", "3.75");

// Tampilin Data class Mahasiswa
echo "Nama Mahasiswa: " . $mahasiswa1->nama . "<br>";
echo "Nim Mahasiswa: " . $mahasiswa1->nim . "<br>";
echo "Alamat Mahasiswa: " . $mahasiswa1->alamat . "<br>";
echo "Jurusan Mahasiswa: " . $mahasiswa1->jurusan . "<br>";
echo "Ipk Mahasiswa: " . $mahasiswa1->ipk . "<br>";

?>