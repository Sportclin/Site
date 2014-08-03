<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h2>Cadastrar novo curso</h2>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-push-2">
            <?php
            $form = array('class' => 'ficha form-horizontal', 'id' => 'ficha', 'name' => 'ficha', 'role' => 'form');
            echo form_open_multipart('/admin/cursos/cadastrar');
            ?>
            <fieldset>
                <div class="form-group">
                    <label for="nome" class="control-label">Nome *</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo set_value('nome') ?>" required />
                    <?php echo form_error('nome'); ?>
                </div>
                <div class="form-group">
                    <label for="objetivo" class="control-label">Objetivo</label>
                    <textarea id="objetivo" name="objetivo" class="form-control"><?php echo set_value('objetivo') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="coordenacao" class="control-label">Coordenação</label>
                    <textarea id="coordenacao" name="coordenacao" class="form-control"><?php echo set_value('coordenacao') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="palestrante" class="control-label">Palestrante</label>
                    <textarea id="palestrante" name="palestrante" class="form-control"><?php echo set_value('palestrante') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="conteudo" class="control-label">Conteudo</label>
                    <textarea id="conteudo" name="conteudo" class="form-control"><?php echo set_value('conteudo') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="participacao" class="control-label">Participação</label>
                    <textarea id="participacao" name="participacao" class="form-control"><?php echo set_value('participacao') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="dtinicio" class="control-label">Inicio das inscrições *</label>
                    <input type="date" id="dtinicio" name="dtinicio" class="form-control" maxlength="10" value="<?php echo set_value('dtinicio') ?>" />
                </div>
                <div class="form-group">
                    <label for="dtfim" class="control-label">Fim das inscrições *</label>
                    <input type="date" id="dtfim" name="dtfim" class="form-control" maxlength="10" value="<?php echo set_value('dtfim') ?>" />
                </div>
                <div class="form-group">
                    <label for="inicio" class="control-label">Inicio do Curso *</label>
                    <input type="date" id="inicio" name="inicio" class="form-control" maxlength="10" value="<?php echo set_value('inicio') ?>" />
                </div>
                <div class="form-group">
                    <label for="cargahoraria" class="control-label">Carga Horária</label>
                    <input type="text" id="cargahoraria" name="cargahoraria" class="form-control" value="<?php echo set_value('cargahoraria') ?>" />
                </div>
                <div class="form-group">
                    <label for="local" class="control-label">Local</label>
                    <input type="text" id="local" name="local" class="form-control" value="<?php echo set_value('local') ?>" />
                </div>
                <div class="form-group">
                    <label for="horario" class="control-label">Horário</label>
                    <input type="text" id="horario" name="horario" class="form-control" value="<?php echo set_value('horario') ?>" />
                </div>
                <div class="form-group">
                    <label for="investimento" class="control-label">Investimento</label>
                    <textarea id="investimento" name="investimento" class="form-control"><?php echo set_value('investimento') ?></textarea>
                </div>  
                <div class="form-group">
                    <label for="valor" class="control-label">Valor</label>
                    <input type="text" id="valor" name="valor" class="form-control" value="<?php echo set_value('valor') ?>" />
                </div>
                <div class="form-group">
                    <label for="vagas" class="control-label">Vagas</label>
                    <input type="text" id="valor" name="vagas" class="form-control" value="<?php echo set_value('vagas') ?>" />
                </div>
                <div class="form-group">
                    <label for="nivelamento" class="control-label">Nivelamento</label>
                    <input type="text" id="nivelameto" name="nivelameto" class="form-control" value="<?php echo set_value('nivelameto') ?>" />
                </div>
                <div class="form-group">
                    <label for="ficha" class="control-label">Ficha</label>
                    <input type="file" id="ficha" name="Ficha" class="form-control"  />
                </div>
                <div class="form-group">
                    <label for="tipo" class="control-label">Tipo *</label>
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="">Selecione o tipo</option>
                        <option value="1">Curso</option>
                        <option value="2">Palestra</option>                            
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
