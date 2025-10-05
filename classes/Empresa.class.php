<?php
class Empresa extends CRUD{

    protected $table = "empresa";
    private $CNPJ;
    private $nome_empresa;
    private $endereco;
    private $numero_empresa;
    private $cidade;
    private $CEP;
    private $Estado;
    private $email;
    private $telefone;
    private $responsavel_empresa;
    private $atividade_economica;
    private $historia;
    private $apresentacao;
    private $id_empresa;
    private $instagram;
    private $whatsapp;
    private $facebook;
    private $maps;

    private $logo;
        public function setCNPJ($CNPJ){
        $this->CNPJ=$CNPJ;
        }
        public function getCNPJ($CNPJ){
            return $this->CNPJ;
       
        }
        public function setnome_empresa($nome_empresa){
        $this->nome_empresa=$nome_empresa;
        }
        public function getnome_empresa($nome_empresa){
          return $this->nome_empresa;
        }
    
         public function setendereco($endereco){
        $this->endereco=$endereco;
         }
        public function getendereco($endereco){
         return $this->endereco;
        }
    
        public function setnumero_empresa($numero_empresa){
        $this->numero_empresa=$numero_empresa;
        }
        public function getnumero_empresa($numero_empresa){
         return $this->numero_empresa;
        }
    
        public function setcidade($cidade){
        $this->cidade=$cidade;
        }
        public function getcidade($cidade){
         return $this->cidade;
        }
    

        public function setCEP($CEP){
        $this->CEP=$CEP;
        }
        public function getCEP($CEP){
         return $this->CEP;
        }
    

        public function setEstado($Estado){
        $this->Estado=$Estado;
        }
        public function getEstado($Estado){
         return $this->Estado;
        }
    

        public function setemail($email){
        $this->email=$email;
        }
        public function getemail($email){
         return $this->email;
        }
    

        public function settelefone($telefone){
        $this->telefone=$telefone;
        }
        public function gettelefone($telefone){
         return $this->telefone;
        }
    

        public function setresponsavel_empresa($responsavel_empresa){
        $this->responsavel_empresa=$responsavel_empresa;
        }
        public function getresponsavel_empresa($responsavel_empresa){
         return $this->responsavel_empresa;
        }
    

        public function setatividade_economica($atividade_economica){
        $this->atividade_economica=$atividade_economica;
        }
        public function getatividade_economica($atividade_economica){
         return $this->atividade_economica;
        }
    

        public function sethistoria($historia){
        $this->historia=$historia;
        }
        public function gethistoria($historia){
         return $this->historia;
        }
    

        public function setapresentacao($apresentacao){
        $this->apresentacao=$apresentacao;
        }
        public function getapresentacao($apresentacao){
         return $this->apresentacao;
        }
        
        public function setid_empresa($id_empresa){
        $this->id_empresa=$id_empresa;
        }
        public function getid($id_empresa){
            return $this->id_empresa;
       
        }
        public function setinstagram($instagram){
        $this->instagram=$instagram;
        }
        public function getinstagram($instagram){
            return $this->instagram;
        }
        public function setwhatsapp($whatsapp){
        $this->whatsapp=$whatsapp;
        }
        public function getwhatsapp($whatsapp){
            return $this->whatsapp;
        }
        public function setfacebook($facebook){
        $this->facebook=$facebook;
        }
        public function getfacebook($facebook){
            return $this->facebook;
        }
        public function setmaps($facebook){
        $this->facebook=$facebook;
        }
        public function getmaps($maps){
            return $this->maps;
        }
        public function setlogo($logo){
        $this->logo=$logo;
        }
        public function getlogo($logo){
            return $this->logo;
        }
    
     public function add() {
        $sql = "INSERT INTO $this->table(CNPJ, nome_empresa, numero_empresa, cidade, CEP, Estado, email, telefone, responsavel_empresa, atividade_economica, historia, apresentacao, endereco, instagram, whatsapp, facebook, maps, logo) VALUES(:CNPJ, :nome_empresa, :numero_empresa, :cidade, :CEP, :Estado, :email, :telefone, :responsavel_empresa, :atividade_economica, :historia, :apresentacao, :endereco, :instagram, :whatsapp, :facebook, :maps, :logo)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":CNPJ", $this->CNPJ);
        $stmt->bindParam(":nome_empresa", $this->nome_empresa);
        $stmt->bindParam(":numero_empresa", $this->numero_empresa);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":CEP", $this->CEP);
        $stmt->bindParam(":Estado", $this->Estado);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":responsavel_empresa", $this->responsavel_empresa);
        $stmt->bindParam(":atividade_economica", $this->atividade_economica);
        $stmt->bindParam(":historia", $this->historia);
        $stmt->bindParam(":apresentacao", $this->apresentacao);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":instagram", $this->instagram);
        $stmt->bindParam(":whatsapp", $this->whatsapp);
        $stmt->bindParam(":facebook", $this->facebook);
        $stmt->bindParam(":maps", $this->maps);
        $stmt->bindParam(":logo", $this->logo);
    return $stmt->execute();
         
}
public function update(String $campo, int $id_empresa) {

    $sql = "UPDATE $this->table 
            SET CNPJ = :CNPJ, nome_empresa = :nome_empresa, numero_empresa = :numero_empresa, cidade = :cidade, CEP = :CEP, Estado = :Estado, email = :email, telefone = :telefone, responsavel_empresa = :responsavel_empresa, atividade_economica = :atividade_economica, historia = :historia, apresentacao = :apresentacao, endereco = :endereco, id_empresa=:id_empresa, instagram = :instagram, whatsapp = :whatsapp, facebook = :facebook, maps = :maps, logo = :logo WHERE $campo = :id_empresa";
    

    $stmt = $this->db->prepare($sql);
    

    $stmt->bindParam(":CNPJ", $this->CNPJ, PDO::PARAM_STR);
    $stmt->bindParam(":nome_empresa", $this->nome_empresa, PDO::PARAM_STR);
    $stmt->bindParam(":numero_empresa", $this->numero_empresa, PDO::PARAM_INT);
    $stmt->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);  
    $stmt->bindParam(":CEP", $this->CEP, PDO::PARAM_STR);
    $stmt->bindParam(":Estado", $this->Estado, PDO::PARAM_STR);
    $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
    $stmt->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
    $stmt->bindParam(":responsavel_empresa", $this->responsavel_empresa, PDO::PARAM_STR);
    $stmt->bindParam(":atividade_economica", $this->atividade_economica, PDO::PARAM_STR);
    $stmt->bindParam(":historia", $this->historia, PDO::PARAM_STR);
    $stmt->bindParam(":apresentacao", $this->apresentacao, PDO::PARAM_STR);
    $stmt->bindParam(":endereco", $this->endereco, PDO::PARAM_STR);
    $stmt->bindParam(":valor", $valor, PDO::PARAM_STR); 
    $stmt->bindParam(":id_empresa", $this->id_empresa, PDO::PARAM_STR);
    $stmt->bindParam(":instagram", $this->instagram, PDO::PARAM_STR);
    $stmt->bindParam(":whatsapp", $this->whatsapp, PDO::PARAM_STR);
    $stmt->bindParam(":facebook", $this->facebook, PDO::PARAM_STR);
    $stmt->bindParam(":maps", $this->maps, PDO::PARAM_STR);
    $stmt->bindParam(":logo", $this->logo, PDO::PARAM_STR);

    return $stmt->execute();
}}