<html>
    <head>
        <title>SportClin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/nivo-slider.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/nivo-slider/default/default.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/layout.css'); ?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container" >
                <div class="row">
                    <div class="col-md-4">
                        <h1>
                            <a class="logo-topo" href="<?php echo base_url(); ?>" title="sportclin.com.br">sportclin.com.br</a>
                        </h1>
                    </div>
                    <div class="col-md-3 col-md-offset-5 redessociais_header">
                        <img src="<?php echo base_url('assets/imagens/rede_topo.png'); ?>" />
                    </div>
                </div>
            </div>
        </header>
        <div class="container conteudo" >
            <div class="row">
                <nav class="navbar navbar-inverse" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#">EMPRESA</a></li>
                            <li><a href="#">CURSOS</a></li>
                            <li><a href="#">LOJA</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CLINICA <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">AVALIAÇÃO FÍSICA</a></li>
                            <li><a href="#">CIÊNCIA</a></li>
                            <li><a href="#">AGITA BAHIA</a></li>
                            <li><a href="#">CONTATOS</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        <div class="container conteudo" >            
            <!-- BANNERS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-wrapper theme-default">
                        <div class="ribbon"></div>
                        <div id="slider" class="nivoSlider">
                            <img src="<?php echo base_url('assets/banners/banner01.png'); ?>" title="#texto01" />
                            <img src="<?php echo base_url('assets/banners/banner02.png'); ?>" title="#texto02" />
                            <img src="<?php echo base_url('assets/banners/banner03.png'); ?>" title="#texto03" />
                        </div>
                        <div id="texto01" class="nivo-html-caption">
                            <strong>CURSO</strong><br />
                            Ciclo Acadêmico de Qualificação em Ciências do Esporte<br/>
                            Inscrições abertas até 03/02/2014.
                        </div>  
                        <div id="texto02" class="nivo-html-caption">
                            <strong>CURSO</strong><br />
                            Ciclo de Capacitação Avançado em Ciências do Esporte.<br/>
                            Inscrições abertas até 03/02/2014.
                        </div>  
                        <div id="texto03" class="nivo-html-caption">
                            <strong>CURSO</strong><br />
                            Capacitação em Personal Trainer.<br/>
                            Inscrições abertas até 03/02/2014.
                        </div>  
                    </div>
                </div>
            </div>      
        </div>
        <div class="container conteudo" > 
            <!-- CONTEUDOS -->
            <div class="row">
                <div class="col-md-4">
                    <div class="box-titulo">CURSO E CAPACITAÇÕES</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box01.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button></div> 
                </div>
                <div class="col-md-4">
                    <div class="box-titulo">CLÍNICA DO EXERCÍCIO</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box03.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button></div> 
                </div>
                <div class="col-md-4">
                    <div class="box-titulo">AVALIAÇÃO FÍSICA E DESPORTIVA</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box02.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button></div> 
                </div>
            </div>
            <div class="row space">
                <div class="col-md-4">
                    <div class="box-titulo">LOJA</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box06.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button>  </div> 
                </div>
                <div class="col-md-4">
                    <div class="box-titulo">CIÊNCIA</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box04.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button></div> 
                </div>
                <div class="col-md-4">
                    <div class="box-titulo">AGITA BAHIA</div>
                    <div class="box-imagens"><img src="<?php echo base_url('assets/imagens/box05.png'); ?>" /></div> 
                    <div class="box-texto">simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo.lhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60.</div> 
                    <div class="box-mais"><button type="button" class="btn btn-success">Saiba mais</button></div> 
                </div>
            </div>
            <div class="space"></div>
        </div>
        <!-- RODAPE -->
        <footer>
            <div class="container">
                <div class="row rodape">
                    <div class="col-md-2"><img src="<?php echo base_url('assets/imagens/logo_rodape.png'); ?>" /></div>
                    <div class="col-md-3">
                        <p>Praça Jorge Freire 170 – Costa Azul</p>
                        <p>Salvador Bahia.</p>  
                        <p>Telefone: (071) 8842-7318 / 9127-9923</p> 
                    </div>
                    <div class="col-md-2  col-md-offset-5"><img src="<?php echo base_url('assets/imagens/rede_rodape.png'); ?>" /></div>
                </div>
            </div>
        </footer>

        <!-- JavaScript plugins -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nivo.slider.pack.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    slices: 15, // For slice animations
                    boxCols: 8, // For box animations
                    boxRows: 4, // For box animations
                    animSpeed: 500, // Slide transition speed
                    pauseTime: 3000, // How long each slide will show
                    startSlide: 0, // Set starting Slide (0 index)
                    directionNav: true, // Next & Prev navigation
                    controlNav: true, // 1,2,3... navigation
                    controlNavThumbs: false, // Use thumbnails for Control Nav
                    pauseOnHover: false, // Stop animation while hovering
                    randomStart: false // Start on a random slide
                });
            });
        </script>
    </body>
</html>