<?php

class Cliente {
    
    // Dados dos clientes
    public $id;
    public $nome;
    public $morada;
    public $morada_sec;
    public $freguesia;
    public $concelho;
    public $distrito;
    public $pais;
    public $cod_postal;
    public $telefone;
    public $telemovel;
    public $fax;
    public $nif;
    
    // Material comprado, respectivo preço
    public $material = array(array());
    
    // Constructor
    public function __construct($nome, $nif){
        $this -> nome = $nome;
        $this -> nif = $nif;
    }
    
    // Adicionar 
    public function addMaterial($nome, $preço){
        array_push($this->material, array($nome => $preço));
    }
    
    // Mostrar
    public function mostrarMaterial(){
        print_r($this->material);
    }
}

$cliente1 = new Cliente("Jean-Pierre", "123456789");
$cliente1->addMaterial("sasdasda", 50);
echo $cliente1->mostrarMaterial();