<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Cursos</h1>
    </div>

    <?php
    if (isset($sucesso)) {
            print_r($sucesso);
        if ($sucesso == 1) {
            ?>
            <div class="alert alert-block alert-success fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Curso cadastrado com sucesso</h4>
            </div>

        <?php }else{ ?>
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Não foi possivel cadastrar o curso no momento</h4>
            </div>  
    <?php
        }
    }
    ?>
    <div>
        <form>
            <a href="<?php echo site_url('admin/cursos/novo/'); ?>"><span class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Novo Curso</span></a>
        </form>
    </div>
    <div class="table-responsive">
        <table id="tabelacurso" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data inicio</th>
                    <th>Data fim</th>
                    <th>Ativo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($curso as $c) {
                    $ativo = $c->ativo;
                    switch ($ativo) {
                        case 0:$ativo = 'Não';
                            break;
                        case 1:$ativo = 'Sim';
                            break;
                    }
                    ?> 
                    <tr class="odd gradeX"> 
                        <td><?php echo $c->id; ?></td>
                        <td><b><?php echo $c->nome; ?></b></td>
                        <td><?php echo date('d/m/Y', strtotime($c->dtinicio)); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($c->dtfim)); ?></td>
                        <td><?php echo $ativo; ?></td>
                        <td><a href="<?php echo base_url('admin/cursos/editar/'.$c->id) ?>"><span class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i></span></a></td>
                        <td><a href="#"><span class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></span></a></td>         
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>