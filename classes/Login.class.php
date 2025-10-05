<?php


class Login extends CRUD {
protected $table = "usuario";
private $email;
private $senha;



public function getEmail()
{
return $this->email;
}

public function setEmail($email)
{
$this->email = $email;

}


public function getSenha()
{
return $this->senha;
}

public function setSenha($senha)
{
$this->senha = $senha;

}





public function add()
{
    
$sql = "INSERT INTO $this->table (email, senha)
VALUES (:email, :senha)";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":email", $this->email, );

$stmt->bindParam(":senha", $this->senha, );


}

public function update(string $campo, int $id)
{
$sql = "UPDATE $this->table SET email= :email, senha= :senha WHERE $campo= :id";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
$stmt->bindParam(":senha", $this->senha, PDO::PARAM_STR);

return $stmt->execute();
}

}