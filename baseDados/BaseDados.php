<?php
error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    require_once(realpath(dirname( __FILE__ )) . '/..' . '/configuracoes/conf.php');
    
class BaseDados {
    public $servidor;
    public $utilizador;
    public $password;
    public $nomedb;
    public $tabela;
    public $conexao;
    public $query;
    public $resultado;
    
    // Constructor da base de dados
    public function __construct(){
        $this->servidor = DB_Servidor;
        $this->utilizador = DB_Utilizador;
        $this->password = DB_Password;
        $this->nomedb = DB_Nome;
    }
    
    public function __toString() {
        return $this->servidor;
    }
    
    // Aceder a base de dados
    public function acederdb(){
        $this->conexao = new mysqli($this->servidor, $this->utilizador, $this->password, $this->nomedb);
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
        else {
            return mysqli_query($this->conexao, $this->query);
        }
    }
    
    // Fechar conexao
    public function fecharConexao(){
        mysqli_close($this->conexao);
    }
}

// Mostrar todas as variaveis definidas nesta classe
// var_dump( $bd );

