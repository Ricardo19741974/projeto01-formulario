<?php
  //Define o nome da classe a ser criada, no nosso caso Conexao
  class Conexao
  {
        //Abaixo as respectivas variaveis para cada atributo de nossa classe
          var $usuario                 = "root";
          var $senha    = "";
          var $hostname             = "localhost";
          var $banco    = "estoque";

          //Dois atributos extras, um para guardar o comando sql e outro para guardar o link conexao
         var $link         = "";

    //Definir método setConectar, tem a função de executar os códigos para conexao ao banco de dados
    function setConectar()
                {
                //Faz a conexao com ao banco e armazena na variavel this->link
                $this->link = mysql_pconnect($this->hostname,$this->usuario,$this->senha) or die (mysql_error());
        //Seleciona o banco a ser usado no mysql
                               mysql_select_db($this->banco, $this->link);
                }
  }
?>