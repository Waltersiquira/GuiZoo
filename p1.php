<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiZoo</title>
</head>
<body style="text-align: center;">
    <?php require_once 'includes/bd_zoo.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $bz->query("select * from zoo where id = '$id'");
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<h1>$reg->nome</h1> <img src='$reg->imagem' width='300'> <br> classe: $reg->Classe <br> tipo alimentar: $reg->tipo <hr> $reg->descrição";
            }
        }
    }
    ?>
</body>
</html>