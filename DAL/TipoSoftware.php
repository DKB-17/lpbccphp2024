<?php

    namespace DAL;

    include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
    include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\TipoSoftware.php';

    class TipoSoftware{

        public function Select() {
            $sql = "Select * from tiposoftware;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($registros as $linha) {
                $tpsoft = new \MODEL\TipoSoftware();

                $tpsoft->setId($linha['id']);
                $tpsoft->setDescricao($linha['descricao']);

                $lstTpsoft[] = $tpsoft;
            }
            return $lstTpsoft;
        }
    }
?>