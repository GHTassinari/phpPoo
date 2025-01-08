<?php

class Login {
    public static $user;

    public static function verificaLogin(){
        echo "<br>O usuário ". self::$user ." está logado<br>"; // Em métodos estáticos, não é possível usar o this para atributos da classe mesma classe. Usa-se o self::
    }

    public function sairSistema(){
        echo "<br>O usuário deslogou<br>";
    }
}

Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSistema();


?>