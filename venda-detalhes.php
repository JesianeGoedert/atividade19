<!DOCTYPE html>
<?php 
     include_once "conf/default.inc.php";
     include_once "fdata.php";
     require_once "conf/Conexao.php";
     $title = "Vendas";
     $id = isset($_GET['id']) ? $_GET['id'] : "1";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>
<?php
   
    $sql = "SELECT * FROM venda WHERE id = $id";
   
    $pdo = Conexao::getInstance(); 
    $consulta = $pdo->query($sql);
    while ($linha = $consulta->fetch(PDO::FETCH_BOTH)){
        $totalvendas= ($linha['janeiro']+$linha['fevereiro']+$linha['marco']+$linha['abril']+$linha['maio']+$linha['junho']+$linha['julho']+$linha['agosto']+$linha['setembro']+$linha['outubro']+$linha['novembro']+$linha['dezembro']);
        echo "Total de vendas no ano: R$".$totalvendas."</br> </br>";
        
    $comissao = (($linha['janeiro']/100)*3); 
    echo "Comissão: </br>"."Janeiro: R$".$comissao;
    $comissao = (($linha['fevereiro']/100)*3); 
    echo "</br>"."Fevereiro: R$".$comissao;
    $comissao = (($linha['marco']/100)*3); 
    echo "</br>"."Março: R$".$comissao;
    $comissao = (($linha['abril']/100)*3); 
    echo "</br>"."Abril: R$".$comissao;
    $comissao = (($linha['maio']/100)*3); 
    echo "</br>"."Maio: R$".$comissao;
    $comissao = (($linha['junho']/100)*3); 
    echo "</br>"."Junho: R$".$comissao;
    $comissao = (($linha['julho']/100)*3); 
    echo "</br>"."Julho: R$".$comissao;
    $comissao = (($linha['agosto']/100)*3); 
    echo "</br>"."Agosto: R$".$comissao;
    $comissao = (($linha['setembro']/100)*3); 
    echo "</br>"."Setembro: R$".$comissao;
    $comissao = (($linha['outubro']/100)*3); 
    echo "</br>"."Outubro: R$".$comissao;
    $comissao = (($linha['novembro']/100)*3); 
    echo "</br>"."Novembro: R$".$comissao;
    $comissao = (($linha['dezembro']/100)*3); 
    echo "</br>"."Dezembro: R$".$comissao."</br>";

    //$dataatual= date('d/m/y');
    //$contratacao = $linha['dataContratacao'];
    //echo .dataFormat($contratacao);
    
    echo dataFormat($linha['dataContratacao']). "</br>";
    echo date('d/m/y'). "</br>";
    $ano= $linha['dataContratacao'];
    
    
$ano = new DateTime(['dataContratacao']);
$firstDate  = new DateTime(['dataContratacao']);
$secondDate = new DateTime("2020-03-04");
$intvl = $firstDate->diff($secondDate);

echo "</br>".$intvl->y . " year, " 
    //echo $dataatual. "</br>";

    //echo $contratacao. "</br>";

    
      //echo $dataatual= ['y'];
    //$trabalhando = ($dataatual- $contratacao);
    //echo $trabalhando;
    

    //$dataatual = explod('/', $dataatual);
    //$contratacao = explod('/', $contratacao);
    //$d1 = "$dataatual['0']";
    //$d1 = "$contratacao['0']";
    //$anostrabalhando = ($d1-$d2)
;    
    
    }

        
?>
</body>
</html>