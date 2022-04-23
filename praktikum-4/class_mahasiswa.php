<?php
class mahasiswa{
    var $nim;
    var $nama;
    var $angkatan;
    var $prodi;
    var $ipk;

    function __construct($nim, $nama, $angkatan, $prodi, $ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->angkatan = $angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }
    function predikat_ipk(){
        if ($this->ipk < 2.0) return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return 'Baik';
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return 'Memuaskan';
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4)
            return 'Cum Laude';
        
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getAngkatan(){
        return $this->angkatan;
    }

    public function getProdi(){
        return $this->prodi;
    }
}

// membuat instance class mahasiswa
$siswa1 = new mahasiswa(02011, 'Alif Fadlrurahman', 2010, 'SI', 3.99);
$siswa2 = new mahasiswa(02011, 'Faiz Fikri', 2012, 'TI', 3.8);
$siswa3 = new mahasiswa(02011, 'Cahaya Arzeti', 2010, 'TI', 3.99);
$siswa4 = new mahasiswa(02011, 'Muhammad Zain Rizqulloh', 2012, 'TI', 4);
$siswa5 = new mahasiswa(02011, 'Muhammad Azka Rizqi', 2012, 'TI', 4);

// panggil attribut dari class mahasiswa
$nilai = [$siswa1, $siswa2, $siswa3, $siswa4, $siswa5];
$nomor = 1;
foreach ($nilai as $siswa) {
echo '<tr><td>' . $nomor . '</td>';
echo '<td>' . $siswa->nim . '</td>';
echo '<td>' . $siswa->nama . '</td>';
echo '<td>' . $siswa->prodi . '</td>';
echo '<td>' . $siswa->angkatan . '</td>';
echo '<td>' . $siswa->ipk . '</td>';
echo '<td>' . $siswa->predikat_ipk() . '</td>';
echo '<td> <a><button class="bi bi-eye"></i> <i class="bi bi-pencil"></i></a></td>';
$nomor++;
}


// panggil method dari class mahasiswa

?>

