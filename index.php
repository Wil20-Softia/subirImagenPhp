<!DOCTYPE html>
<html lang="es-VE">
<head>
	<meta charset="UTF-8">
	<title>Subir Imagenes al Servidor</title>
	<style>
		table{
			margin:auto;
			width:450px;
			border:2px dotted #F11212;
		}
	</style>
</head>

<body>
	<form enctype="multipart/form-data" action="datosImagen.php" method="post">
		<table>
			<tr>
				<td>
					<label for="imagen">Imagen:</label>
				</td>
				<td>
					<input name="img" type="file" size="20">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:'center'">
					<input name="subir" type="submit" value="Subir Imagen">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>