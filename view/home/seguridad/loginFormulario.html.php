
<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>


        <link rel="stylesheet" href="<?php echo $btCSS?>">
        <link rel="stylesheet" href="<?php echo $bttCSS?>">
        <link rel="stylesheet" href="<?php echo $signinCSS?>">
        <link rel="stylesheet" href="<?php echo $fsConfig->getUrl() ?>css/estilox.css">

    </head>
    <body>
        <div class="container container-fluid loginX" style="padding-left: 315px !important;
padding-right: 315px;">
            <form class="form-signin" method="post" action="<?php echo $loginForm ?>">
                <h2 class="form-signin-heading">Datos de Usuario</h2>
                <input type="text" autocomplete="off" autofocus required placeholder="Usuario" class="form-control" id="inputUsuario" name="seguridad[user]">
                <input type="password" required placeholder="Contraseña" class="form-control" id="inputPassword" name="seguridad[pass]">
                       <button type="submit" class="btn btn-lg btn-primary btn-block">Identificarse</button>
                       <a href="<?php echo $registroURL ?>" class="icon-aircraft-landing">Registrarse</a>
                <?php if (isset($_SESSION['usuarioInvalido'])=== true): ?>
                <br>
                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['usuarioInvalido'] ?></div>
                <?php unset($_SESSION['usuarioInvalido']) ?>
                <?php endif ?>
                <?php if (isset($_SESSION['registroSuccess'])=== true): ?>
                <br>
                <div class="alert alert-success" role="alert"><?php echo $_SESSION['registroSuccess'] ?></div>
                <?php unset($_SESSION['registroSuccess']) ?>
                <?php endif ?>
            </form>  
        </div>
        <script src="<?php echo $jqJS ?>"></script>
        <script src="<?php echo $btJS ?>"></script>
        
    </body>
</html>