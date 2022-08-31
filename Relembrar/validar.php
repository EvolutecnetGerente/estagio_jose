<?php

//var_dump($_GET); //var_dump da variavel get para saber o ques está acontecendo
require_once('funcoes.php');
$usuario = "jose";
$senha = "123456";

if (testaSafePic($_GET['captcha'])) {

    if($_GET['usuario']==$usuario && $_GET['senha']==$senha){
        ?>
        <script>
            location.href="site.php";
        </script>
        <?php
    }
} else{
    ?>
<script>
    location.href="formulario.php?erro=1";
</script>
    <?php
}