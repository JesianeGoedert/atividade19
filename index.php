<!DOCTYPE html>
<?php 
     include_once "conf/default.inc.php";
     require_once "conf/Conexao.php";
     $title = "Vendas";
     $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "1";
     $procurar = isset($_POST['procurar']) ? $_POST['procurar'] : "";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>

<form method="post">
    <input type="radio" name="tipo" id="tipo" value="1" <?php if ($tipo == 1) { echo "checked"; }?>>Nome<br>  
    <input type="radio" name="tipo" id="tipo" value="2" <?php if ($tipo == 2) { echo "checked"; }?>>Fixo<br>
    <input type="text" name="procurar" id="procurar" value="<?php echo $procurar; ?>">
    <input type="submit" value="Consultar">
</form>
<br>
<?php
    $sql = "";
    if ($tipo == 1){
        $sql = "SELECT * FROM venda WHERE nome LIKE '$procurar%' ORDER BY nome";
    }else if($tipo ==2){    
        $sql = "SELECT * FROM venda WHERE fixo <= '$procurar%' ORDER BY fixo";
    }
    
    $pdo = Conexao::getInstance(); 
    $consulta = $pdo->query($sql);
    while ($linha = $consulta->fetch(PDO::FETCH_BOTH)){
        echo "Nome: {$linha['nome']} - Fixo: {$linha['fixo']} - <a href='venda-detalhes_.php?id={$linha['id']}'>Detalhes</a><br/>";
    }

    
?>
</body>
</html>