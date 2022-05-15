<?php
/**
 * Projeto Desenvolvimento Web 2 - FATEC Araras
*/

# Classe de gestão dos times
class gerirTimes
{
	# Insere um time (aplicando o Create do CRUD)
	function cadTime($nome, $participantes, $esporte) {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$campos = "nome, participantes, esporte";
		$valores = "'$nome', '$participantes', '$esporte'";
		$sql = "INSERT INTO tbdtimes ($campos) VALUES ($valores)";
		$query = mysqli_query($conecta, $sql);
		return $query;
		//mysqli_close($conecta);
	}

	# Visualiza os times (aplicando o Read do CRUD)
	function visTimes() {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$sql = "SELECT * FROM tbdtimes";
		$query = mysqli_query($conecta, $sql);
		while($valor = mysqli_fetch_array($query)) {
			echo "<tr>
				<td>" . $valor['id'] . "</td>
				<td>" . $valor['nome'] . "</td>
				<td>" . $valor['esporte'] . "</td>
				<td><a href='edita.php?id=" . $valor['id'] . "'>Ver / Editar</a></td>
			</tr>";
		}
		//mysqli_close($conecta);
	}

	# Visualiza um time (aplicando o Read do CRUD)
	function visTime($id) {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$sql = "SELECT * FROM tbdtimes WHERE id = " . $id . " LIMIT 1";
		$query = mysqli_query($conecta, $sql);
		if ($valor = mysqli_fetch_array($query)) {
			echo "<div class='form-group'>
				<label for='nome'>Nome do time</label>
				<input type='text' value='" . $valor['nome'] . "' name='nome' id='nome' class='form-control' placeholder='Nome do time' required>
			</div>
			<div class='form-group'>
				<label for='esporte'>Esporte do time</label>
				<select name='esporte' id='esporte' class='form-control'>
					<option value='" . $valor['esporte'] . "'>Selecionada: " . $valor['esporte'] . "</option>
					<option value='Futebol'>Futebol</option>
					<option value='Futsal'>Futsal</option>
					<option value='Basquete'>Basquete</option>
					<option value='Volei'>Volei</option>
					<option value='Handebol'>Handebol</option>
				</select>
			</div>
			<div class='form-group'>
				<label for='participantes'>Participantes do time</label>
				<textarea name='participantes' id='participantes' rows='5' class='form-control'>" . $valor['participantes'] . "</textarea>
			</div>";
		};
		//mysqli_close($conecta);
	}

	# Quantidade de times cadastrados
	function qtdTimes() {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$sql = "SELECT * FROM tbdtimes";
		$query = mysqli_query($conecta, $sql);
		return mysqli_num_rows($query);
		//mysqli_close($conecta);
	}

	# Atualiza um time (aplicando o Update do CRUD)
	function updTime($id, $nome, $participantes, $esporte) {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$sql = "UPDATE tbdtimes SET nome = '$nome', participantes = '$participantes', esporte = '$esporte' WHERE id = '$id'";
		$query = mysqli_query($conecta, $sql);
		return $query;
		//mysqli_close($conecta);
	}

	# Exclui um time (aplicando o Delete do CRUD)
	function delTime($id) {
		$conecta = mysqli_connect(bd_serv, bd_usuario, bd_senha, bd_banco);
		$sql = "DELETE FROM tbdtimes WHERE id = '$id'";
		$query = mysqli_query($conecta, $sql);
		return $query;
		//mysqli_close($conecta);
	}
}