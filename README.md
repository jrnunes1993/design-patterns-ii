# design-patterns-ii

## Factory

Quando precisamos isolar o processo de criação de um objeto, para facilitar a troca dele no futuro, levamos o processo de instanciação da classe em questão para uma Factory.

<details>
<summary>Exemplo em PHP.</summary>

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

