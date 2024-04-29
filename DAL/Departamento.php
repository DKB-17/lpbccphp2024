<?php

   // criacao de pacotes no php
   namespace DAL; //Data Access Layer
   
   include_once 'C:\xampp\htdocs\phpcodes(29-04-24)\lpbccphp2024\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\phpcodes(29-04-24)\lpbccphp2024\MODEL\Departamento.php';
   
   class Departamento{

      public function Select(){
         //exmplo de acesso a dados usando POO por meio
         //de uma classe Model e gerando lista de 

         $sql = "Select * from departamento;"; 
         $con = Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = Conexao::desconectar();
  
         foreach ($registros as $linha){
            $dpto = new \MODEL\Departamento(); 

            $dpto->setId($linha['id']); 
            $dpto->setDescricao($linha['descricao']);
               
            $lstDpto[] = $dpto; 
         }
                     return $lstDpto;
      }

   }

?>