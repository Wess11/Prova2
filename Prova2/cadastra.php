<?php
include 'config.php';

# Inicialização da classe de gestão de times
$cadastra = new gerirTimes();

# Validação de nome do time
$nome = (!isset($_POST['nome'])) ? '' : $_POST['nome'];

# Validação de participantes do time
$participantes = (!isset($_POST['participantes'])) ? '' : $_POST['participantes'];

# Validação de esporte do time
$esporte = (!isset($_POST['esporte'])) ? '' : $_POST['esporte'];

# Confirmação para cadastrar
if ($nome !== '' && $participantes !== '' && $esporte !== '') {
	$cadastra->cadTime($nome, $participantes, $esporte);
	header('Location: index.php?status=ok');
}

include 'header.php';
?>

<main class="container">
	<h1>Cadastrar Time</h1>
	<div class="area">
		<form action="cadastra.php" method="post">
			<div class="form-group">
				<label for="nome">Nome do time</label>
				<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do time" required>
			</div>
			<div class="form-group">
				<label for="esporte">Esporte do time</label>
				<select name="esporte" id="esporte" class="form-control">
					<option value="Futebol">Futebol</option>
					<option value="Futsal">Futsal</option>
					<option value="Basquete">Basquete</option>
					<option value="Volei">Volei</option>
					<option value="Handebol">Handebol</option>
				</select>
			</div>
			<div class="form-group">
				<label for="participantes">Participantes do time</label>
				<textarea name="participantes" id="participantes" rows="5" class="form-control"></textarea>
			</div>
			<div class="form-group botoes">
				<a href="index.php" class="btn">Cancelar</a>
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</form>
	</div>
</main>

<?php
include 'footer.php';
