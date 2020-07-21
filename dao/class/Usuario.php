<?php

class Usuario {
    private $idUsuario;
    private $loginUsuario;
    private $senha;
    private $dataCadastro;

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($id) {
        $this->idUsuario = $id;
    }

    public function getLoginUsuario() {
        return $this->loginUsuario;
    }

    public function setLoginUsuario($login) {
        $this->loginUsuario = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function setDataCadastro($data) {
        $this->dataCadastro = $data;
    }

    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID;", array(
            ":ID" => $id,
        ));

        if (count($results) > 0) {
            $row = $results[0];
            $this->setIdUsuario($row['id_usuario']);
            $this->setLoginUsuario($row['deslogin']);
            $this->setSenha($row['dessenha']);
            $this->setDataCadastro(new DateTime($row['dtcadastro']));
        }
    }

    public static function getList() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login) {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios where deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH' => "%" . $login . "%",
        ));
    }

    public function login($login, $senha) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :USER AND dessenha = :SENHA;", array(
            ":USER" => $login,
            ":SENHA" => $senha,
        ));

        if (count($results) > 0) {
            $row = $results[0];
            $this->setIdUsuario($row['id_usuario']);
            $this->setLoginUsuario($row['deslogin']);
            $this->setSenha($row['dessenha']);
            $this->setDataCadastro(new DateTime($row['dtcadastro']));
        } else {
            throw new Exception("Login e ou Senha Inválidos!", 1);
        }
    }

    public function __toString() {
        return json_encode(array(
            "ID" => $this->getIdUsuario(),
            "LOGIN" => $this->getLoginUsuario(),
            "SENHA" => $this->getSenha(),
            "DATA DE CADASTRO" => $this->getDataCadastro()->format("d/m/Y H:i:s"),
        ));
    }
}