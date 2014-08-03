<html>
    <head>
        <title>SportClin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="body-login">           
        <div class="container-fluid">
            <div class="logo-admin">
                <img src="<?php echo base_url('assets/imagens/logo_p.png'); ?>" alt="sportclin.com.br">
            </div>
            <form class="form-login" role="form" method="post" action="<?php echo base_url('admin/login/auth')?>">
                <h2 class="form-login-heading">Área Restrita</h2>
                <input type="text" name="username" class="form-control" placeholder="Usuário" required autofocus>
                <?php echo form_error('username'); ?>
                <input type="password" name="password" class="form-control" placeholder="Senha" required>
                <?php echo form_error('password'); ?>
                <label class="checkbox">
                    <input type="checkbox" value="lembrar">Lembrar
                </label>
                <?php echo form_error('check_login'); ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
            </form>

        </div> <!-- /container -->

        <!-- JavaScript plugins -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>