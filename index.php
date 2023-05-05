<?php
    include_once("classes/Categoria.Class.php");
    include_once("classes/Produto.Class.php");

        //$categoria= new Categoria();
        //var_dump($categoria);
        
        //$produto= new Produto(1);
        //echo $produto->getId();
        //echo $produto->getNome();
        //echo $produto->getPreco();

        // $produto= new Produto();
        // $produto->setCategoria_id(2);
        // $produto->setNome("algodão");
        // $produto->setPreco(10.00);
        // $produto->setQuantidade(20);
        // $produto->adicionar();

        $produtos = Produto::Listar();
        if($produtos){
           foreach($produtos as $produto){
               echo $produto->getId();
               echo"-";
               echo $produto->getCategoria_id();
               echo"-";
               echo $produto->getNome();
               echo"-";
               echo $produto->getPreco();
               echo"-";
               echo $produto->getQuantidade();
               echo"<br/>";
           }
        }
                

        
?>