<?php
class kantor{

    public function __construct(){
        echo "Masuk kantor<br>";
    }
    public function __destruct(){
        echo "keluar kantor
        ";
    }

}
$kntr = new kantor();
?>