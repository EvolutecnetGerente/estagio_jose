<?php

session_start();

function testaSafePic($code){

    if (!empty($code)&&(strtoupper($code) == strtoupper($_SESSION['intratec']['captcha_code']))) {
        return true;
    }
    return false;
}
?>
<!--               retireciona o usu�rio sem gerar entrada no hist�rico de navega��o do browser.-->

<script type="text/javascript">
        function redirecioneSemHistorico() {
            window.location.replace("http://localhost/estagio_jose/relembrar/site/trollei.php");
        }
    </script>