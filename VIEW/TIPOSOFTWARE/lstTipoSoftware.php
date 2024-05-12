<?php
    include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\TipoSoftware.php';

    $dalTPSoft = new \DAL\TipoSoftware();

    $lstTipoSoftware = $dalTPSoft->Select();

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
    <title>Listar Tipo Software usando Model</title>
</head>

<body>
    <h1>Listar Tipo Software</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>

        <?php foreach ($lstTipoSoftware as $tpsoft) { ?>
            <tr>
                <td><?php echo $tpsoft->getId(); ?></td>
                <td><?php echo $tpsoft->getDescricao(); ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>