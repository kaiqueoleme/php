<?php

class Login {
    public static $user;

    public static function verificarLogin() {
        echo "O usuário ". self::$user. " está logado!";
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}

$login = new Login();
$login->sairSistema();
