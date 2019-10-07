<?php
class rpl2{

public $hobby;
public $tinggi;
public $tmpt_lahir;
public $tgl_lahir;
public $alamat;

public function nama(){

    return "Big smoke";

}
public function gen(){

    return "Tiong Hoa";

}
}
$kelas = new rpl2();
$kelas->alamat = "Komplek Taman Cibaduyut indah";
$kelas->tmpt_lahir = "Manchester,Britania Raya";
$kelas->tgl_lahir = "30 September 1960";
$kelas->tinggi = "186cm";
$kelas->hobby = "Menembak";

echo "<fieldset>";
echo "<pre>";
echo "Nama = ".$kelas->nama();
echo "<br>";
echo "Keturunan asli = ".$kelas->gen();
echo "<br>";
echo "Alamat  = ".$kelas->alamat;
echo "<br>";
echo "Tempat Lahir  = ".$kelas->tmpt_lahir;
echo "<br>";
echo "Tanggal Lahir  = ".$kelas->tgl_lahir;
echo "<br>";
echo "Tinggi  = ".$kelas->tinggi;
echo "<br>";
echo "Hobby  = ".$kelas->hobby;
"</pre>";
"</fieldset>";
?>