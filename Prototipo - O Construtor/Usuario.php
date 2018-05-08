<?php

require_once "Conexao.php";

class Usuario
{
    public $id;
    public $usuario;
    public $email;
    public $senha;



    //Crie um usuario
    public function __construct($usuario, $email, $senha)
    {
        $this->id = null;
        $this->usuario = $usuario;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getDisponibilidade()
    {

        if ($this->email =! $this->email) {
            return "Nome de  disponivel";
        } else {
            return "Indisponível";

        }


    }


}



public function salvar(Usuario $usuario)
    {
        //Após receber o usuario novo, realize a conexão e insira no banco estes dados
        $this->conexao->exec("INSERT INTO user (usuario, email, senha, tip_user_idtipuser) 
        VALUES ('$usuario->email','$usuario->senha', 1)");
    }