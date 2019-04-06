<?php

    require_once("config.php");

    $pessoa = new Pessoa();

    $pessoa->loadById(2);

    echo $pessoa;

?>