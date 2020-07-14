<?php
class Usuario {
    private $idusuario;
    private $deslogin;
    private $senha;
    private $dtCadastro;

    //GETS

    public function getIdusuario(){
        return $this->idusuario;
    }
    public function getDeslogin(){
        return $this->deslogin;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getDtcastro(){
        return $this->dtCadastro;
    }


    //SETS

    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }
    public function setDeslogin($deslogin){
        $this->deslogin = $deslogin;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setDtcadastro($dtCadastro){
        $this->dtCadastro = $dtCadastro;
    }

    //METODOS

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setSenha($data['senha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function loadById($id){
        
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }

    }

    public static function getList(){
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin;", array(':SEARCH' => "%". $login ."%"));
    }


    public function login($login, $pass){
        
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and senha = :PASS", array(":LOGIN" => $login, ":PASS" => $pass));

        if (count($results) > 0) {
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou senha inválido(s).");
        }

    }

    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN" => $this->getDeslogin(),
             ":PASSWORD" => $this->getSenha()
        ));
        if (count($results) > 0) {
            $this->setData($results[0]);
        }

    }


    public function update($login, $pass){

        $this->setDeslogin($login);
        $this->setSenha($pass);

        $sql = new Sql();
        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, senha = :PASSWORD WHERE idusuario = :ID", array(
            ":LOGIN" => $this->getDeslogin(),
            ":PASSWORD" => $this->getSenha(),
            ":ID" => $this->getIdusuario()
        ));
    }

    public function deletar(){
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $this->getIdusuario()
        ));

        $this->setDeslogin("");
        $this->setSenha("");
        $this->setIdusuario(0);
        $this->setDtcadastro(new DateTime());
    }



    //Echo

    public function __toString()
    {
        return json_encode(array(
            "idusario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "senha"=>$this->getSenha(),
            "dtcadastro"=>$this->getDtcastro()->format("d/m/Y H:i:s")
        ));
    }
}

?>