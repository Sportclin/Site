<div class="container theme-showcase" role="main">
    <div class="page-header">
        <h1>Inscritos</h1>
        <h4>Acomapanhamento de inscritos por curso</h4>
    </div>  
    <div class="table-responsive">
        <table id="tabelacurso" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Total</th>
                    <th></th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($curso as $c) {  ?> 
                    <tr class="odd gradeX"> 
                        <td><?php echo $c->curso_id; ?></td>
                        <td><b><?php echo $c->curso; ?></b></td>
                        <td><?php echo $c->total; ?></td>
                        <td><a href="<?php echo base_url('admin/inscricao/curso/'.$c->curso_id) ?>"><span class="btn btn-primary"><i class="fa fa-list fa-fw"></i></span></a></td>
                    </tr>
                <?php } ?> 
            </tbody>
        </table>    
</div>