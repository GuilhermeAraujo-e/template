<?php

class Cliente extends CRUD{
    protected $table = "cliente";
    private $telefone;
    private $nome_cliente;
    private $sobrenome_cliente;
    private $email;
    private $senha;

    private $id_cliente;
    
    public function setTelefone ($telefone){
        $this->telefone = $telefone;
    }
    public function setNome_cliente ($nome_cliente){
        $this->nome_cliente = $nome_cliente;
    }
    public function setSobrenome_cliente ($sobrenome_cliente){
        $this->sobrenome_cliente = $sobrenome_cliente;
    }
    public function setEmail ($email){
        $this->email = $email;
    }
    public function setSenha ($senha){
        $this->senha = $senha;
    }
public function setId_cliente ($id_cliente){
        $this->id_cliente = $id_cliente;
    }



    public function getTelefone (){
        return $this->telefone;
    }
    public function getNome_cliente (){
        return $this->nome_cliente;
    }
    public function getSobrenome_cliente (){
        return $this->sobrenome_cliente;
    }
    public function getEmail (){
        return $this->email;
    }
    public function getSenha (){
        return $this->senha;
    }
    public function getId_cliente (){
        return $this->id_cliente;
    }


    
    public function add(){
        $sql = "INSERT INTO $this->table (telefone, nome_cliente, sobrenome_cliente, email, senha) VALUES (:telefone, :nome_cliente, :sobrenome_cliente, :email, :senha)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":nome_cliente", $this->nome_cliente);
        $stmt->bindParam(":sobrenome_cliente", $this->sobrenome_cliente);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":senha", $this->senha);
        return $stmt->execute();
        }
        public function update(string $campo, int $valor){
        $sql = "UPDATE $this->table SET telefone = :telefone, nome_cliente = :nome_cliente, sobrenome_cliente = :sobrenome_cliente, email = :email, senha = :senha, id_cliente = :id_cliente WHERE $campo = :id_cliente";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
        $stmt->bindParam(":nome_cliente", $this->nome_cliente, PDO::PARAM_STR);
        $stmt->bindParam(":sobrenome_cliente", $this->sobrenome_cliente, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":senha", $this->senha, PDO::PARAM_STR);
        $stmt->bindParam(":id_cliente",$this->id_cliente, PDO::PARAM_STR);
        return $stmt->execute();
}
}

