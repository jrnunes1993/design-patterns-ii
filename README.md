# design-patterns-ii

## Factory

Quando precisamos isolar o processo de criação de um objeto, para facilitar a troca dele no futuro, levamos o processo de instanciação da classe em questão para uma Factory.

<details>
<summary>Exemplo de utilização de Factory</summary>

``` php
class ConnectionFactory {

	public function getConnection() {
		$host = "localhost";
		$user = "";
		$password = "";
		$database = "";

		$con = mysqli_connect($host,$user,$password,$database);
		return $con;
	}

}
```
</details>

Mais informações em: https://refactoring.guru/design-patterns/factory-method

## Memento

Quando precisamos salvar o histórico de estados de um objeto para restaura-lo depois caso necessário, utilizamos o pattern chamado Memento.

<details>
<summary>Exemplo de utilização do Memento</summary>

``` php

#TODO

```

Mais informações em: https://refactoring.guru/design-patterns/memento

</details>

