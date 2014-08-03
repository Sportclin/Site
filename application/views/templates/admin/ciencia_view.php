<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Ciência</h1>
    </div>

    <?php
    if (isset($sucesso)) {
            print_r($sucesso);
        if ($sucesso == 1) {
            ?>
            <div class="alert alert-block alert-success fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Artigo em Ciência cadastrado com sucesso</h4>
            </div>

        <?php }else{ ?>
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Não foi possivel cadastrar o Artigo em Ciência no momento</h4>
            </div>  
    <?php
        }
    }
    ?>
    <div>
        <form>
            <a href="<?php echo site_url('admin/ciencia/novo/'); ?>"><span class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Novo </span></a>
        </form>
    </div>
    <div class="table-responsive">
        <table id="tabelacurso" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Arquivo</th>
                    <th>Data</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ciencia as $c) {

                    ?> 
                    <tr class="odd gradeX"> 
                        <td><?php echo $c->id; ?></td>
                        <td><b><?php echo $c->titulo; ?></b></td>
                        <td><?php echo $c->descricao; ?></td>
                        <td><?php echo $c->arquivo; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($c->data)); ?></td>
                        <td><a href="#"><span class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i></span></a></td>
                        <td><a href="#"><span class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></span></a></td>         
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>