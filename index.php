<?php

    require_once("config.php");

    $sql= new Sql();

    $pessoa=$sql->select("SELECT * FROM tb_pessoa");

    echo json_encode($pessoa);

?>