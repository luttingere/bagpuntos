with(document.registro1){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Ingresar el R.I.F. de Aliado Comercial");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Ingresar Fecha de la factura");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Ingresar Número de la factura");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Ingresar monto total de la factura");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Ingresar confirmación de monto total de la factura");
			confirm_password.focus();
		}

 	if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los montos no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
