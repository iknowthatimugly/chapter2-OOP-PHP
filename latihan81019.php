<?php
class dota2user {

    public $id;
    protected $pass = "kaliantampansayajelek";
    private $truename = "Adimas Purnama";

    public function true(){

        return $this->truename;

    }
    public function access_bypass(){

        return $this->pass;

    }
}
$userdota = new dota2user();

$userdota->id = "anjaymabar221";

echo "Id : ".$userdota->id;
echo "<br>";
echo "Password : ".$userdota->access_bypass();
echo "<br>";
echo "Truename : ".$userdota->true();

?>