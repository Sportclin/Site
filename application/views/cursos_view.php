<!-- CONTEUDOS -->  
<div class="container conteudo" > 
    <div class="row">
        <div class="col-sm-12">
            <div class="titulopage">CURSO E CAPACITAÇÕES<hr /></div>
        </div>
    </div> 
    <?php foreach ($curso as $dados): ?> 
        <?php
        switch ($dados->tipo) {
            case 1: $tipo = 'curso';
                break;
            case 2: $tipo = 'palestra';
                break;
        }
        ?>
        <div class="row">
            <div class="col-sm-2">
                <div class="conteudocurso">
                    <a href="<?php echo base_url('cursos/detalhe/' . $dados->id); ?>" >
                        <img  src="<?php echo base_url('assets/imagens/cursos/bt_' . $tipo . '.png'); ?>" title="<?php echo $dados->nome; ?>" />
                    </a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="conteudocurso">
                    <h3><?php echo $dados->nome; ?></h3>
                    <p><?php echo $dados->objetivo; ?></p>
                    <p>Inscrições de <?php echo date('d/m/Y', strtotime($dados->dtinicio)); ?> até  <?php echo date('d/m/Y', strtotime($dados->dtfim)); ?></p>
                    <p style="text-align: right;"><a href="<?php echo base_url('cursos/detalhe/' . $dados->id); ?>" ><button type="button" class="btn btn-success">Saiba mais</button></a></p>
                </div>
            </div>
        </div>
        <div class="space"></div>
    <?php endforeach; ?>
</div>
