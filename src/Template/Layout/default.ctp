<!DOCTYPE html>
<html>
<head>
    <title>
        <?= h($this->fetch('title')) ?>
    </title>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <?= $this->Html->css('reset.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('layout.css') ?>

    <!-- JS -->
    <?= $this->Html->script('jquery-1.6.3.min.js') ?>
    <?= $this->Html->script('cufon-yui.js') ?>
    <?= $this->Html->script('cufon-yui.js') ?>
    <?= $this->Html->script('cufon-replace.js') ?>
    <?= $this->Html->script('NewsGoth_400.font.js') ?>
    <?= $this->Html->script('NewsGoth_700.font.js') ?>
    <?= $this->Html->script('Vegur_300.font.js') ?>
    <?= $this->Html->script('FF-cash.js') ?>
    <?= $this->Html->script('jquery.easing.1.3.js') ?>
    <?= $this->Html->script('tms-0.3.js') ?>
    <?= $this->Html->script('tms_presets.js') ?>


</head>

<body>
<header>
    <div class="main">
        <div class="wrapper">
            <h1>
                <?= $this->Html->image('bagpuntosimage.jpg') ?>
            </h1>
            <nav>
                <ul class="menu">
                    <li><?= $this->Html->link('Inicio', '/pages/home', ['class' => 'active']); ?></li>
                    <li><?= $this->Html->link('Aliados', '/pages/aliados'); ?></li>
                    <li><?= $this->Html->link('Contacto', '/pages/contacto'); ?></li>
                    <li><?= $this->Html->link('Usuarios', '/registration/registration'); ?></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="ic">More Website Templates @ TemplateMonster.com - October 31, 2011!</div>
</header>

<?= $this->fetch('content') ?>


<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="wrapper border-bot2 margin-bot">
            <article class="fcol-1">
                <div class="indent-left">
                    <h3 class="color-1">Redes Sociales</h3>
                    <ul class="list-services">
                        <li><a href="#">Facebook</a></li>
                        <li><a class="it-2" href="#">Twitter</a></li>
                        <li><a class="it-3" href="#">Linked In</a></li>
                        <li class="last-item"><a class="it-4" href="#">Del.ico.us</a></li>
                    </ul>
                </div>
            </article>
            <article class="fcol-2">
                <figure class="img-border"><?= $this->Html->image('pages/page1-img1.jpg') ?></figure>
                <center><p class="p3">Publicidad</p></center>

            </article>
            <article class="fcol-3">
                <h3 class="color-1">Aliados de la semana</h3>
                <ul class="list-3">
                    <li><a href="#">Nombre de Aliado 01</a> <span> - Ciudad</span></li>
                    <li><a href="#">Nombre de Aliado 02</a> <span> - Ciudad</span></li>
                    <li><a href="#">Nombre de Aliado 03</a> <span> - Ciudad</span></li>
                    <li class="last-item"><a href="#">Nombre de Aliado 04</a> <span> - Ciudad</span></li>

                </ul>
            </article>
        </div>
        <div class="aligncenter">
            Design Studio &copy; 2011 <a rel="nofollow" class="color-1" href="http://www.templatemonster.com/"
                                         target="_blank">Website Template</a> by TemplateMonster.com
        </div>
    </div>
</footer>
</body>
</html>