<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 col-md-offset-1">
                <h5 class="title">Centro Comercial Doña Mirian</h5>
                <p>
                    <strong>C.C. Doña Mirian Barinas</strong>. Llegamos para hacerte la vida más fácil a la hora de comprar y compartir en familia. 
                    Somos el Centro Comercial más exclusivo, Av Colombia, Alto Barinas Norte.
                </p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 col-md-offset-1">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="nosotros">Nosotros</a></li>
                    <li><a href="servicios">Servicios</a></li>
                    <li><a href="galeria">Galeria</a></li>
                    <li><a href="eventos">Eventos</a></li>
                    <li><a href="feria">Feria de Comida</a></li>
                    <li><a href="horarios">Horarios</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Planta Baja</h5>
                <ul>
                    <li><a href="#!">El Bodegón de la Colombia</a></li>
                    <li><a href="tiendas/ferredima">Ferredima</a></li>
                    <li><a href="tiendas/mom-yogurt">Mom Yogurt</a></li>
                    <li><a href="tiendas/strato-ambienti">Strato Ambienti</a></li>
                    <li><a href="tiendas/exquisiteces-pan">Panadería, Pastelería y Exquisiteces 2015</a></li>
                    <li><a href="tiendas/art-kids">Art Kids</a></li>
                    <li><a href="tiendas/planet-for-kids">Planet for Kids</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Primer Piso</h5>
                <ul>
                    <li><a href="tiendas/royal-party">Royal Party</a></li>
                    <li><a href="tiendas/royal-toys">Royal Toys</a></li>
                    <li><a href="tiendas/latinas">Latinas</a></li>
                    <li><a href="tiendas/aldi">Aldi</a></li>
                    <li><a href="tiendas/grillrestobar">Grillrestobar</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
            
            <!--Fifth column-->
            <div class="col-md-3 col-md-offset-1">
                <a href="#"><img src="assets/img/logo/Logo_amarillo.jpg" class="img-fluid text-center"></a>
            </div>
            <!--/.Fifth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5>Ubícanos en:</h5>
            </li>
            <li><strong>Av. Colombia, Alto Barinas Norte. Barinas</strong></li>
            <li><a href="https://www.google.co.ve/maps/place/CC+Do%C3%B1a+Miriam/@8.6209013,-70.2610485,17z/data=!3m1!4b1!4m5!3m4!1s0x8e7b579ea7b447cb:0x6f9f76c0d47ecfb5!8m2!3d8.6209013!4d-70.2588598?hl=es-419" target="_blank">
                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
            </a></li>
        </ul>
        <ul>
            <li>
                <h5>Abrimos:</h5>
            </li>
            <li><strong>Miércoles a Domingo | 8am a 9pm.</strong></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li>
                <a class="btn-floating btn-small btn-ins" href="https://www.instagram.com/ccdonamirian" target="_blank">
                    <i class="fa fa-instagram"> </i>
                </a>
            </li>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2016: <a href="http://www.ccdonamirian.com"> Centro Comercial Doña Mirian </a> |
            Designed By: <a href="http://www.xantium.com.ve"> Xantium Technologies</a>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->



<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="assets/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/newmdb.min.js"></script>

<!-- Lightgallery plugin javascript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/lightgallery/1.3.5/js/lightgallery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.min.js"></script>

<script>
    $(".button-collapse").sideNav();

    var el = document.querySelector('.custom-scrollbar');

    Ps.initialize(el);

    $("#lightgallery").lightGallery(); 

</script>

<script>

    function obtener_hora() {
        var tiempo = new Date();
        var hora   = tiempo.getHours();
        return hora;
    };

    function obtener_minuto() {
        var tiempo = new Date();
        var minuto = tiempo.getMinutes();
        return minuto;
    };

    var seccion = (window.location.pathname).split('/');
    
    switch(seccion[2]) {
        case 'galeria':
            imagen = 'dia';            
            break;

        case 'contacto':
            imagen = 'fondo2';
            break;

        case 'servicios':
            imagen = 'navidad';            
            break;

        case 'tiendas':
            imagen = 'fondo_default';
            break;

        case 'index.php':
            //if (obtener_hora() <= 18 && obtener_minuto() == 00)
            if (obtener_hora() < 18)
            {
                imagen = 'navidad_dia';
            }
            else
            {
                imagen = 'navidad';
            }
            break;

        default:
            //if (obtener_hora() <= 18 && obtener_minuto() == 00)
            if (obtener_hora() < 18)
            {
                imagen = 'navidad_dia';
            }
            else
            {
                imagen = 'navidad';           
            }
            break;

    }
    
    if ($(window).width() <= 480) {
        $("body").css('background', 'url("assets/img/fondo/fondo_default.jpg") no-repeat center center fixed');
        $('body').css({"background-size":"cover"});
    } else {
        $("body").css('background', 'url("assets/img/fondo/'+ imagen +'.jpg") no-repeat center center fixed');
        $('body').css({"background-size":"cover"});
    }
       

    $('#myModal').modal('show');

</script>    
<div class="drag-target" style="-moz-user-select: none; left: 0px;"></div>

</body>

</html>