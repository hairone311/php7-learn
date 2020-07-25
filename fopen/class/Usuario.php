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
            $this->setData($results[0]);
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
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e ou Senha Inválidos!", 1);
        }
    }

    public function setData($data) {
        $this->setIdUsuario($data['id_usuario']);
        $this->setLoginUsuario($data['deslogin']);
        $this->setSenha($data['dessenha']);
        $this->setDataCadastro(new DateTime($data['dtcadastro']));
    }

    public function insert() {
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            "LOGIN" => $this->getLoginUsuario(),
            "SENHA" => $this->getSenha(),
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function update($login, $senha) {
        $this->setLoginUsuario($login);
        $this->setSenha($senha);

        $sql = new Sql();
        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE id_usuario = :ID", array(
            "LOGIN" => $this->getLoginUsuario(),
            "SENHA" => $this->getSenha(),
            "ID" => $this->getIdUsuario(),
        ));
    }

    public function delete() {
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuarios WHERE id_usuario = :ID", array(
            "ID" => $this->getIdUsuario(),
        ));

        $this->setIdUsuario(0);
        $this->setLoginUsuario("");
        $this->setSenha("");
    }

    public function __construct($login = "", $senha = "") {
        $this->setLoginUsuario($login);
        $this->setSenha($senha);
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