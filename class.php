<?php
//1.class adalah sebuah blueprint/template untuk membuat instance dari object
//2.Class mendefinisikan object
//3.class menyimpan data(property)dan perilaku(method)

//membuat class dengan nama kucing
class kucing
{
  //Membuat property
  public $warna;
  public $jml_kaki;
  public $mkn_fav;
  
  //Membuat Method dengan nama bersuara
  public function bersuara()
  {
      return "DARAWET ANJING DAWET";
  }
}
// membuat objek
$kucing1 = new kucing;
$kucing1->$warna = "Anjay";

echo "Warna  = ".$kucing1->$warna;


?>