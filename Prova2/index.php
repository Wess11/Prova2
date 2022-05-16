<?php
include 'config.php';

# Inicialização da classe de gestão de times
$visualiza = new gerirTimes();

include 'header.php';
?>

<main class="container">
	<h1>Todos os Times</h1>
	<div class="area">
		<table class="table table-striped">
			<tr>
				<td><strong>N°</strong></td>
				<td><strong>Nome do Time</strong></td>
				<td><strong>Esporte</strong></td>
				<td><strong>Gênero</strong></td>
				<td><strong>Ações</strong></td>
			</tr>

			<?php $visualiza->visTimes(); ?>

		</table>
		<p><?php echo $visualiza->qtdTimes(); ?> times cadastrados</p>
	</div>
</main>

<?php
include 'footer.php';