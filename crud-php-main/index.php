<?php
    include_once("classes/Categoria.Class.php");
    include_once("classes/Produto.Class.php");

        $categoria= new Categoria();
        var_dump($categoria);
        
        $produto= new Produto(1);
        echo $produto->getId();
        echo $produto->getNome();
        echo $produto->getPreco();
        
?>