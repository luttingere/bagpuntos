<html>
<head>
    <title>Formulario de Registro</title>
   <?=$this->Html->css('bagpuntos.css')?>
<!--    <?//=$this->Html->css('bootstrap.min.css')?>-->

</head>
<body>
<div class="container">
        <div class="colpanel toTheMiddle">
            <h2>Acumular puntos</h2>
            <form role="form" name="registro1" action="#" method="post">
                <div class="form-group">
                    <label for="username" >R.I.F. de Aliado</label>
                    <input type="text" id="username" name="username" placeholder="R.I.F. de Aliado">
                </div>
                <div class="form-group">
                    <label for="fullname" >Fecha de Factura</label>
                    <input type="text" id="rif" name="fullname" placeholder="Fecha de Factura">
                </div>
                <div class="form-group">
                    <label for="email">Número de Factura</label>
                    <input type="text"  id="fecha" name="email" placeholder="Número de Factura">
                </div>
                <div class="form-group">
                    <label for="password">Monto total de Factura</label>
                    <input type="text" id="nfact" name="password" placeholder="Monto de Factura">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmar monto de Factura</label>
                    <input type="text" id="confirm_password" name="confirm_password" placeholder="Confirmar monto de Factura">
                </div>

                <button type="submit">Guardar</button>
            </form>
    </div>
</div>
</body>
</html>
