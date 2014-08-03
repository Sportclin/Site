<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Envio de E-mails</h1>
    </div>
    <?php    
    if(!empty($sucesso)){ ?>
    <div class="alert alert-success fade in">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <strong>Emails enviados com sucesso!</strong>
    </div>
    <?php } ?>    
    <div class="row">
        <form name="enviaemail" method="post" action="<?php echo site_url('admin/email/enviar/'); ?>">
            <div class="form-group">
                <label for="cursos" class="control-label">Selecione o curso</label>
                <select class="form-control input-lg" name="cursos" id="cursos">
                    <option value="0"><b>Todos</b></option>
                    <?php
                    foreach ($cursos as $dados) {
                        echo '<option value="' . $dados->id . '">' . $dados->nome . '</option>';
                    }
                    ?>
                </select>
            </div>
            <h5><b>Situação: </b></h5>
            <div class="radio-inline">
                <input type="radio" name="tipo" id="tipo0" value="0"> 
                <label for="tipo0">Todos</label>
            </div>
            <div class="radio-inline">
                <input type="radio" name="tipo" id="tipo1" value="1"> 
                <label for="tipo1">Confirmados</label>
            </div>
            <div class="radio-inline">
                <input type="radio" name="tipo" id="tipo2" value="2" checked="checked"> 
                <label for="tipo2">Não Confirmados</label>
            </div>
            <h5><b>Assunto: *</b></h5>
            <div class="form-group">
                <?php echo form_error('assunto'); ?>
                <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Digite o Assunto do email" value="<?php echo set_value('assunto') ?>" />
            </div>
            <h5><b>Mensagem: *</b></h5>
            <div class="form-group">
                <?php echo form_error('msg'); ?>
                <textarea name="msg" id="msg" placeholder="Digite o conteudo do email"><?php echo set_value('msg') ?></textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-2 col-sm-offset-10">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>