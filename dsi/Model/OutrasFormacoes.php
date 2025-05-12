<?php
class OutrasFormacoes
{
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

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

    //idusuario
    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    //inicio
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    public function getInicio()
    {
        return $this->inicio;
    }

    //fim
    public function setFim($fim)
    {
        $this->fim = $fim;
    }

    public function getFim()
    {
        return $this->fim;
    }

    //Descrição
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }


    // Inserir dados no Banco de Dados
    public function inserirBD()
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) {
            die("Connection failed: " . $stmt->connect_error);
        }
        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao)
        VALUES ('" . $this->idusuario . "','" . $this->inicio . "','" . $this->fim . "','" . $this->descricao . "')";
        if ($stmt->query($sql) === true) {
            $this->id = mysqli_insert_id($stmt);
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    //Excluir dados do Banco de Dados
    public function excluirBD($id)
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) {
            die("Connection failed: " . $stmt->connect_error);
        }

        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = '" . $id . "';";
        if ($stmt->query($sql) === true) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    // Mostrar dados do Banco de Dados
    public function listaFormacoes($idusuario)
    {
        require_once 'ConexaoBD.php';
        $conn = new ConexaoBD();
        $stmt = $conn->conectar();
        if ($stmt->connect_error) {
            die("Connection failed: " . $stmt->connect_error);
        }

        $sql = "SELECT * FROM outrasformacoes WHERE idusuario = '" . $idusuario . "'";

        $re = $stmt->query($sql);
        $stmt->close();
        return $re;
    }
}
