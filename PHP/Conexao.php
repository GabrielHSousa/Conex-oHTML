<?php

    namespace Projeto\HTMLPHP\PHP;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','phpCrud');
                if($conn){
                    echo"<br>Conectado com sucesso!";
                    return $conn;
                }

            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do metodo conectar
    }//Fim da classe
    
?>