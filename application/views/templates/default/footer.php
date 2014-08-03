<!-- RODAPE -->
<footer>
    <div class="container">
        <div class="row rodape">
            <div class="col-sm-2"><img src="<?php echo base_url('assets/imagens/logo_rodape.png'); ?>" /></div>
            <div class="col-sm-3">
                <p>Praça Jorge Freire 170 – Costa Azul</p>
                <p>Salvador Bahia.</p>  
                <p>Telefone: (071) 8842-7318 / 9127-9923</p> 
            </div>
            <div class="col-sm-2  col-sm-offset-5"><img src="<?php echo base_url('assets/imagens/rede_rodape.png'); ?>" /></div>
        </div>
    </div>
</footer>

<!-- JavaScript plugins -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nivo.slider.pack.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            slices: 16, // For slice animations
            boxCols: 8, // For box animations
            boxRows: 4, // For box animations
            animSpeed: 500, // Slide transition speed
            pauseTime: 6000, // How long each slide will show
            startSlide: 0, // Set starting Slide (0 index)
            directionNav: true, // Next & Prev navigation
            controlNav: false, // 1,2,3... navigation
            controlNavThumbs: false, // Use thumbnails for Control Nav
            pauseOnHover: false, // Stop animation while hovering
            randomStart: false // Start on a random slide
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#nivel1txt').attr("disabled", true);
        $('#nivel1txt').css("background-color", "#EAEAEA");
        $('#nivel').css("display","none");
        $("#nivel1").click(function() {
            $('#nivel1txt').attr("disabled", false);
            $('#nivel1txt').css("background-color", "#FFF");
            $('#nivel').css("display","block");
        });
        $("#nivel2").click(function() {
            $('#nivel1txt').attr("disabled", true);
            $('#nivel1txt').css("background-color", "#EAEAEA");
            $('#nivel').css("display","none");
        });
        $("#nivel3").click(function() {
            $('#nivel1txt').attr("disabled", true);
            $('#nivel1txt').css("background-color", "#EAEAEA");
            $('#nivel').css("display","none");
        });
    });
</script>

</body>
</html>
