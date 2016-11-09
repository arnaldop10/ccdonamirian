<main class="pb">
    
<!--Section: Contact v.1-->
<section class="section mb-4">

    <!--Section heading-->
    <h1 class="section-heading">Contáctanos</h1>
    <!--Section sescription-->
    <p class="section-description mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

    <div class="row">

        <!--First column-->
        <div class="col-md-5">

            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <!--Header-->
                    <div class="form-header red darken-4">
                        <h3><i class="fa fa-envelope"></i> Escribenos:</h3>
                    </div>

                    <p>Si deseas conocer más de nosotros, envia tu comentario.</p>
                    <br>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control">
                        <label for="form3">Tu nombre</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Tu correo</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control">
                        <label for="form32">Teléfono</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea"></textarea>
                        <label for="form8">Motivo</label>
                    </div>

                    <div class="text-xs-center">
                        <button class="btn btn-deep-orange">Enviar</button>
                    </div>

                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-7">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" style="height: 400px"></div>

            <br>
            <!--Buttons-->
            <div class="row text-xs-center">
                <div class="col-md-4">
                    <a class="btn-floating btn-small yellow darken-4"><i class="fa fa-map-marker"></i></a>
                    <p>Av. Colombia, Alto Barinas Norte</p>
                    <p>Barinas - Venezuela</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small yellow darken-4"><i class="fa fa-phone"></i></a>
                    <p>+ 01 234 567 89</p>
                    <p>Miercoles - Viernes, 12:00-9:00</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small yellow darken-4"><i class="fa fa-envelope"></i></a>
                    <p>ccdonamirian@gmail.com</p>
                    <p>sale@gmail.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>
<!--/Section: Contact v.1-->
</main>


<script>
  function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map-container'), {
      center: {lat: 8.620901, lng: -70.258677},
      scrollwheel: false,
      zoom: 16
    });

    var marker = new google.maps.Marker({
    position: {lat: 8.620901, lng: -70.258677},
    map: map,
    title: 'CC Doña Mirian'
  });

  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCdPOvNJ48etNJgXVyuDOwAdkNO9hS0ZM&callback=initMap"
async defer></script>
