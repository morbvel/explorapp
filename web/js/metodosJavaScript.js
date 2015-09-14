window.onload = function() {
  
    function bgadj(){
         
        var videoActualWidth = video.getBoundingClientRect().width;
        var videoActualHeight = video.getBoundingClientRect().height;
              
        var ratio =  videoActualWidth / videoActualHeight;         
         
        if ((window.innerWidth / window.innerHeight) < ratio){
          
            video.setAttribute("style", "width: auto");
            video.setAttribute("style", "height: 100%");
              
            //si el vídeo es mas ancho que la ventana lo centro. Esta parte es opcional
			if (videoActualWidth > window.innerWidth){
              
                var ajuste = (window.innerWidth - videoActualWidth)/2;                
                
                video.setAttribute("style", "left:"+ajuste+"px");          
            }
          
        }
        else{ 
          
            video.setAttribute("style", "width: 100%");
			video.setAttribute("style", "height: auto");
            video.setAttribute("style", "left: 0");
  
        }
          
    }
 
    //vuelvo a llamar a la función  bgadj() al redimensionar la ventana
    window.onresize = function() {
        bgadj();
  
    }
  
}

function empezarInput(){
	document.getElementById("inputNombre").style.display = 'inherit';
	document.getElementById("spanNombre").style.display = 'none';
	document.getElementById("inputApellido1").style.display = 'inherit';
	document.getElementById("inputApellido2").style.display = 'inherit';
	document.getElementById("spanApellido").style.display = 'none';
	document.getElementById("inputSexo").style.display = 'inherit';
	document.getElementById("spanSexo").style.display = 'none';
	document.getElementById("inputFechaNacimiento").style.display = 'inherit';
	document.getElementById("spanFechaNacimiento").style.display = 'none';
	document.getElementById("inputDNI").style.display = 'inherit';
	document.getElementById("spanDNI").style.display = 'none';
	document.getElementById("inputTelefono").style.display = 'inherit';
	document.getElementById("spanTelefono").style.display = 'none';
	document.getElementById("inputDireccion").style.display = 'inherit';
	document.getElementById("spanDireccion").style.display = 'none';
				
	document.getElementById("aceptarCambiosPerfil").style.display = 'inherit';
	document.getElementById("botonEditarPerfil").style.display = 'none';
	document.getElementById("cancelarCambiosPerfil").style.display = 'inherit';
	document.getElementById("eliminarDatosPerfil").style.display = 'inherit';
}

function cancelarInput(){
	document.getElementById("inputNombre").style.display = 'none';
	document.getElementById("spanNombre").style.display = 'inherit';
	document.getElementById("inputApellido1").style.display = 'none';
	document.getElementById("inputApellido2").style.display = 'none';
	document.getElementById("spanApellido").style.display = 'inherit';
	document.getElementById("inputSexo").style.display = 'none';
	document.getElementById("spanSexo").style.display = 'inherit';
	document.getElementById("inputFechaNacimiento").style.display = 'none';
	document.getElementById("spanFechaNacimiento").style.display = 'inherit';
	document.getElementById("inputDNI").style.display = 'none';
	document.getElementById("spanDNI").style.display = 'inherit';
	document.getElementById("inputTelefono").style.display = 'none';
	document.getElementById("spanTelefono").style.display = 'inherit';
	document.getElementById("inputDireccion").style.display = 'none';
	document.getElementById("spanDireccion").style.display = 'inherit';
				
	document.getElementById("aceptarCambiosPerfil").style.display = 'none';
	document.getElementById("botonEditarPerfil").style.display = 'inherit';
	document.getElementById("cancelarCambiosPerfil").style.display = 'none';
	document.getElementById("eliminarDatosPerfil").style.display = 'none';
}

function mostrarCapaSubirImagenes(){
	$("#capaSubirImagenes").fadeIn("slow");
	return false;
}