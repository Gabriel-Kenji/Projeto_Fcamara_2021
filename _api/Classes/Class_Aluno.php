<?php
namespace _api\Classes;
class Class_Aluno{
    private $ra, $nome, $email, $senha, $estado, $cidade, $bairro, $telefone, $inep;

    public function getRa(){
        return $this->ra;
    }

    public function setRa($ra){
        $this->ra = $ra;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }  

    public function getInep(){
        return $this->inep;
    }

    public function setInep($inep){
        $this->inep = $inep;
    }
}

?>