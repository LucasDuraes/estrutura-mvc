<?php

class Conexao{
    private static $instancia;

    public function __construct(){}

    public static function getConexao(){
        if (!isset(self::$instancia)) {
            $dbname = 'Aqui ficara o nome do banco de dados';
            $host   = 'Aqui ficara o seu host ex: localhost';
            $user   = 'Aqui ficara o seu username ex: root';
            $senha  = 'Aqui ficara a senha do banco caso não tenha deixe vazio';

            try {
                self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            } catch (\Throwable $th) {
                echo 'Erro: '.$th;
            }
        }
        return self::$instancia;
    }
}
#quando quiser acessar o banco em alguma class inicie a conexao com o banco no construtor da class ex: Conexao::getConexao();
?>