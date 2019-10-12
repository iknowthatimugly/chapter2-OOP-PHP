<?php
class Mobil{
    public function __construct(){
        echo "mobil saya gallardo<br>";
    }

    public function jenis_mobil()
    {
        return "Mobil Gallardo";
    }
}
$mobil = new Mobil();

echo $mobil->jenis_mobil();
?>