<?php
include 'config.php';

# Inicialização da classe de gestão de times
$edita = new gerirTimes();

# Validação de ID para visualização
$id = (!isset($_GET['id'])) ? '' : $_GET['id'];

# Validação de nome do time
$nome = (!isset($_POST['nome'])) ? '' : $_POST['nome'];

# Validação de esporte do time
$esporte = (!isset($_POST['esporte'])) ? '' : $_POST['esporte'];

# Validação de participantes do time
$participantes = (!isset($_POST['participantes'])) ? '' : $_POST['participantes'];

# Confirmação para editar
if ($id !== '' && $nome !== '' && $esporte !== '' && $participantes !== '') {
	$edita->updTime($id, $nome, $participantes, $esporte);
	header('Location: edita.php?id=' . $id . '&status=ok');
}

//$edita-updTime($id);

include 'header.php';
?>

<main class="container">
	<h1>Time</h1>
	<div class="area">
		
		<form action="edita.php?id=<?php echo $id; ?>" method="post">

			<?php $edita->visTime($id); ?>

			<div class="botoes">
				<a href="index.php" class="btn">Voltar</a>
				<a href="deleta.php?id=<?php echo $id; ?>" class="btn btn-danger">Excluir time</a>
				<button type="submit" class="btn btn-primary">Editar time</button>
			</div>
		</form>
	</div>
</main>

<?php
include 'footer.php';