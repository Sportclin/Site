<!-- CONTEUDOS -->  
<div class="container conteudo" > 
    <div class="row">
        <div class="col-sm-12">
            <div class="titulopage">Contato<hr /></div>
        </div>
    </div> 

    <div class="row">
        <div class="col-sm-8">
            <form name="enviaemail" method="post" action="<?php echo site_url('contato/enviar/'); ?>">
                <h5><b>Nome: *</b></h5>
                <div class="form-group">
                    <?php echo form_error('nome'); ?>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome" value="<?php echo set_value('nome') ?>" />
                </div>
                <h5><b>Email: *</b></h5>
                <div class="form-group">
                    <?php echo form_error('email'); ?>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email" value="<?php echo set_value('email') ?>" />
                </div>
                <h5><b>Selecione o tipo: *</b></h5>
                <div class="form-group">
                    <?php echo form_error('tipo'); ?>
                    <select class="form-control input" name="tipo" id="tipo">
                        <option value=""><b>----</b></option>
                        <option value="Elogio"><b>Elogio</b></option>
                        <option value="Dúvida"><b>Dúvida</b></option>
                        <option value="Reclamação"><b>Reclamação</b></option>
                    </select>
                </div>
                <h5><b>Assunto: *</b></h5>
                <div class="form-group">
                    <?php echo form_error('assunto'); ?>
                    <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Digite o Assunto do email" value="<?php echo set_value('assunto') ?>" />
                </div>
                <h5><b>Mensagem: *</b></h5>
                <div class="form-group">
                    <?php echo form_error('msg'); ?>
                    <textarea name="msg" id="msg" placeholder="Digite o conteudo do email" rows="10" style="min-width: 100%;"><?php echo set_value('msg') ?></textarea>
                </div>
                <div class="form-group">
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.8135708583663!2d-38.44504291812246!3d-12.995683413668765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b75166834b3%3A0x50c59fdc8ecfd341!2sPra%C3%A7a+Jorge+Freire%2C+170+-+Costa+Azul!5e0!3m2!1spt-BR!2s!4v1394246958052" width="350" height="300" frameborder="0" style="border:0"></iframe>
            <h5><b>Endereço: </b></h5>
            Praça Jorge Freire, 170 - Costa Azul - Salvador–BA, no primeiro piso da Academia Vidativa
            <h5><b>Telefone: </b></h5>
            (71) 8842-7318<br />
            (71) 8873-3714
            <h5><b>Email: </b></h5>
            sportclin2@hotmail.com<br />
            contato@sportclin.com.br
        </div>
    </div>

    <div class="space"></div>

</div>
