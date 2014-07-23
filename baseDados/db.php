<?php
error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    require_once(realpath(dirname( __FILE__ )) . '/..' . '/configuracoes/conf.php');

class db {
    public $servidor;
    public $utilizador;
    public $password;
    public $nomedb;
    public $tabela;
    public $conexao;
    public $query;
    
    // Constructor da base de dados
    public function __contruct(){
        $this->servidor = DB_Servidor;
        $this->utilizador = DB_Utilizador;
        $this->password = DB_Password;
        $this->nomedb = DB_Nome;
    }
    
    // Aceder a base de dados
    public function acederdb(){
        $this->conexao = mysqli_connect($this->servidor, $this->utilizador, $this->password, $this->nomedb);
    }
    
    // Definir tabela
    public function definirTabela($tabela){
        $this->tabela = $tabela;
    }
    
    //Enviar query
    public function enviarQuery($query){
        $this->query = $query;
        if (!mysqli_query($this->conexao, $this->query)) {
            printf("Errormessage: %s\n", mysqli_error($this->conexao));
        }
    }
    
    // Fechar conexao
    public function fecharConexao(){
        mysqli_close($this->conexao);
    }
}

