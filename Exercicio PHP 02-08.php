<!doctype html>
<html>
	<head>
		<title>Exercício PHP</title>
		<!-- Tag para responsividade mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container text-center">
			<label class="form-label col-form-label-lg">Soma e Média Aritimética</label>
			<div class="row align-items-start">
				<form action="media.php" method="post">
					<label class="col-form-label-lg">Digite os valores</label>
					<div class="row g-2 mb-2 align-items-center">
						<div class="col">
							<input class="form-control" type="number" name="valor1"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor2"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor3"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor4"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor5"></input>
						</div>
					</div>
					<div class="row g-2 mb-2 align-items-center">
						<div class="col">
							<input class="form-control" type="number" name="valor6"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor7"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor8"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor9"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="valor10"></input>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-auto ">
							<button class="btn btn-outline-secondary" type="submit">Calcular</button>	
						</div>						
					</div>
				</form>
			</div>
		</div>

		<div class="container text-center ">
			<hr>
			<label class="form-label col-form-label-lg">Calculadora Básica</label>
			<form action="calc.php" method="post">
				<input class="form-control" type="number" name="valor01">
				<input class="form-control" type="number" name="valor02">
				<button class="btn btn-outline-secondary" type="submit" value="+" name="operador">+</button>
				<button class="btn btn-outline-secondary" type="submit" value="-" name="operador">-</button>
				<button class="btn btn-outline-secondary" type="submit" value="*" name="operador">*</button>
				<button class="btn btn-outline-secondary" type="submit" value="/" name="operador">/</button>
			</form>
		</div>

		<div class="container">
			<hr>
			<label class="form-label col-form-label-lg">Formulário</label>
			<form action="formulario.php" method="post">
				<div class="row g-2">
					<div class="form-floating mb-2 col">
						<input type="text" name="nome" class="form-control" id="nomeCompleto" placeholder="nome">
						<label for="nomeCompleto">Nome Completo</label>
					</div>
					<div class="col-auto">
						<div class="row mb-1">
							<label>Modalidade</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="modalidade" id="Free" value="Free">
							<label class="form-check-label" for="Free">Free</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="modalidade" id="Premium" value="Premium">
							<label class="form-check-label" for="Premium">Premium</label>
						</div>
					</div>
				</div>
				<div class="row g-2 justify-content-between">
					<div class="col-auto">
						<div class="row mb-1">
							<label >Cursos</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="cursos" id="Java" value="Java">
							<label class="form-check-label" for="Java">JavaScript</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="cursos" id="Python" value="Python">
							<label class="form-check-label" for="Python">Python</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="cursos" id="php" value="php">
							<label class="form-check-label" for="php">PHP</label>
						</div>
					</div>
					<div class="form-floating mb-2 col-6">
						<input type="email" name="email" class="form-control" id="email" placeholder="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row g-2">
					<div class="form-floating mb-2 col">
						<input type="date" name="dataNcs" class="form-control" id="dataNcs" placeholder="dataNcs">
						<label for="dataNcs">Data de Nascimento</label>
					</div>
					<div class="form-floating mb-2 col">
						<input type="password" name="password" class="form-control" id="password" placeholder="password">
						<label for="password">Senha</label>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-auto">
						<button class="btn btn-outline-secondary" type="submit">Inscrever</button>
					</div>
				</div>
			</form>
		</div>

		<div class="container text-center">
			<hr>
			<div class="row align-items-start">
				<form action="triangulo.php" method="post">
					<label class="col-form-label-lg">Digite os valores dos lados de um triângulo</label>
					<div class="row g-2 mb-2 ">
						<div class="col">
							<input class="form-control" type="number" name="lado1"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="lado2"></input>
						</div>
						<div class="col">
							<input class="form-control" type="number" name="lado3"></input>
						</div>
						<div class="col-auto">
							<button class="btn btn-outline-secondary" type="submit">Calcular</button>
						</div>
					</div>
				</form>
			</div>
		</div>


		

		
	</body>






</html>
