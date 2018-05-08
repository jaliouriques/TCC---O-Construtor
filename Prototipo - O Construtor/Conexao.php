

<?php

class Conexao
{

    const HOST = "localhost";
    const NOMEBANCO = "OConstrutor";
    const USUARIO = "root";
    const SENHA = "";

    public static function getConexao()
    {
        //Conexão com o banco de dados usando o objeto PDO
        $conexao = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NOMEBANCO, self::USUARIO, self::SENHA);
        return $conexao;


    }



}