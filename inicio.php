<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/site.css" type="text/css">
	<title>Práctica 1 - DWES</title>
</head>
<body class="bg-secondary">
	<div class="text-center bg-dark">
		<a><b class="text-info text-warning" style="font-size:30px;">NOSTROMO</b></a>
	</div>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-4 col-12">
				<h1 class="text-light text-center"><u>Tienda de Cómics</h1></u>
			</div>
		</div>
		<form action="carrito.php" method="POST">
			<div class="row">
				<div class="col-12 mt-4">
					<div class="form-group row justify-content-center">
						<div class="col-md-5">
							<label for="selecciona" class="col-form-label text-light">Selecciona un cómic:</label>
							<select class="form-control" name="articulos">
								<option value=""></option>
								<option value="Anaïs Nin. En un mar de mentiras-1.00">Anaïs Nin. En un mar de mentiras</option>
								<option value="Invisible Kingdom 1: En el camino-2.00">Invisible Kingdom 1: En el camino</option>
								<option value="Jimmy Olsen, el amigo de Superman-3.00">Jimmy Olsen, el amigo de Superman</option>
								<option value="Little Bird-2.50">Little Bird</option>
								<option value="Las montañas de la locura-4.00">Las montañas de la locura</option>
								<option value="Semillas-1.00">Semillas</option>
								<option value="Temporada de rosas-1.50">Temporada de rosas</option>
								<option value="Tito Andronico-2.50">Tito Andronico</option>
								<option value="Tres Jokers-5.00">Tres Jokers</option>
								<option value="Undiscovered Country-3.00">Undiscovered Country</option>
								<option value="X de espadas-1.00">X de espadas</option>
							</select>
						</div>
					</div>
					<div class="form-group row justify-content-center">
						<div class="col-md-5 col-mt-2">
							<label for="cantidad" class=" col-form-label text-light">Cantidad:</label>
							<input type="number" class="form-control" name="cantidad" size="10" max="10" min="1" value="0">
						</div>
					</div>
					<div class="mx-auto mt-4 col-8 text-center">
						<input type="submit" class="btn btn-info bg-danger" value="Añadir a la cesta" name="btnAgregar">
					</div>
				</div>
			</div>
		</form>
		<hr/>
	</div>
</body>
</html>