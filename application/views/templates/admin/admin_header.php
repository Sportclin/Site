<html>
    <head>
        <title>SportClin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datatable-bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datatable.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.ui.theme/redmond/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
                
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>    
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sportclin Painel</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('admin/cursos'); ?>">Cursos</a></li>
                    <li><a href="<?php echo base_url('admin/loja'); ?>">Loja</a></li>
                    <li><a href="<?php echo base_url('admin/inscricao'); ?>">Inscrições</a></li>
                    <li><a href="<?php echo base_url('admin/ciencia'); ?>">Ciência</a></li>
                    <li><a href="<?php echo base_url('admin/email'); ?>">Mensagem</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <b><?php echo $nome; ?></b><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('admin/home/logout'); ?>">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>