<?php
$this->assign('title', 'Registro :: BagPuntos');
?>
<!DOCTYPE html>
<html>
<head>
      <?=$this->Html->css('bagpuntos.css')?>
      <?= $this->Html->script('valida_registro.js') ?>

</head>
<body>
<!--==============================content================================-->
        <div class="wrapper">
            <article class="col-1">
                <h3></h3>
                <div class="indent-left">
                    <h3><span class="icon-user"></span>Para continuar siga estos sencillos pasos</h3>
                    <ul class="list">
                        <li type="1">Registrate: Completa  el formulario con tus datos basicos</li>
                        <li type="1">Activa tu cuenta: ingresa el codigo que recibiste en tu correo electronico.</li>
                        <li>¡Listo! Puedes ingresar a tu cuenta. Comienza a disfrutar de los siguientes beneficios.</li>
                      </ul>
                </div>
         </div>  
              <div class="container2">
        <div class="colpanel2 toTheMiddle">
   
            <form role="form" name="registro" action="Registration/save" method="POST">
               
                <div class="form-group">
                    <label for="Correo">Correo Electronico</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su Correo">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="pass" name="pass" placeholder="Ingrese su password">
                </div>
                 <div class="buttons-w">
                     <input type="submit" value="Ingresar" class="button" onClick="document.getElementById('contact-form').submit()">
                       <input type="submit" value="Olvide mi contraseña" class="button" onClick="document.getElementById('contact-form').submit()">
                </div>
            </form>
        </div>
     </div>   

    <div class="container1">
        <div class="colpanel1 toTheMiddle">
   
            <form role="form" name="form"  id="contactForm" action="Registration/save" method="POST">
                <div class="form-group">
                    <label for="username" >Campo</label>
                    <input type="text" id="" name="" placeholder="">
                </div>
               
                <div class="form-group">
                    <label for="fullname" >Nombre</label>
                    <input type="text" name="nombre" id="username" placeholder="Ingrese su Nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="fullname">Apellido</label>
                    <input type="text"  id="apellido" name="fullname" placeholder="Ingrese su Apellido" required>
                </div>
                
                <div class="form-group">
                    <label for="fecha_n">Fecha de nacimiento</label>
                    <input type="text" id="fecha_n" name="fecha_n" placeholder="Fecha de nacimiento" required>
                </div>
               
                <div class="form-group">
                    <label for="Correo">Correo Electronico</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su Correo" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese su password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña</label>
                    <input type="password" id="confirm_password" name="confirm_pass" placeholder="Ingrese su password" required>
                </div>
                
                <div class="check">
                    <input type="checkbox" id="caja1" name="terminos">Acepto terminos y condiciones
                </div>

                <div class="buttons-wrapper">  
                  <input type="submit" value="Enviar"  id="enviar" id="cfsubmit">
                </div>
            </form>
        </div>
    </div>  
      
                
</body>
</html>

