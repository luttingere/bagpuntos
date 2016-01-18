<?php
$this->assign('title', 'Home :: BagPuntos');
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        $(function () {
            $('.close').bind('click', function () {
                $(this).parent().show().fadeOut(500);
            });
        });
    </script>
</head>
<body id="page1">
<!--==============================content================================-->
<section id="content">
    <div class="main">
        <div class="slider-wrapper">
            <div class="slider">
                <ul class="items">
                    <li>
                        <?= $this->Html->image('slider/slider-img1.jpg') ?>
                        <strong class="banner">
                            <a class="close" href="#">x</a>
                            <strong>Progress</strong>
                            <span>Business Company</span>
                            <b class="margin-bot">Lorem ipsum dolor sit amet, consectetur adipisicing elitsedo eiusmod
                                tempor incididunt ut labore dolore magna aliqua enim ad minim veniam.</b>
                            <a class="button2" href="#">Read More</a>
                        </strong>
                    </li>
                    <li>
                        <?= $this->Html->image('slider/slider-img2.jpg') ?>
                        <strong class="banner">
                            <a class="close" href="#">x</a>
                            <strong>SpaSalon</strong>
                            <span>popular Procedures</span>
                            <b class="margin-bot">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat duis aute irure dolor in reprehenderit<br> in voluptate velit.</b>
                            <a class="button2" href="#">Read More</a>
                        </strong>
                    </li>
                    <li>
                        <?= $this->Html->image('slider/slider-img3.jpg') ?>
                        <strong class="banner">
                            <a class="close" href="#">x</a>
                            <strong>GoodCook</strong>
                            <span>Online cooking recipes</span>
                            <b class="margin-bot">Esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia <br>deserunt mollit anim.</b>
                            <a class="button2" href="#">Read More</a>
                        </strong>
                    </li>
                    <li>
                        <?= $this->Html->image('slider/slider-img4.jpg') ?>
                        <strong class="banner">
                            <a class="close" href="#">x</a>
                            <strong>HandyMan</strong>
                            <span>Home Services</span>
                            <b class="margin-bot">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</b>
                            <a class="button2" href="#">Read More</a>
                        </strong>
                    </li>
                </ul>
            </div>
            <ul class="pagination">
                <li><a class="item-1" href=""><strong>01</strong></a></li>
                <li><a class="item-2" href=""><strong>02</strong></a></li>
                <li><a class="item-3" href=""><strong>03</strong></a></li>
                <li><a class="item-4" href=""><strong>04</strong></a></li>
            </ul>
        </div>
        <div class="border-bot1 img-indent-bot">
            <h2>Queremos ser parte de tu vida</strong></h2>
        </div>
        <div class="wrapper">
            <article class="col-1">
                <h3></h3>
                <div class="indent-left">
                    <h3><span class="icon-user"></span>Cat&aacutelogo de Premios</h3>
                    <ul class="list-1">
                        <li><a href="catalogo.html">Todos</a></li>
                        <li><a href="#">Entretenimiento</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Moda</a></li>
                        <li><a href="#">Restaurantes</a></li>
                        <li><a href="#">Turismo</a></li>
                        <li class="last-item"><a href="#">Otros</a></li>
                    </ul>
                </div>
            </article>
            <article class="col-2">
                <h3>Noticias</h3>
                <div class="p1">
                    <figure class="img-border">
                        <?= $this->Html->image('pages/page1-img1.jpg') ?>
                    </figure>
                    <div class="clear"></div>
                </div>
                <p class="img-indent-bot">Ent&eacuterate de los &uacuteltimos concursos y premios que tenemos
                    disponibles.</p>
                <a class="button" href="#">Ver detalles</a>
            </article>
            <article class="col-3">
                <div class="indent-top">
                    <ul class="list-2">
                        <li>
                            <a class="item" href="bagpuntos.html">&iquest;Qu&eacute es Bagpuntos?</a>
                            <span>Conoce los detalles del programa, sus Afiliados y Aliados Comerciales.</span>
                        </li>
                        <li>
                            <a class="item" href="acumular.html">&iquest;C&oacutemo acumulo puntos?</a>
                            <span>Suma puntos con cualquier compra realizada en Los Aliados Comerciales.</span>
                        </li>
                        <li class="last-item">
                            <a class="item" href="canje.php">&iquest;C&oacutemo canjear mis puntos?</a>
                            <span>Usa tus puntos como dinero para adquirir lo que deseas.</span>

                        </li>
                    </ul>
                </div>
            </article>
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

