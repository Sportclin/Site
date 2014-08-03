<!-- CONTEUDOS -->        
<div class="container conteudo" > 
    <div class="row">
        <div class="col-sm-12">
            <div class="titulopage"><h3><?php echo $curso[0]->nome; ?></h3><hr /></div>
        </div>
    </div>            
    <div class="row">
        <div class="col-sm-11 col-sm-offset-1">
            <div class="conteudocurso">
                <p><b>Período de inscrições: <?php echo date('d/m/Y', strtotime($curso[0]->dtinicio)); ?> até  <?php echo date('d/m/Y', strtotime($curso[0]->dtfim)); ?></b></p>
                <?php if (!empty($curso[0]->objetivo)): ?>
                    <h5>OBJETIVOS</h5>
                    <p><?php echo $curso[0]->objetivo; ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->coordenacao)): ?>
                    <h5>COORDENAÇÃO GERAL</h5>
                    <p><?php echo $curso[0]->coordenacao; ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->palestrante)): ?>
                    <h5>PALESTRANTES</h5>
                    <p><?php echo $curso[0]->palestrante; ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->conteudo)): ?>
                    <h5>CONTEUDO</h5>
                    <p><?php echo $curso[0]->conteudo; ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->participacao)): ?>
                    <h5>PARTICIPAÇÕES EFETIVAS</h5>
                    <p><?php echo $curso[0]->participacao; ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->inicio)): ?>
                    <h5>DATA</h5>
                    <p><?php echo date('d/m/Y', strtotime($curso[0]->inicio)); ?></p>
                <?php endif; ?>
                <?php if (!empty($curso[0]->cargahoraria)): ?>
                    <h5>CARGA HORÁRIA</h5>
                    <p><?php echo $curso[0]->cargahoraria; ?></p>
                <?php endif; ?> 
                <?php if (!empty($curso[0]->nivelamento)): ?>
                    <h5>NIVELAMENTO:</h5>
                    <p><?php echo $curso[0]->nivelamento; ?></p>
                <?php endif; ?> 
                <?php if (!empty($curso[0]->local)): ?>
                    <h5>LOCAL:</h5>
                    <p><?php echo $curso[0]->local; ?></p>
                <?php endif; ?> 
                <?php if (!empty($curso[0]->investimento)): ?>
                    <h5>INVESTIMENTO</h5>
                    <p><?php echo $curso[0]->investimento; ?></p>
                <?php endif; ?>      
                <?php if (!empty($curso[0]->vagas)): ?>
                    <h5>VAGAS LIMITADAS</h5>
                    <p><b>Apenas <?php echo $curso[0]->vagas; ?> Vagas</b></p>
                <?php endif; ?>      
           </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="conteudocurso">
                <p style="text-align: center;"><a href="<?php echo base_url('inscricao/ficha/' . $curso[0]->id); ?>" ><button type="button" class="btn btn-success">BAIXAR FICHA INSCRIÇÃO</button></a></p>
            </div>
        </div>
    </div>    
    <div class="space"></div>

</div>
