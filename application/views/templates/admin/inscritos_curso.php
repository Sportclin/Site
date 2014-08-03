<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h3><?php echo $curso[0]->nome;  $curso_id = $curso[0]->id; ?></h3>
    </div>
    <div class="table-responsive">
        <table id="inscritos" class="table tab-pane">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Faculdade</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Confirmado</th>                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($insc as $i) { ?> 
                    <tr class="odd gradeX"> 
                        <td><?php echo $i->inscricoes_id; ?></td>
                        <td><?php echo $i->pessoa_nome; ?></td>
                        <td><?php echo $i->cpf; ?></td>
                        <td><?php echo $i->nivel_txt; ?></td>
                        <td><?php echo $i->email; ?></td>
                        <td><?php echo $i->celular; ?></td>
                        <td><?php $pg = $i->pago;
                echo ($pg == 1) ? 'Sim' : 'Não'; ?></td>
                        <td>
                            <?php   $pgto = ($pg == 1) ? 'desconfirmar' : 'confirmar'; ?>
                            <a href="<?php echo base_url('admin/inscricao/'.$pgto.'/'.$curso_id.'/'.$i->inscricoes_id) ?>">
                                <span class="btn <?php echo ($pg == 1) ? 'btn-success' : 'btn-primary'; ?>">
                                    <i class="fa <?php echo ($pg == 1) ? 'fa-check' : 'fa-plus'; ?> fa-fw"></i></span>
                            </a>
                        </td>
                    </tr>
                <?php } ?> 
            </tbody>
        </table>  
    </div>
    <div>Total de inscritos: <?php echo $total ?> 
        | Total confirmados: <?php echo $confirmados ?> 
        | Total de não confirmados: <?php echo $nconfirmados ?></div>
</div>