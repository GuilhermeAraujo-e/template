<?php
class Usuario extends CRUD
{
    protected $table = "usuario";

    private $senha;
    private $email;
    private $funcao;
    private $nome;
    private $cpf;
    private $telefone;
    private $codigo;


    public function setsenha($senha)
    {
        $this->senha = $senha;
    }
    public function getsenha()
    {
        return $this->senha;
    }


    public function setemail($email)
    {
        $this->email = $email;
    }
    public function getemail()
    {
        return $this->email;
    }


    public function setfuncao($funcao)
    {
        $this->funcao = $funcao;
    }
    public function getfuncao()
    {
        return $this->funcao;
    }


    public function setnome($nome)
    {
        $this->nome = $nome;
    }
    public function getnome()
    {
        return $this->nome;
    }


    public function setcpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getcpf()
    {
        return $this->cpf;
    }


    public function settelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function gettelefone()
    {
        return $this->telefone;
    }

    public function setcodigo($codigo): void{
        $this->codigo = $codigo;
    }
     public function getcodigo(): mixed{
       return $this->codigo;
   }

    public function add()
    {
        $senhaComHash = password_hash($this->senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $this->table(senha, email, funcao, nome, cpf, telefone) VALUES(:senha, :email, :funcao, :nome, :cpf, :telefone)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":senha", $senhaComHash);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":funcao", $this->funcao);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":telefone", $this->telefone);

        return $stmt->execute();


    }
    public function update(string $campo, int $id)
    {
        $senhaComHash = password_hash($this->senha, PASSWORD_DEFAULT);
        $sql = "UPDATE $this->table 
        SET senha = :senha,  email = :email,  funcao = :funcao, nome = :nome,  cpf = :cpf,  telefone = :telefone, codigo = :codigo WHERE $campo = :codigo";
        $stmt = $this->db->prepare($sql);
         $stmt->bindParam(":senha", $senhaComHash, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":funcao", $this->funcao, PDO::PARAM_STR);
        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
        $stmt->bindParam(":codigo", $id, PDO::PARAM_STR);

        return $stmt->execute();


    }
    public function validarlogin($email){
$sql = "SELECT * FROM gerUsuario WHERE email = :email";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(':email', $email);
return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null;
}
}
