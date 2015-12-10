function revisarPass(){
	var pass = document.getElementById('pass').value;
	var resultado = document.getElementById('resultados');

	if(pass == 'admin'){
		alert("correcto");
		window.location = "control.php";
		//resultado.innerHTML = '<a href="#">Dar de alta</a><br><a href="#">Dar de baja</a><br><a href="#">Cambios</a>';
	}
}