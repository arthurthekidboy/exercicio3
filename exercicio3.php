<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Franquias</title>
</head>
<body>
    <h2>Resultado relatorio de clientes:</h2>
    <?php
    $franquia1 = array("codigo" => 1, "nome" => "Super Mario");
    $franquia2 = array("codigo" => 2, "nome" => "Sonic the Hedgehog");
    $franquia3 = array("codigo" => 3, "nome" => "Mega Man");
    $franquia4 = array("codigo" => 4, "nome" => "Pac-Man");
    $franquia5 = array("codigo" => 5, "nome" => "Rayman");
    $lista['franquia'][] = $franquia1;
    $lista['franquia'][] = $franquia2;
    $lista['franquia'][] = $franquia3;
    $lista['franquia'][] = $franquia4;
    $lista['franquia'][] = $franquia5;

    foreach($lista as $listafranquias) {
?>
<table>

    <tr>
        <th>Codigo</th>
        <th>Franquia</th>
    </tr>
    <?php foreach($listafranquias as $itemfranquia => $valuefranquia) {?>
    <tr>


        <?php foreach($valuefranquia as $item => $value){
        echo "<td> $value </td>";
        } ?>

    </tr>
    <?php } ?>
</table>


<?php } ?>
</body>
</html>