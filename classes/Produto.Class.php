<?php
      class Produto{
           private $id;
           private $categoria_id;
           private $nome;
           private $preco;
           private $quantidade;

       public function setid($id){
            $this->id=$id;
       }
       public function getid(){
            return $this->id;
       }
       public function setcategoria_id($categoria_id){
          $this->categoria_id=$categoria_id;
       }
       public function getcategoria_id(){
            return $this->categoria_id;
       }
       public function setNome($nome){
            $this->nome=$nome;
       }
       public function getNome(){
            return $this->nome;
       }
       public function setPreco($preco){
            $this->preco=$preco;
       }
       public function getPreco(){
            return $this->preco;
       }
       public function setQuantidade($quantidade){
            $this->quantidade=$quantidade;
       }
       public function getQuantidade(){
            return $this->quantidade;
       }
      public function__construct(){
            echo "O objeto produto foi instanciado!";
      }
      
      }


?>