<nav class="sandbox">
	<div id="animateTest">
		<a href="index.php" id="T">HOME</a>
		<a href="">ipsum</a>
		<a href="">dolor</a>
		<a href="">sit amet,</a>
		<a href="">consectetur</a>
		<a href="">adipisicing</a>
		<a href="">elit,</a>
	</div>
</nav>


<!--CÓDIGO CSS PARA HACER QUE LA BARRA DE NAVEGACIÓN DE LA PÁGINA SIGA EL TRAYECTO DEL SCROLL-->
<style type="text/css">
    .sandbox {
        position: relative;
        z-index: 999;
     }

    .fixed {
        position: fixed !important;
        top: 0;
        right: 0;
        left:0;
        width: 100%;
    }
</style>

<!--SE MANDA A LLAMAR LAS LIBRERIAS DE JQUERY-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!--CÓDIGO JQUERY PARA HACER QUE LA BARRA DE NAVEGACIÓN DE LA PÁGINA SIGA EL TRAYECTO DE SCROLL-->
<script type="text/javascript">
    function testAnim(x) {
        $('#animateTest').removeClass().addClass(x);
        var wait = window.setTimeout( function(){
            $('#animateTest').removeClass()},
            1300
        );
    }

    $(function(){
        $pos = $('.sandbox').offset().top - 0;

        $(window).on('scroll', function(){
            if($(window).scrollTop() >= $pos) {
                $('.sandbox').addClass('fixed');
            } else {
                $('.sandbox').removeClass('fixed');
            }
        });
    });   
</script>