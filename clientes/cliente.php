<?php
ini_set('error_reporting', E_ALL);
require_once(dirname( __FILE__ ) . '/configuracoes/conf.php');
require_once(dirname( __FILE__ ) . '/baseDados/db.php');
require_once(dirname( __FILE__ ) . '/material/material.php');

class cliente {
    
    // Dados dos clientes
    public $id;
    public $nome;
    public $morada = NULL;
    public $morada_sec = NULL;
    public $freguesia = NULL;
    public $concelho = NULL;
    public $distrito = NULL; 
    public $pais = NULL;
    public $cod_postal = NULL;
    public $telefone = NULL;
    public $telemovel = NULL;
    public $fax = NULL;
    public $nif;

    // Constructor
    public function __construct($nome, $nif){
        $this -> nome = $nome;
        $this -> nif = $nif;
    }
    
    // Criar na base de dados
    public function addBaseDadosCliente(){
        $baseDados = new db();
        $baseDados->acederdb();
        $baseDados->definirTabela('clientes');
    }
}