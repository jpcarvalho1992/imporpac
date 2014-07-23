<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    require_once(realpath(dirname( __FILE__ )) . '/..' . '/baseDados/db.php');

    $baseDados = new db();
    $baseDados->acederdb();
    $baseDados->definirTabela('clientes');
    $baseDados->enviarQuery("SET a=1");
    
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
            <th>Last Name</th> 
            <th>First Name</th> 
            <th>Email</th> 
            <th>Due</th> 
            <th>Web Site</th> 
        </tr> 
        </thead> 
        <tbody> 
        <tr> 
            <td>Smith</td> 
            <td>John</td> 
            <td>jsmith@gmail.com</td> 
            <td>$50.00</td> 
            <td>http://www.jsmith.com</td> 
        </tr> 
        <tr> 
            <td>Bach</td> 
            <td>Frank</td> 
            <td>fbach@yahoo.com</td> 
            <td>$50.00</td> 
            <td>http://www.frank.com</td> 
        </tr> 
        <tr> 
            <td>Doe</td> 
            <td>Jason</td> 
            <td>jdoe@hotmail.com</td> 
            <td>$100.00</td> 
            <td>http://www.jdoe.com</td> 
        </tr> 
        <tr> 
            <td>Conway</td> 
            <td>Tim</td> 
            <td>tconway@earthlink.net</td> 
            <td>$50.00</td> 
            <td>http://www.timconway.com</td> 
        </tr> 
        </tbody> 
        </table> 
    </body>
</html>