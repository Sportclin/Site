<!-- CONTEUDOS -->  
<div class="container conteudo" > 
    <div class="row">
        <div class="col-sm-12">
            <div class="titulopage">LOJA<hr /></div>
        </div>
    </div> 
    <?php
    $i = 0; $j = 1;
    $total = count($loja);
    for ($i = 0; $i < $total; $i++):
        if($j==1): echo '<div class="row">'; endif;
        if($j<5): ?>
                <div class="col-sm-3">
                    <img src="<?php echo base_url('assets/imagens/loja/'.$loja[$i]->id); ?>.jpg" width="100%" alt="">
                    <div class="produto_titulo"><?php echo $loja[$i]->nome;?></div>
                    <div class="produto_descricao"><?php echo $loja[$i]->descricao;?></div>
                </div>
        <?php        
           $j++;   
        endif;
        if($j==5 || $i == $total-1): echo '</div><br/><div class="space"></div>'; $j=1; endif;        
    endfor;
    ?>
</div>
