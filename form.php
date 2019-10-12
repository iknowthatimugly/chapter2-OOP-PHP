<?php
class login{
    public $username;
    public $password;
    public function _contruct(){
        $this->username = $user;
        $this->password = $pass;
    }
    public function akses($user,$pass){
        if ($user == "admin" && $pass == "admin") {
            echo "login berhasil";
        }
        else {
            echo "login gagal <a href='construct.php'>silahkan login kembali</a>";
        }
    }
}
if (isset($_POST['sbm'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
}
?>