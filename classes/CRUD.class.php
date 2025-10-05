
<?php

// Classe abstrata CRUD para operações de banco de dados
abstract class CRUD {
    protected $table; // Variável que armazena o nome da tabela que será manipulada
    protected $db; // Conexão com o banco de dados

    // Construtor que inicializa a conexão com o banco de dados
    public function __construct() {
        $this->db = Database::getInstance()->getConnection(); // Obtém a instância única da conexão com o banco
    }

    // Métodos abstratos que devem ser implementados pelas classes filhas
    abstract public function add(); // Método abstrato para adicionar um registro
    abstract public function update(string $campo, int $id); // Método abstrato para atualizar um registro

    // Método para listar todos os registros da tabela
    public function all() {
        $sql = "SELECT * FROM $this->table"; // Query para selecionar todos os registros
        $stmt = $this->db->prepare($sql); // Prepara a consulta
        $stmt->execute(); // Executa a consulta
        return $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna os resultados como objetos
    }

    // Método para buscar um registro específico pelo campo e ID
    public function search(string $campo, int $id) {
        $sql = "SELECT * FROM $this->table WHERE $campo = :id"; // Query para selecionar um registro específico
        $stmt = $this->db->prepare($sql); // Prepara a consulta
        $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Vincula o ID à consulta
        $stmt->execute(); // Executa a consulta
        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null; // Retorna o registro ou null caso não encontre
    }

    // Método para excluir um registro pelo ID
    public function delete(string $campo, int $id) {
        $sql = "DELETE FROM $this->table WHERE $campo = :id"; // Query para excluir um registro específico
        $stmt = $this->db->prepare($sql); // Prepara a consulta
        $stmt->bindParam(":id", $id, PDO::PARAM_INT); // Vincula o ID à consulta
        try {
            return $stmt->execute(); // Tenta executar a exclusão e retorna true se bem-sucedido
        } catch (PDOException $e) {
            error_log('Erro ao excluir registro: ' . $e->getMessage()); // Registra erro no log caso a exclusão falhe
            return false; // Retorna falso em caso de erro
        }
    }
 public function sp_exibir(string $store_procedure){
        $sql = "call $store_procedure";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function iniciarTransacao(){
        $this->db->beginTransaction();
    }

    public function confirmarTransacao(){
        $this->db->commit();
    }

    public function cancelarTransacao(){
        $this->db->rollBack();
    }
}