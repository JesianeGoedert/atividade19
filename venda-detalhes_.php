<!DOCTYPE html>
<?php 
     include_once "conf/default.inc.php";
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
        
        while ($linha = $consulta->fetch(PDO::FETCH_BOTH)):
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
            echo "</br>"; 

            $data = date('d/m/Y');
            $dataContratacao = $linha['dataContratacao'];
         
            $partes = explode('-', $dataContratacao);
            $ano = $partes [0]; 
            $mes = $partes [1];
            $dia = $partes [2];
            $ano2 = $ano;
            $ano1 = date('Y');
            $intervalo = ($ano1-$ano2);

        //Bônus por tempo de empresa
        $bonus= $intervalo * 50;
        echo "Bônus por tempo de empresa: R$".$bonus;  
        endwhile;  
        
        $sql1 = "SELECT * FROM venda WHERE id = $id";
    
        $pdo1 = Conexao::getInstance(); 
        $consulta1 = $pdo1->query($sql1); ?>
        <table border="1">
            <tbody>
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Janeiro</td>
                    <td>Fevereiro</td>
                    <td>Março</td>
                    <td>Abril</td>
                    <td>Maio</td>
                    <td>Junho</td>
                    <td>Julho</td>
                    <td>Agosto</td>
                    <td>Setembro</td>
                    <td>Outubro</td>
                    <td>Novembro</td>
                    <td>Dezembro</td>
                    <td>Fixo</td>
                    <td>Tempo de Empresa</td>
                </tr>
                
                    
    <?php
            while ($linha = $consulta1->fetch(PDO::FETCH_BOTH)){
            ?>
            <tr>
            
            <td><?= $linha['id']?></td>
            <td><?= $linha['nome']?></td>

            <?php if($linha['janeiro']<5000){?>
                <td style="background: red;"><?= $linha['janeiro']?></td>
            <?php }else if($linha['janeiro']>10000){?>
                <td style="background: blue;"><?= $linha['janeiro']?></td>
            <?php } else {?>
                <td><?= $linha['janeiro']?></td>
            <?php } ?>

            <?php if($linha['fevereiro']<5000){?>
                <td style="background: red;"><?= $linha['fevereiro']?></td>
            <?php }else if($linha['fevereiro']>10000){?>
                <td style="background: blue;"><?= $linha['fevereiro']?></td>
            <?php } else {?>
                <td><?= $linha['fevereiro']?></td>
            <?php } ?>

            <?php if($linha['marco']<5000){?>
                <td style="background: red;"><?= $linha['marco']?></td>
            <?php }else if($linha['marco']>10000){?>
                <td style="background: blue;"><?= $linha['marco']?></td>
            <?php }else {?>
                <td><?= $linha['marco']?></td>
            <?php } ?>

            <?php if($linha['abril']<5000){?>
                <td style="background: red;"><?= $linha['abril']?></td>
            <?php }else if($linha['abril']>10000){?>
                <td style="background: blue;"><?= $linha['abril']?></td>
            <?php }else {?>
                <td><?= $linha['abril']?></td>
            <?php } ?>

            <?php if($linha['maio']<5000){?>
                <td style="background: red;"><?= $linha['maio']?></td>
            <?php }else if($linha['maio']>10000){?>
                <td style="background: blue;"><?= $linha['maio']?></td>
            <?php }else {?>
                <td><?= $linha['maio']?></td>
            <?php } ?>

            <?php if($linha['junho']<5000){?>
                <td style="background: red;"><?= $linha['junho']?></td>
            <?php }else if($linha['junho']>10000){?>
                <td style="background: blue;"><?= $linha['junho']?></td>
            <?php }else {?>
                <td><?= $linha['junho']?></td>
            <?php } ?>

            <?php if($linha['julho']<5000){?>
                <td style="background: red;"><?= $linha['julho']?></td>
            <?php }else if($linha['julho']>10000){?>
                <td style="background: blue;"><?= $linha['julho']?></td>
            <?php } else {?>
                <td><?= $linha['julho']?></td>
            <?php } ?>

            <?php if($linha['agosto']<5000){?>
                <td style="background: red;"><?= $linha['agosto']?></td>
            <?php }else if($linha['agosto']>10000){?>
                <td style="background: blue;"><?= $linha['agosto']?></td>
            <?php }else {?>
                <td><?= $linha['agosto']?></td>
            <?php } ?>

            <?php if($linha['setembro']<5000){?>
                <td style="background: red;"><?= $linha['setembro']?></td>
            <?php }else if($linha['setembro']>10000){?>
                <td style="background: blue;"><?= $linha['setembro']?></td>
            <?php }else {?>
                <td><?= $linha['setembro']?></td>
            <?php } ?>

            <?php if($linha['outubro']<5000){?>
                <td style="background: red;"><?= $linha['outubro']?></td>
            <?php }else if($linha['outubro']>10000){?>
                <td style="background: blue;"><?= $linha['outubro']?></td>
            <?php }else {?>
                <td><?= $linha['outubro']?></td>
            <?php } ?>

            <?php if($linha['novembro']<5000){?>
                <td style="background: red;"><?= $linha['novembro']?></td>
            <?php }else if($linha['novembro']>10000){?>
                <td style="background: blue;"><?= $linha['novembro']?></td>
            <?php }else {?>
                <td><?= $linha['novembro']?></td>
            <?php } ?>

            <?php if($linha['dezembro']<5000){?>
                <td style="background: red;"><?= $linha['dezembro']?></td>
            <?php }else if($linha['dezembro']>10000){?>
                <td style="background: blue;"><?= $linha['dezembro']?></td>
            <?php }else {?>
                <td><?= $linha['dezembro']?></td>
            <?php } ?>

           
            <td><?= $linha['fixo']?></td>
            
            <?php

        //Tempo de empresa
            $data = date('d/m/Y');
            $dataContratacao = $linha['dataContratacao'];
        
            $partes = explode('-', $dataContratacao);
            $ano = $partes [0]; 
            $mes = $partes [1];
            $dia = $partes [2];
            $ano2 = $ano;
            $ano1 = date('Y');
            $intervalo = ($ano1-$ano2);
            
            if ($intervalo > 10) {
                    echo "<td style='background: blue; font-weight: bold;'>$intervalo anos</td>";
            } else  {
                    echo "<td >$intervalo anos</td>";
            }
            ?> 
            </tr> 
            <?php } ?>      
                
            </tbody>
        </table>
    </div>
</body>
</html>