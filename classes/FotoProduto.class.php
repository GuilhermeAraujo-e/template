<?php
class FotoProduto extends CRUD {
    protected $table = 'foto_produto';
    private $idFoto;
    private $produto;       // objeto produto ou apenas o ID
    private $nome;
    private $legenda;
    private $alternativo;
    private $dataUpload;

    // Getters e Setters
    public function getIdFoto() {
        return $this->idFoto;
    }

    public function setIdFoto($idFoto) {
        $this->idFoto = $idFoto;
    }

    public function getproduto() {
        return $this->produto;
    }

    public function setproduto($produto) {
        $this->produto = $produto; 
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLegenda() {
        return $this->legenda;
    }

    public function setLegenda($legenda) {
        $this->legenda = $legenda;
    }

    public function getAlternativo() {
        return $this->alternativo;
    }

    public function setAlternativo($alternativo) {
        $this->alternativo = $alternativo;
    }

    public function getDataUpload() {
        return $this->dataUpload;
    }

    public function setDataUpload($dataUpload) {
        $this->dataUpload = $dataUpload;
    }

    public function add() {
            $sql = "INSERT INTO foto_produto (fk_produto, nome, legenda, alternativo, data_upload) 
                    VALUES (:produto, :nome, :legenda, :alternativo, :dataUpload)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(":produto", $this->produto);
            $stmt->bindValue(":nome", $this->nome);
            $stmt->bindValue(":legenda", $this->legenda);
            $stmt->bindValue(":alternativo", $this->alternativo);
            $stmt->bindValue(":dataUpload", $this->dataUpload);
            return $stmt->execute();
        
        }
    public function update(string $campo, int $id){
        $sql = "UPDATE foto_produto 
                    SET fk_produto = :produto, nome = :nome, legenda = :legenda, alternativo = :alternativo 
                    WHERE id_foto = :idFoto";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(":produto", $this->produto);
            $stmt->bindValue(":nome", $this->nome);
            $stmt->bindValue(":legenda", $this->legenda);
            $stmt->bindValue(":alternativo", $this->alternativo);
            $stmt->bindValue(":idFoto", $id);
            return $stmt->execute();
    }

    public function fotoproduto(int $idproduto) {
        $sql = "SELECT * FROM $this->table where fk_produto = :fk_produto";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':fk_produto',$id_produto);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}