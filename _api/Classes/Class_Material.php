<?php
namespace _api\Classes;
class Class_Material{
    private $material, $nome, $Tipo;

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
        
}

?>