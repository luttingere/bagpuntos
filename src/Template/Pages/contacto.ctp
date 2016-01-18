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
                    <form id="contact-form">
                        <fieldset>
                            <label>
                                <input type="text" value="Nombre" onBlur="if(this.value=='') this.value='Name'"
                                       onFocus="if(this.value =='Name' ) this.value=''"/>
                            </label>
                            <label>
                                <input type="text" value="E-mail" onBlur="if(this.value=='') this.value='Email'"
                                       onFocus="if(this.value =='Email' ) this.value=''"/>
                            </label>
                            <label>
                                <input type="text" value="Telefono" onBlur="if(this.value=='') this.value='Phone'"
                                       onFocus="if(this.value =='Phone' ) this.value=''"/>
                            </label>
                            <textarea onBlur="if(this.value=='') this.value='Message'"
                                      onFocus="if(this.value =='Message' ) this.value=''">Mensaje</textarea>
                            <div class="buttons-wrapper">
                                <a class="button" onClick="document.getElementById('contact-form').reset()">Borrar</a>
                                <a class="button" onClick="document.getElementById('contact-form').submit()">Enviar</a>
                            </div>
                        </fieldset>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>
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