<?php
/* ATRIBUTOS E METÓDOS ESTÁTICOS
    Quando um método ou atributo é static, pode ser acessado sem precisar instanciar a classe em um objeto. Para usar um atributo dentro da classe é necessário o uso de self::nomeAtributo
*/
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
