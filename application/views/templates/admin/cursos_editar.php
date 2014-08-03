<?php $cursoDados = $curso[0]; ?>
<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h2>Editar curso</h2>
    </div> 
    <?php
    if (isset($sucesso)) {
            print_r($sucesso);
        if ($sucesso == 1) {
            ?>
            <div class="alert alert-block alert-success fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Curso alterado com sucesso</h4>
            </div>

        <?php }else{ ?>
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Não foi possivel alterar o curso no momento</h4>
            </div>  
    <?php
        }
    }
    ?>    
    <div class="row">
        <div class="col-sm-8 col-sm-push-2">
            <?php
            $form = array('class' => 'ficha form-horizontal', 'id' => 'ficha', 'name' => 'ficha', 'role' => 'form');
            echo form_open('/admin/cursos/alterar/'.$cursoDados->id);
            ?>
            <fieldset>
                <div class="form-group">
                    <label for="nome" class="control-label">Nome *</label>
                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $cursoDados->id ?>" />
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $cursoDados->nome ?>" required />
                    <?php echo form_error('nome'); ?>
                </div>
                <div class="form-group">
                    <label for="objetivo" class="control-label">Objetivo</label>
                    <textarea id="objetivo" name="objetivo" class="form-control"><?php echo $cursoDados->objetivo ?></textarea>
                </div>
                <div class="form-group">
                    <label for="coordenacao" class="control-label">Coordenação</label>
                    <textarea id="coordenacao" name="coordenacao" class="form-control"><?php echo $cursoDados->coordenacao ?></textarea>
                </div>
                <div class="form-group">
                    <label for="palestrante" class="control-label">Palestrante</label>
                    <textarea id="palestrante" name="palestrante" class="form-control"><?php echo $cursoDados->palestrante ?></textarea>
                </div>
                <div class="form-group">
                    <label for="conteudo" class="control-label">Conteudo</label>
                    <textarea id="conteudo" name="conteudo" class="form-control"><?php echo $cursoDados->conteudo ?></textarea>
                </div>
                <div class="form-group">
                    <label for="participacao" class="control-label">Participação</label>
                    <textarea id="participacao" name="participacao" class="form-control"><?php echo $cursoDados->participacao ?></textarea>
                </div>
                <div class="form-group">
                    <label for="dtinicio" class="control-label">Inicio das inscrições *</label>
                    <input type="date" id="dtinicio" name="dtinicio" class="form-control" maxlength="10" value="<?php echo $cursoDados->dtinicio ?>" />
                </div>
                <div class="form-group">
                    <label for="dtfim" class="control-label">Fim das inscrições *</label>
                    <input type="date" id="dtfim" name="dtfim" class="form-control" maxlength="10" value="<?php echo $cursoDados->dtfim ?>" />
                </div>
                <div class="form-group">
                    <label for="inicio" class="control-label">Inicio do Curso *</label>
                    <input type="date" id="inicio" name="inicio" class="form-control" maxlength="10" value="<?php echo $cursoDados->inicio ?>" />
                </div>
                <div class="form-group">
                    <label for="cargahoraria" class="control-label">Carga Horária</label>
                    <input type="text" id="cargahoraria" name="cargahoraria" class="form-control" value="<?php echo $cursoDados->cargahoraria ?>" />
                </div>
                <div class="form-group">
                    <label for="local" class="control-label">Local</label>
                    <input type="text" id="local" name="local" class="form-control" value="<?php echo $cursoDados->local ?>" />
                </div>
                <div class="form-group">
                    <label for="horario" class="control-label">Horário</label>
                    <input type="text" id="horario" name="horario" class="form-control" value="<?php echo $cursoDados->horario ?>" />
                </div>
                <div class="form-group">
                    <label for="investimento" class="control-label">Investimento</label>
                    <textarea id="investimento" name="investimento" class="form-control"><?php echo $cursoDados->investimento ?></textarea>
                </div>  
                <div class="form-group">
                    <label for="valor" class="control-label">Valor</label>
                    <input type="text" id="valor" name="valor" class="form-control" value="<?php echo $cursoDados->valor ?>" />
                </div>
                <div class="form-group">
                    <label for="vagas" class="control-label">Vagas</label>
                    <input type="text" id="valor" name="vagas" class="form-control" value="<?php echo $cursoDados->vagas ?>" />
                </div>
                <div class="form-group">
                    <label for="nivelamento" class="control-label">Nivelamento</label>
                    <input type="text" id="nivelameto" name="nivelameto" class="form-control" value="<?php echo $cursoDados->nivelamento ?>" />
                </div>
                <div class="form-group">
                    <label for="tipo" class="control-label">Tipo *</label>
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="">Selecione o tipo</option>
                        <option value="1" <?php echo ($cursoDados->tipo == 1? 'selected="selected"':'')?> >Curso</option>
                        <option value="2" <?php echo ($cursoDados->tipo == 2? 'selected="selected"':'')?> >Palestra</option>                            
                    </select>
                </div>
                <div class="space"></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </fieldset>    
            <?php
            echo form_close();
            ?>  
        </div>
    </div>   

</div>
<div class="container conteudo" >            
    <div class="space"></div>
</div>  