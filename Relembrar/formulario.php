
<!--                                Titulo da página-->
    <head>
        <title>Validação</title>
        <link rel="shortcut icon" href="icone_nav.jpg" type="image/x-icon"/>
<!--                                   Bootstrap-->
                <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
                <script src="bootstrap/js/bootstrap.js"></script>
                <link rel="stylesheet" href="arrumaFormulario.css">
    </head>
             <div id="imagem">
                <img src="safePic.php"
                     id="anima"
                     onclick="redirecioneSemHistorico()">
            </div>

    <div class="container">
        <form action="validar.php"
              method="get"
              class="login">

            <input name="usuario"
                   class="form-control"
                   type="text"
                   placeholder="Digite seu usuário">

            <input name="senha"
                    class="form-control"
                    type="password"
                    placeholder="Diigite a senha">

            <input  name="captcha"
                    class="form-control <?php
                    if ($_GET['erro']==1){
                        echo "has-danger";
                    }
                    ?>"
                    type="text"
                    placeholder="Digite o texto da imagem...">

            <button type="submit"
                    class="btn btn-primary"
                    value="Enviar">Enviar</button>
            <?php
            if ($_GET['erro']==1){
                echo"Algo errado... Digite Novamente";
            }
            ?>
        </form>
    </div>






