<?php

include_once("interfaces/crud.php");
include_once("classes/DB.Class.php");

    class Categoria implements crud{
        private $id;
        private $nome;
        
        public function __construct($id=false){
             if($id){
               $sql = "SELECT * FROM Categoria where id = ?";
               $conexao = DB::conexao();
           $stmt = $conexao->prepare($sql);
           $stmt->bindParam(1,$id, PDO::PARAM_INT);
           $stmt->execute();
           foreach($stmt as $obj){
             $this->setId($obj['id']);
             $this->setNome($obj['nome']);
            }
          }
        }

        public function setid($id){
            $this->id=$id;
       }
       public function getid(){
            return $this->id;
       }
       public function setNome($nome){
            $this->nome=$nome;
       }
       public function getNome(){
            return $this->nome;
       }

       
      public function adicionar(){}
      public function listar(){}
      public function atualizar(){}
      public function excluir(){}

    }

?>