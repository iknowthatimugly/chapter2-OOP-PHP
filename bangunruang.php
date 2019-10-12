<?php
class BangunRuang{

    public $r;
    
    public function __construct($r){

        $this->r = $r;

    }
    public function luas(){
        echo "Luas Lingkaran : ".(3.14*$this->r*$this->r);
    }
    public function keliling(){
        echo "Keliling lingkaran : ".(2*3.14*$this->r);
    }
    public function diameter(){
        echo "Diameter : ".(2*$this->r);
    }
}
$bangunruang = new BangunRuang(5);

echo "Ruas : ".$bangunruang->r;
echo "<br>";
echo $bangunruang->luas();
echo "<br>";
echo $bangunruang->keliling();
echo "<br>";
echo $bangunruang->diameter();
?>