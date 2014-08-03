<!-- CONTEUDOS -->  
<div class="container conteudo" > 
    <div class="row">
        <div class="col-sm-12">
            <div class="titulopage">CIÊNCIA<hr /></div>
        </div>
    </div> 
    <?php foreach ($ciencia as $dados): ?> 
        <div class="row">
            <div class="col-sm-2">
                <div class="conteudocurso">
                    <?php echo date('d/m/Y', strtotime($dados->data)); ?>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="conteudocurso">
                    <h3><?php echo $dados->titulo; ?></h3>
                    <p><?php echo $dados->descricao; ?></p>
                    <p style="text-align: right;"><a href="<?php echo base_url('downloads/ciencia/'. $dados->arquivo); ?>" ><button type="button" class="btn btn-success">Baixar</button></a></p>
                </div>
            </div>
        </div>
        <div class="space"></div>
    <?php endforeach; ?>
</div>
