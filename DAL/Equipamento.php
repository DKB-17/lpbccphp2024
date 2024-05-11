<?php
    namespace DAL;

    include_once 'C:\xampp\htdocs\phpcodes(29-04-24)\lpbccphp2024\DAL\Conexao.php';
    include_once 'C:\xampp\htdocs\phpcodes(29-04-24)\lpbccphp2024\MODEL\Equipamento.php';

    class Equipamento{


        public function Select(){
            $sql = "Select * from equipamento";
            $con = Conexao::conectar();
            $registro = $con->query($sql);
            $con = Conexao::desconectar(); //Desconectar para que nao ocorra a corropcao dos dados do banco, desconectar garante que em um processo nao aconteca ele travar e perder os dados durante um processo.
            
            
            foreach ($registro as $linha) {
                $eqpto = new \MODEL\Equipamento();

                $eqpto->setId($linha['id']);
                $eqpto->setDescricao($linha['descricao']);
                $eqpto->setResponsavel($linha['responsavel']);
                $eqpto->setDepartamento($linha['departamento']);
                $eqpto->setCompra($linha['compra']);

                $lstEqpto[] = $eqpto;
            }

            return $lstEqpto;
        }



    }


?>