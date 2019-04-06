<?php

    require_once("config.php");

    //carrega um usuario
    //$pessoa = new Pessoa();
    //$pessoa->loadById(2);
    //echo $pessoa;

    //carrega lista de usuarios
    //$lista=Pessoa::getList();
    //echo json_encode($lista);

    //carrega uma lista de usuarios pelo nome
    //$busca= Pessoa::search("ga");
    //echo json_encode($busca);

    //carrega um usuario usando o login e a senha
    $pessoa=new Pessoa();
    $pessoa->login("Garibaldo","123.456.789-01");
    echo $pessoa;

?>