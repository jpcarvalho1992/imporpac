<?php

class db {
    public $servidor;
    public $utilizador;
    public $password;
    public $nomedb;
    public $tabela;
    public $conexao;
    
    // Constructor da base de dados
    public function __contruct(){
        $this->servidor = DB_Servidor;
        $this->utilizador = DB_Utilizador;
        $this->password = DB_Password;
        $this->nomedb = DB_Nome;
    }
    
    // Aceder a base de dados
    public function acederdb(){
        $this->conexao = mysql_connect($this->servidor, $this->utilizador, $this->password);
        mysql_select_db($this->nomedb, $this->conexao);
    }
    
    // 
    public function definirTabela($tabela){
        $this->tabela = $tabela;
    }
    
    
}

