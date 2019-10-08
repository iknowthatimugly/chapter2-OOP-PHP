<?php
class hero{
    var $name;
    var $str;
    var $agi;
    var $int;
    var $role;

    public function lane1(){
        return "Top lane";
    }
    public function lane2(){
        return "Mid lane";
    }
    public function lane3(){
        return "Bottom lane";
    }
}
$hero = new hero();

$hero->name="Invoker";
$hero->str="44";
$hero->agi="31";
$hero->int="24";
$hero->role="Midlaner";

echo "Name : ".$hero->name;
echo "<br>";
echo "Strength : ".$hero->str;
echo "<br>";
echo "Agility : ".$hero->agi;
echo "<br>";
echo "Intellegence : ".$hero->int;
echo "<br>";
echo "Role : ".$hero->role;
echo "<br>";
if ($hero->role == "Offlane") {
    echo "Lane : ".$hero->lane1();
}
elseif ($hero->role == "Midlaner") {
    echo "Lane : ".$hero->lane2();
}
elseif ($hero->role == "Carry" && $hero->role == "Support") {
    echo "Lane : ".$hero->lane3();
}
?>