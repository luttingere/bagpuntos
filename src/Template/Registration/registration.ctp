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
            <form role="form" name="registro2" action="registration/save" method="POST" />
                <div class="form-group">
                    <label for="rif" >R.I.F. de Aliado</label>
                    <input type="text" id="rif" name="rif" placeholder="R.I.F. de Aliado" />
                </div>
                <div class="form-group">
                    <label for="fecha_f" >Fecha de Factura</label>
                    <input type="text" name="fecha_f" id="fecha" placeholder="AAAA-MM-DD" />
                </div>
                <div class="form-group">
                    <label for="numero_f">Número de Factura</label>
                    <input type="text"   id="numero_f" name="numero_f" placeholder="Número de Factura">
                </div>
                <div class="form-group">
                    <label for="monto_f">Monto total de Factura</label>
                    <input type="text" id="monto" name="monto_f" placeholder="Monto de Factura" />
                </div>
                <div class="form-group">
                    <label for="confirm_f">Confirmar monto de Factura</label>
                    <input type="text" id="confirm" name="confirm_f" placeholder="Confirmar monto de Factura" />
                </div>
                     <input type="submit" value="Guardar" a id="enviar" onClick="document.getElementById('contact-form').submit()">
            </form>
                <!--JS-->
            <?= $this->Html->script('valida_registro1.js') ?>   
    </div>
</div>
</body>
</html>
