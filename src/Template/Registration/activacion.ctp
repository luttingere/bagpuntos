<?php
$this->assign('title', 'Activacion de cuenta :: BagPuntos');
?>
<!DOCTYPE html>
<html>
<head>
      <?=$this->Html->css('bagpuntos.css')?>

</head>
<body>
<!--==============================content================================-->
      

       <div class="container3">
           <div class="colpanel1 toTheMiddle">
           		<div id="indent">
                   <h2>Activa tu cuenta</h2>
               	</div>
               
               <form role="registro5" name="registro1" action="Registration/save" method="POST">
                  
                   <div class="form-activo">
                       <label for="Correo">Correo Electronico</label>
                       <input type="email" id="email" name="email" placeholder="Ingrese su Correo">
                   </div>

                   <div class="form-activo">
                       <label for="codigo" >Codigo</label>
                       <input type="text" id="codigo" name="codigo" placeholder="Codigo">
                   </div>

                   <div id="buttons-activar">
                        <input type="submit" value="Registrar" a id="enviar" onClick="document.getElementById('contact-form').submit()">
                   </div>
               </form>
           </div>
       </div>  
         
                   
   </body>
   </html>

