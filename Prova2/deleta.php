<?php
include 'config.php';

# Inicialização da classe de gestão de times
$deleta = new gerirTimes();

# Validação de ID
$id = (!isset($_GET['id'])) ? '' : $_GET['id'];

# Validação de Confirmação
$confirma = (!isset($_GET['confirma'])) ? '' : $_GET['confirma'];

# Confirmação para excluir
if ($confirma == 'sim') {
	$deleta->delTime($id);
	header('Location: index.php');
}

include 'header.php';
?>

<main class="container">
	<h1>Deletar Time</h1>
	<div class="area">
		<p class="confirma-deleta">
			Tem certeza que deseja excluir o time ID <?php echo $id; ?>?
		</p>
		<div>
			<a href="deleta.php?id=<?php echo $id; ?>&confirma=sim" class="btn btn-danger">Sim, quero deletar</a>
			<a href="edita.php?id=<?php echo $id; ?>" class="btn btn-primary">Não, quero voltar</a>
		</div>
	</div>
</main>

<?php
include 'footer.php';