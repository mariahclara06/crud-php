<?php
    class Categoria{
        private $id
        private $nome
        

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
    }

?>