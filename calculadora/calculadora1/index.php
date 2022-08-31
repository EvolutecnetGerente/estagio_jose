<?php

$nro1 = 0;
$nro2 = 0;
$resultado = 0;
$calcular = 'somar';

if (isset($_GET['nro1'],$_GET['nro2'],$_GET['calcular'])){
    $nro1 = $_GET['nro1'];
    $nro2 = $_GET['nro2'];
    $calcular = $_GET['calcular'];

    switch($calcular){
        case 'somar':
            $resultado = $nro1 + $nro2;
            break;
        case 'substrai':
            $resultado = $nro1 - $nro2;
            break;
        case 'Multiplicar':
            $resultado = $nro1 * $nro2;
            break;
        case 'dividir':
            $resultado = $nro1 / $nro2;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
</head>
<body>

<form method="get">
    Primeiro Número <br />
    <input type="number" name="nro1" value=<?= $nro1?> required/><br />
    Primeiro Número <br />
    <input type="number" name="nro2" value=<?= $nro2?> required/><br />
    <select name="calcular">
        <option value="somar">Somar</option>
        <option value="substrai">Substrair</option>
        <option value="Multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br /><br />
    <input type="submit" value="Calcular">
    <br /><br />
    <p>O Resultado é <?= $resultado ?></p>
</form>

</body>
</html>