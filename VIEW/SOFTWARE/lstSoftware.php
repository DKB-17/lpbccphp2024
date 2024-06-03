<?php
    include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Software.php';

    $dalSoftware = new \DAL\Software();

    $lstSoftware = $dalSoftware->Select();

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
    <title>Listar Software usando Model</title>
</head>

<body>
    <h1>Listar Software</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>QtdCopias</th>
        </tr>

        <?php foreach ($lstSoftware as $soft) { ?>
            <tr>
                <td><?php echo $soft->getId(); ?></td>
                <td><?php echo $soft->getDescricao(); ?></td>
                <td><?php echo $soft->getFabricante(); ?></td>
                <td><?php echo $soft->getTipo(); ?></td>
                <td><?php echo $soft->getValor(); ?></td>
                <td><?php echo $soft->getQtdcopias(); ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>