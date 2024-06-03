<?php include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Departamento.php';?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Equipamentos</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    


</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Equipamento</h1>
        </div>
        <div class="row  black-text">
            <form action="insEqpto.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe descrição do equipamento" id="descricao" type="text" class="validate" name="txtDesc"> <!--id e mais comumente usado para referencias em css ou javascript na pagina-->
                    <label for="descricao">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe o responsáve" id="responsavel" type="text" class="validate" name="txtResp">
                    <label for="responsavel">Responsável</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe departamento" id="departamento" type="number" class="validate" name="txtDepar">
                    <label for="departamento">Departamento</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe data da compra" id="compra" type="date" class="validate" name="txtCompra">
                    <label for="compra">Compra</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstEquipamento.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html