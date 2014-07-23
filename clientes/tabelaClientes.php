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
    
    // Cabecalho da tabela
    $dados = array();
    
    // Propriedades de cada coluna
    while ($coluna = mysqli_fetch_array($baseDados->resultado)) {
        array_push($propriedadesColuna, $coluna[0]);
    }
    
    // Obter dados
    $baseDados->resultado = $baseDados->enviarQuery("SELECT * FROM `$baseDados->tabela`");
    
    // Todos os dados
    while ($linha = mysqli_fetch_array($baseDados->resultado)) {
        array_push($dados, $linha);
    }
    
    // Fechar base de dados
    $baseDados->fecharConexao();   
?>

<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="../tablesorter/jquery-latest.js"></script> 
        <script type="text/javascript" src="../tablesorter/jquery.tablesorter.js"></script> 
        <link rel="stylesheet" href="../tablesorter/themes/blue/style.css" type="text/css" />
        <script type="text/javascript">
            $(document).ready(function() { 
                    $("#myTable").tablesorter(); 
                } ); 
        </script>
    </head>
    <body>
        <table id="myTable" class="tablesorter"> 
        <thead> 
        <tr> 
            <?php foreach ($propriedadesColuna as $item) { 
                echo "<th>" . $item . "</th>";   
            }
            echo "<th>" . "Aceder" . "</th>";
            ?>
        </tr> 
        </thead> 
        <tbody> 
        <?php 
        
        // Organizar codigo
        foreach ($dados as $linha) { 
            echo "<tr>";   
                if (count($linha) >= 1){
                    for ($coluna = 0; $coluna < count($propriedadesColuna); ++$coluna)
                    {
                        echo "<td>" . $linha[$coluna] . "</td>";
                    }
                    
                    //Para aceder a dados de cada cliente
                    echo "<td>";
                    echo "<form action=\"paginaCliente.php\" method=\"post\" id=\"form1\">";
                    echo "<button type=\"submit\" form=\"form1\" value=\"Submit\">Aceder</button>";
                    echo "</form>";
                    echo "</td>";
                }
            echo "</tr>";
        }?>
        </tbody> 
        </table> 
    </body>
</html>