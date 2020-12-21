<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Pruebas</title>
		<style type="text/css">
			table,td, th{
				border: solid;
			}
		</style>
	</head>
	<body>
		<?php
			$servidor="localhost";
			$usuario="sxdgm2qe_usertienda";
			$contrasena="Udu76xQuJ]~P";
			$baseDeDatos="sxdgm2qe_mercadillo_parroquial";

			$con=mysqli_connect($servidor,$usuario,$contrasena);
			$conectado=mysqli_select_db($con,$baseDeDatos);
			if(!$conectado){
				echo '<script>alert("ERROR");</script>';
			}else{
				echo "Conectado correctamente";
			}
		?>
		<h3>Tabla Tabla</h3>
		<table>
			<?php
				$contador = 0;
				$sql="SHOW FULL TABLES FROM sxdgm2qe_mercadillo_parroquial";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$contador++;
						$nombreTabla = $row["Tables_in_sxdgm2qe_mercadillo_parroquial"];
						$tipoTabla = $row["Table_type"];
						echo "<tr><td> $nombreTabla </td><td> $tipoTabla </td></tr>";
					}
				}
			?>
		</table>

		<h3>Tabla Productos</h3>
		<table>
			<?php
				$sql="select count(id) from productos";
				$result=mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				echo "<tr><th> $row[0] </th></tr>";
				for($i=1;$i<$row[0];$i++){
					$sql="select id,nombre,Descripcion,Precio,Categoria from productos where id = $i";
					$result=mysqli_query($con,$sql);
					$row2 = mysqli_fetch_array($result);
					echo "<tr><td> $row2[0] </td><td> $row2[1] </td><td> $row2[2] </td><td> $row2[3] </td><td> $row2[4] </td></tr>";
				}
			?>
		</table>

		<h3>Tabla Imagenes</h3>
		<table>
			<?php
				$sql="select count(id) from imagenes";
				$result=mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				echo "<tr><th> $row[0] </th></tr>";
				for($i=1;$i<$row[0];$i++){
					$sql="select id,nombre_foto from imagenes where id = $i";
					$result=mysqli_query($con,$sql);
					$row2 = mysqli_fetch_array($result);
					echo "<tr><td> $row2[0] </td><td> $row2[1] </td></tr>";
				}
			?>
		</table>

		<h3>Tabla Relacion Producto-Imagenes</h3>
		<table>
			<?php
				$sql="select count(ID_producto) from relacion_producto_imagen";
				$result=mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				echo "<tr><th> $row[0] </th></tr>";
				$sql="select ID_producto, ID_imagen from relacion_producto_imagen";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$idProducto = $row["ID_producto"];
						$idImagen = $row["ID_imagen"];
						echo "<tr><td> $idProducto </td><td> $idImagen </td></tr>";
					}
				}
			?>
		</table>
	</body>
</html>