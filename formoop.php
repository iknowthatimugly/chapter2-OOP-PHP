<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <fieldset>
            <table>
                <form action="" method="post">
                    Masukkan Nama :
                    <input type="text" name="n" id="" min="1" required>
                    <br>
                    Masukkan gaji umum : 
                    <input type="number" name="r" id="" min="50000" required>
                    <input type="submit" value="Hitung" name="hitung">
                </form>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</table>
</fieldset>
</pre>
<?php
if (isset($_POST['hitung'])) {
    $r = $_POST['r'];
    $nama = $_POST['n'];
    // var_dump($n);

    echo "Nama Pekerja : ".$nama;

    class Payday{

        public $r;
        public function __construct($r){
            $this->r = $r;
        }
    }
    class karbul extends Payday{
        public function bkar(){
            echo "Gaji perbulan(Karyawan) : ".(30*$this->r);
        }
    }
    class karming extends karbul{
        public function mkar(){
            echo "Gaji perminggu(Karyawan) : ".(6*$this->r);
        }
    }
    class germing extends karming{
        public function mger(){
            echo "Gaji perminggu(Manager) : ".(6*$this->r*2);
        }
    }
    class bulger extends germing{
        public function bger(){
            echo "Gaji perbulan(Manager) : ".(30*$this->r*2);
        }
        public function gajian1(){
            $a = $this->mkar();    
            echo $a;
            }
        public function gajian2(){
            $b = $this->bkar(); 
            echo $b;
        }
        public function gajian3(){
            $c = $this->mger();
            echo $c;
        }
        public function gajian4(){
            $d = $this->bger();
            echo $d;
        }
        public function __destruct(){
            echo "Gaji umum : ".$this->r;
        }
    }
    $gajian = new bulger($r);

    echo "<br>";
    echo $gajian->gajian1();
    echo "<br>";
    echo $gajian->gajian2();
    echo "<br>";
    echo $gajian->gajian3();
    echo "<br>";
    echo $gajian->gajian4();
    echo "<br>";
}
?>

</body>
</html>