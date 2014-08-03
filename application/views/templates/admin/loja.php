<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Loja</h1>
    </div>

    <?php
    if (isset($sucesso)) {
            print_r($sucesso);
        if ($sucesso == 1) {
            ?>
            <div class="alert alert-block alert-success fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Produto cadastrado com sucesso</h4>
            </div>

        <?php }else{ ?>
            <div class="alert alert-block alert-warning fade in">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <h4 class="alert-heading">Não foi possivel cadastrar o produto no momento</h4>
            </div>  
    <?php
        }
    }
    ?>
    <div>
        <form>
            <a href="<?php echo site_url('admin/loja/novo/'); ?>"><span class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Novo Produto</span></a>
        </form>
    </div>
    <div class="table-responsive">
        <table id="tabelacurso" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Descri&ccedil;&atilde;o</th>
                    <th>Imagem</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($loja as $l) {
                    ?> 
                    <tr class="odd gradeX">
                        <td><?php echo $l->id; ?></td>
                        <td><b><?php echo $l->nome; ?></b></td>
                        <td><?php echo $l->marca; ?></td>
                        <td><?php echo $l->descricao; ?></td>
                        <td><img src="<?php echo base_url('assets/imagens/loja/'.$l->id); ?>.jpg" width="100%" alt=""></td>
                        <td><a href="<?php echo base_url('admin/loja/editar/'.$l->id) ?>"><span class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i></span></a></td>
                        <td><a href="#"><span class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></span></a></td>         
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>