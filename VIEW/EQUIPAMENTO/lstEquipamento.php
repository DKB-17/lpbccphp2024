<?php

include_once 'C:\xampp\htdocs\phpcodes(29-04-24)\lpbccphp2024\DAL\Equipamento.php';
use DAL\Equipamento;

$dalEqpto = new \DAL\Equipamento();

$lstEqpto = $dalEqpto->Select();
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Equipamento usando DAL</title>
</head>

<body>
    <h1>Listar Equipamento</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsavel</th>
            <th>Departamento</th>
            <th>Compra</th>
        </tr>

        <?php foreach ($lstEqpto as $eqpto) { ?>
            <tr>
                <td><?php echo $eqpto->getId(); ?></td>
                <td><?php echo $eqpto->getDescricao(); ?></td>
                <td><?php echo $eqpto->getResponsavel(); ?></td>
                <td><?php echo $eqpto->getDepartamento(); ?></td>
                <td><?php echo $eqpto->getCompra(); ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>