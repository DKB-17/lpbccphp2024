<?php




include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Equipamento.php';
use BLL\Equipamento;

$bllEqpt = new \BLL\Equipamento();
$lstEqpto = $bllEqpt->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Equipamentos usando DAL/Model</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Equipamentos</h1>
    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='formEquipamento.php'">
             <i class="material-icons">add_circle_outline</i>
    </button>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Departamento</th>
            <th>Compra</th>
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formEquipamento.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstEqpto as $eqpto) { ?>
            <tr>
                <td><?php echo $eqpto->getId(); ?></td>
                <td><?php echo $eqpto->getDescricao(); ?></td>
                <td><?php echo $eqpto->getResponsavel(); ?></td>
                <td><?php echo $eqpto->getDepartamento(); ?></td>
                <td><?php echo $eqpto->getCompra(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtEqpto.php?id=' + '<?php echo $eqpto->getID(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetEqpto.php?id=' + '<?php echo $eqpto->getID(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $eqpto->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remEqpto.php?id=' + id;
        }
    }
</script>