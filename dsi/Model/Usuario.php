<?php

use App\Model\Conexao;

class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;

    // Getters e Setters

    //ID
    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    //Nome
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    //CPF
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    //Email
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    //Data de nascimento
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    // Senha
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function inserirBD()
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) {
            die("Connection failed: " . $stmt->connect_error);
        }

        $sql = "INSERT INTO usuario (nome, cpf, email, senha)VALUES ('" . $this->getNome() . "', '" . $this->getCPF(). "', '" . $this->getEmail() . "','" . $this->getSenha() . "')";
        if ($stmt->query($sql) === TRUE) {
            $this->id = mysqli_insert_id($stmt);
            $stmt->close();
            return TRUE;
        } else {
            $stmt->close();
            return FALSE;
        }
    }

    public function carregarUsuario($cpf)
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) 
        {
            die("Connection failed: " . $stmt->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE cpf = ".$cpf ;
        $re = $stmt->query($sql);
        $r = $re->fetch_object();
        if($r != null)
        {
            $this->id = $r->idusuario;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->cpf = $r->cpf;
            $this->dataNascimento = $r->dataNascimento;
            $this->senha = $r->senha;
            $stmt->close();
            return true;
        }
        else
        {
            $stmt->close();
            return false;
        }
    } 

    public function atualizarBD()
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) 
        {
            die("Connection failed: " . $stmt->connect_error);
        }
        $sql = "UPDATE usuario SET nome = '".$this->nome."', cpf = '". $this->cpf."', dataNascimento = '". $this->dataNascimento."', email='".$this->email."' WHERE idusuario ='". $this->id. "'";
        if ($stmt->query($sql) === TRUE) 
        {
            $stmt->close();
            return TRUE;
        }
        else 
        {
            $stmt->close();
            return FALSE;
        }
    } 
}
