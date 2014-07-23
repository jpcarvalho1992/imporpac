<?php
ini_set('error_reporting', E_ALL);
require_once(dirname( __FILE__ ) . '/configuracoes/conf.php');
require_once(dirname( __FILE__ ) . '/baseDados/db.php');

class material {
    
    // Dados do material
    public $nome;
    public $preço;
    
    // Constructor
    public function __construct($nome, $preco){
        $this -> nome = $nome;
        $this -> preco = $preco;
    }
}
