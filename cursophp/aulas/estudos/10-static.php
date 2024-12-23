<?php
/* ATRIBUTOS E METÓDOS ESTÁTICOS
    Quando um método ou atributo é static, pode ser acessado sem precisar instanciar a classe em um objeto. Para usar um atributo dentro da classe é necessário o uso de self::nomeAtributo.
    Para acessar o método ou atributo, basta usar o nomeClasse::nomeMétodo ou nomeClasse::nomeAtributo.
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
