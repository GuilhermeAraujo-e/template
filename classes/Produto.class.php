<?php

class Produto extends CRUD{
    protected $table = "produto";
    private $nome_produto;
    private $id_produto;
    private $descricao_produto;
    private $unidade_Medida;
    private $preco;

    public function setnome_produto($nome_produto): void{
        $this->nome_produto = $nome_produto;
    }
    public function setid_produto($id_produto): void{
        $this->id_produto = $id_produto;
    }
    public function setdescricao_produto($descricao_produto): void{
        $this->descricao_produto = $descricao_produto;
    }
    public function setunidade_Medida($unidade_Medida): void{
        $this->unidade_Medida = $unidade_Medida;
    }
    public function setpreco($preco): void{
        $this->preco = $preco;
    }
    

    public function getnome_produto(): mixed{
        return $this->nome_produto;
    }
    public function getid_produto(): mixed{
       return $this->id_produto;
   }
    public function getdescricao_produto(): mixed{
        return $this->descricao_produto;
    }
    public function getunidade_Medida(): mixed{
        return $this->unidade_Medida;
    }
    public function getpreco(): mixed{
        return $this->preco;
    }
    

    public function add(){
        $sql = "INSERT INTO $this->table (nome_produto, descricao_produto, unidade_Medida, preco) VALUES (:nome_produto, :descricao_produto, :unidade_Medida, :preco)";
        $stmt= $this->db->prepare($sql);
        $stmt->bindParam(":nome_produto", $this->nome_produto);
        $stmt->bindParam(":descricao_produto", $this->descricao_produto);
        $stmt->bindParam(":unidade_Medida", $this->unidade_Medida);
        $stmt->bindParam(":preco", $this->preco);
        return $stmt->execute();
    }
    public function update(string $campo, int $id_produto){
        $sql = "UPDATE $this->table SET nome_produto=:nome_produto, descricao_produto=:descricao_produto, unidade_Medida=:unidade_Medida, preco=:preco, id_produto=:id_produto WHERE $campo = :id_produto";
        $stmt= $this->db->prepare($sql);
        $stmt->bindParam(":nome_produto", $this->nome_produto, PDO::PARAM_STR);
        $stmt->bindParam(":id_produto", $id_produto, PDO::PARAM_STR);
        $stmt->bindParam(":descricao_produto", $this->descricao_produto, PDO::PARAM_STR);
        $stmt->bindParam(":unidade_Medida", $this->unidade_Medida, PDO::PARAM_STR);
        $stmt->bindParam(":preco", $this->preco, PDO::PARAM_STR);
        return $stmt->execute();
    }
    }