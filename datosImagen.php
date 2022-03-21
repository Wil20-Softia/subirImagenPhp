<?php

	if(isset($_POST['subir'])){
		//Recibimos datos de la Imagen
		$nombre_imagen=$_FILES['img']['name'];
		$tipo_imagen=$_FILES['img']['type'];
		$tamagno_imagen=$_FILES['img']['size'];

		//Ruta de la Carpeta Destino del Servidor.
		$carpetaDestino=$_SERVER['DOCUMENT_ROOT'].'/Subir_Imagen/Imagenes_servidor/';

		//Mover el archivo de la Carpeta Temporal a la Carpeta Destino
		move_uploaded_file($_FILES['img']['tmp_name'], $carpetaDestino.$nombre_imagen);
		header("Location: index.php");
	}else{
		echo "No se Ha subido la Imagen al Servidor";
	}

?>