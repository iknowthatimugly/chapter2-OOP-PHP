<?php
class Karyawan{
    public $nama;
    public $pekerjaan;
    public $tahun_bekerja;
    protected $gaji;
    private $gajimanager = 500000;

    public function setdata($nama,$pekerjaan,$tahun_bekerja){
        $this->nama=$nama;
        $this->pekerjaan=$pekerjaan;
        $this->tahun_pekerjaan=$tahun_bekerja;
    }
    function getData(){
        
    }
}
?>