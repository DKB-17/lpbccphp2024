<?php
    namespace DAL;

    include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
    include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Software.php';

    class Software{
        public function Select(){
            $sql = "Select * from software;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($registros as $linha){
                $soft = new \MODEL\Software();

                $soft->setId($linha['id']);
                $soft->setDescricao($linha['descricao']);
                $soft->setFabricante($linha['fabricante']);
                $soft->setTipo($linha['tipo']);
                $soft->setValor($linha['valor']);
                $soft->setQtdcopias($linha['qtdcopias']);

                $lstSoft[] = $soft;
            }
            return $lstSoft;
        }
    }
?>