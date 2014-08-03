
<div class="container conteudo" >            
    <div class="row">
        <div class="col-sm-12">
            <?php
            $form = array('class' => 'ficha form-horizontal', 'id' => 'ficha', 'name' => 'ficha', 'role' => 'form');
            echo form_open('/inscricao/cadastrar/' . $id_curso, $form);
            ?>
            <fieldset>
                <legend>PRÉ CADASTRO</legend>
                <div>Para baixar a ficha de inscrição é necessário realizar o pré cadastro</div>
                <div class="space"></div>                
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome *</label>
                    <div class="col-sm-10">
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo set_value('nome') ?>" required />
                        <?php echo form_error('nome'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpf" class="col-sm-2 control-label">CPF *</label>
                    <div class="col-sm-10">
                        <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo set_value('cpf') ?>" maxlength="11" required  />
                        <?php echo form_error('cpf'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email *</label>
                    <div class="col-sm-10">
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo set_value('email') ?>"  required />
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo set_value('telefone') ?>" maxlength="11" />
                        <?php echo form_error('telefone'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="celular" class="col-sm-2 control-label">Celular *</label>
                    <div class="col-sm-10">
                        <input type="text" id="celular" name="celular" class="form-control" value="<?php echo set_value('celular') ?>" maxlength="11" required />
                        <?php echo form_error('celular'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <h5><b>NIVEL: *</b></h5>
                        <div class="radio">
                            <input type="radio" id="nivel1" name="nivel" value="1" />
                            <label for="nivel1">Estudante</label>
                        </div>
                        <div id="nivel">
                            <label for="nivel1">Faculdade/Semestre *</label>
                            <input type="text" id="nivel1txt" name="nivel1_txt" class="form-control" value="<?php echo set_value('nivel1_txt') ?>" />
                        </div>
                        <div class="radio">
                            <input type="radio" id="nivel2" name="nivel" value="2" />
                            <label for="nivel2">Graduado</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="nivel3" name="nivel" value="3" />
                            <label for="nivel3">Pós-Graduado</label>
                        </div>
                        <?php echo form_error('nivel'); ?>
                    </div>

                </div>    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <h5><b>ÁREA: *</b></h5>
                        <div class="radio-inline">
                            <input type="radio" id="area1" name="area" value="1" />
                            <label for="area1">Ed. Física</label>
                        </div>
                        <div class="radio-inline">
                            <input type="radio" id="area2" name="area" value="2" />
                            <label for="area2">Nutrição</label>
                        </div>
                        <div class="radio-inline">
                            <input type="radio" id="area3" name="area" value="3" />
                            <label for="area3">Fisioterapia</label>
                        </div>
                        <div class="radio-inline">
                            <input type="radio" id="area4" name="area" value="4" />
                            <label for="area4">Medicina</label>
                        </div>
                        <div class="radio-inline">
                            <input type="radio" id="area5" name="area" value="5" />
                            <label for="area5">Outros</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <?php echo form_error('area'); ?>
                    </div>
                </div> 

                <div class="form-group">
                    
                    <div class="col-sm-2 col-sm-offset-10">
                        <button type="submit" class="btn btn-success">Continuar</button>
                    </div>
                </div>
            </fieldset>    
            <?php
            echo form_close();
            ?>  
        </div>
    </div>   
    <div class="space"></div>
</div>  
