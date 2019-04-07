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
    //$pessoa=new Pessoa();
    //$pessoa->login("Garibaldo","123.456.789-01");
    //echo $pessoa;

    // cadastrando sem o construtor
    //$aluno= new Pessoa();
    //$aluno->setPessoaNome("josivaldo");
    //$aluno->setPessoaIdade("12");
    //$aluno->setPessoaCpf("123.456.123-12");
    //$aluno->insert();
    //echo $aluno;

    //cadastrando com o construtor
    //$aluno = new Pessoa("Gasivaldo","18","123.654.789-42");
    //$aluno->insert();
    //echo $aluno;

    //alterando
    $pessoa= new Pessoa();
    $pessoa->loadById(2);
    $pessoa->update("elmo", "28", "987.654.123-23");
    echo $pessoa;


?>