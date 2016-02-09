<?php
$this->assign('title', 'Contacto :: BagPuntos');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->script('jquery.googlemaps1.01.js') ?>
    <?= $this->Html->script('http://maps.google.com/maps?file=api&amp;v=2&amp;hl=en&amp;sensor=true&amp;key=ABQIAAAAWCGzSMrk7YDL2KSdECDFthRCU6CW1wRB4NQsX5PSi053h5zzZhQIZ5ivn4VAQx53xyYuNrvkOmgO1w') ?>
    <script>
        $(document).ready(function () {
            $('#map_canvas').googleMaps({
                latitude: 40.68221,
                longitude: -73.971212,
                markers: {
                    latitude: 40.68221,
                    longitude: -73.971212
                }
            });
        });
    </script>
    <?= $this->Html->script('validation.js') ?>
</head>
<body id="page5">
<section id="content">
    <div class="main">
        <div class="indent-left">
            <div class="wrapper">
                <article class="col-1">
                    <h3>&iquest;Deseas contactarnos?</h3>
                    <div class="p1">
                        <figure class="img-border">
                            <div id="map_canvas"></div>
                        </figure>
                        <div class="clear"></div>
                    </div>
                    <dl>
                        <dt>V&iacutea Correo electr&oacutenico</dt>
                        <dd><a class="link-2" href="#">bagpuntos@gmail.com</a></dd>
                        <dt>V&iacutea telef&oacutenica</dt>
                        <dd>+58 212-898-22-53</dd>
                    </dl>
                </article>
                <article class="col-2">
                    <h3>Escr&iacutebenos</h3>
                   
                    <form  name="registro5" id="contact-form" method ="POST" action="" onSubmit="return validation();">
                        <fieldset>
                            <label>
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                            </label>
                            
                            <label>
                                <input type="text" name="email" id="email" placeholder="E-mail" />
                            </label>
                            
                            <label>
                                <input type="text" name="telefono" id="telef" placeholder="Telefono"/>
                            
                            </label>
                            <textarea type="text" name="mensaje" id="mensaje"placeholder="Mensaje"></textarea>
                            
                            <div class="buttons-wrapper">
                                <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a>
                                <a class="button" onClick="document.getElementById('contact-form').reset()">Borrar</a>
                             </div>
                        </fieldset>
                    </form>
                </article>
            </div>
        </div>
    </div>
</sec id="mensaje">
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
    $(window).load(function () {
        $('.slider')._TMS({
            duration: 800,
            easing: 'easeOutQuart',
            preset: 'diagonalExpand',
            slideshow: 7000,
            pagNums: false,
            pagination: '.pagination',
            banners: 'fade',
            pauseOnHover: true,
            waitBannerAnimation: true
        });
    });
</script>
</body>
</html>