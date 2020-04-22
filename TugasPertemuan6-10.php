<?php 
// parent class
class SMK {
    // property
    public $nama;
    public $umur;
    public $alamat;
    public $kelas;
    // method
    public function tampilSiswa(){
        return 'ini adalah data siswa ';
    }
    public function tampilSiswi(){
        return 'ini adalah data siswi ';
    }

}

// child class
class jurusan extends SMK {                                                        
    private $jurusan='IPA';
    public function tampilJurusan(){
        return ' nama : ' . $this->nama . ' umur : ' . $this->umur . ' alamat : ' . $this->alamat . ' kelas : ' . $this->kelas . ' jurusan -> ' . $this->jurusan;
    }
}
//child class
class angkatan extends jurusan {
    protected $angkatan='2010';
    public function tampilAngkatan(){
        return ' nama : ' . $this->nama . ' umur : ' . $this->umur . ' alamat : ' . $this->alamat . ' kelas : ' . $this->kelas . ' jurusan -> ' . $this->jurusan . ' Angkatan -> ' . $this->angkatan;
    }
}
// instansiasi
$dataSiswa = new jurusan();
// isi property
$dataSiswa->nama='Adi, Marno, Bagus';
$dataSiswa->umur='15,17,14';
$dataSiswa->alamat='Depok,Jakarta,Bogor';
$dataSiswa->kelas='XI';
//panggil method
echo $dataSiswa->tampilSiswa();
echo '<br>';
echo $dataSiswa->tampilJurusan();
?>