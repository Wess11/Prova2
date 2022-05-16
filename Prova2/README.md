# Sistema de gestão de times
Micro Sistema para gestão de times divididos por esportes

## Documentação de uso
Visualize os times cadastrados na tela inicial, e cadastre um novo time no botão superior "Cadastrar Time", inserindo informações como Nome do time, Esporte e Lista de participantes do time.

## Documentação do código
O projeto utiliza banco de dados MySQL e linguagem PHP com orientação a objetos, para gestão do banco de dados.

Conheça todas as funções da classe _gerirTimes_


Conecta com banco de dados e inicia a aplicação

	$classe = new gerirTimes();


Adiciona um novo time (aplicando o Create do CRUD)

	$classe->cadTime();


Visualiza os times (aplicando o Read do CRUD)

	$classe->visTimes();


Visualiza um time (aplicando o Read do CRUD)

	$classe->visTime();


Visualiza quantos times tem cadastrados (aplicando o Read do CRUD)

	$classe->qtdTimes();


Edita um time (aplicando o Update do CRUD)

	$classe->updTime();


Deleta um time (aplicando o Delete do CRUD)

	$classe->delTime();

