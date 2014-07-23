<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    require_once(realpath(dirname( __FILE__ )) . '/..' . '/baseDados/BaseDados.php');

    $baseDados = new BaseDados();
    $baseDados->acederdb();
    $baseDados->definirTabela('clientes');
    
    // Obter nomes de colunas
    $baseDados->resultado = $baseDados->enviarQuery("SHOW COLUMNS FROM `$baseDados->tabela`");
    
    // Cabecalho da tabela
    $propriedadesColuna = array();
    
    // Propriedades de cada coluna
    while ($coluna = mysqli_fetch_array($baseDados->resultado)) {
        array_push($propriedadesColuna, $coluna[0]);
    }
    
    // Obter dados
    $baseDados->resultado = $baseDados->enviarQuery("SELECT * FROM `$baseDados->tabela`");
    
    // Id do cliente
    $id_cliente = $_POST['id_cliente'];
    
    // Todos os dados do cliente
    while ($linha = mysqli_fetch_array($baseDados->resultado)) {
        if($linha[0] == $id_cliente)
        {
            $dadosCliente = $linha;
        }
    }
    
    // Fechar base de dados
    $baseDados->fecharConexao(); 
?>
<html>
    <head>

    </head>
    <body>
        <form action="modificarCliente.php" method="post" id="modificarClienteForm">
            <?php
            // Criar formulario
            for ($coluna = 1; $coluna < count($propriedadesColuna); ++$coluna)
            {
                echo "<label>" . $propriedadesColuna[$coluna] . ":</label>";
                echo "</br>";
                echo "<input type=\"text\" value=\"" . $dadosCliente[$coluna] . "\">";
                echo "</br>";
            }
            echo "<button type=\"submit\" form=\"modificarClienteForm\" name=\"id_cliente\" value=\"". $dadosCliente[0] ."\">Modificar</button>";
            ?>
        </form>
    </body>
</html>
