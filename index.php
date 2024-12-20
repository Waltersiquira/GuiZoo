<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiZoo</title>
</head>
<body>
    <?php require_once 'includes/bd_zoo.php' ?>
    <h1 style="color: green;">GuiZoo</h1>
    <hr>
    <a href="index.php?m=tudo" style="text-decoration: none;">mostrar tudo</a> <br>
    <span>mostrar todos da classe: <a href="index.php?m=Mamífero" style="text-decoration: none;">Mamíferos</a> | <a href="index.php?m=Reptil" style="text-decoration: none;">Répteis</a> | <a href="index.php?m=Ave" style="text-decoration: none;">Aves</a>  | <a href="index.php?m=Peixe" style="text-decoration: none;">Peixes</a></span> <br>
    <span>mostrar todos os bichos: <a href="index.php?m=Carnívoro" style="text-decoration: none;">Carnívoros</a> | <a href="index.php?m=Herbívoro" style="text-decoration: none;">Herbívoros</a> | <a href="index.php?m=Onívoro" style="text-decoration: none;">Onívoros</a></span>
    <hr>
    <table>
        <?php 
        $mostrar = $_GET['m'] ?? 'tudo';
        switch($mostrar){
            case 'tudo':
                $busca = $bz->query('select * from zoo');
                break;
            case 'Mamífero':
                $busca = $bz->query("select * from zoo where Classe = 'Mamífero'");
                break;
            case 'Reptil':
                $busca = $bz->query("select * from zoo where Classe = 'Reptil'");
                break;
            case 'Ave':
                $busca = $bz->query("select * from zoo where Classe = 'Ave'");
                break;
            case 'Peixe':
                $busca = $bz->query("select * from zoo where Classe = 'Peixe'");
                break;
            case 'Carnívoro':
                $busca = $bz->query("select * from zoo where tipo = 'Carnívoro'");
                break;
            case 'Herbívoro':
                $busca = $bz->query("select * from zoo where tipo = 'Herbívoro'");
                break;
            case 'Onívoro':
                $busca = $bz->query("select * from zoo where tipo = 'Onívoro'");
        }
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='p1.php?i=$reg->id'><img src='$reg->imagem' width='180'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>