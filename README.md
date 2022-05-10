# Sistema de gestão de times
Micro Sistema para gestão de times divididos por esportes

## Documentação de uso
Visualize os times cadastrados na tela inicial, e cadastre um novo time no botão superior "Cadastrar Time", inserindo informações como Nome do time, Esporte e Lista de participantes do time.

### Documentação do código
Conheça todas as funções da classe _gerirTimes_

Conecta com banco de dados e inicia a aplicação

	$classe = new gerirTimes();

Adiciona um novo time

	$classe->cadTime();

Visualiza os times

	$classe->visTimes();

Visualiza um time

	$classe->visTime();

Deleta um time

	$classe->delTime();

Edita um time

	$classe->ediTime();


Vamos utilizar banco de dados MySQL e orientação a objetos para separar o acesso ao banco de dados.

## CRUD

* Create
* Read
* Update
* Delete