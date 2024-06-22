
<!DOCTYPE html>
<html>
<head>
	<title>CEP</title>
</head>
<body>
	<form>
		<input type="text" name="cep" placeholder="Digite o cep">
		<input type="submit" value="OK" name="">
	</form>

</body>
</html>
<?php 

	//viacep.com.br
	$cep = $_GET['cep'];
	$link = "http://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	$data = json_decode($response, true);

	/*var_dump($data);

	echo "<br/>";

	print_r("Cep    : " .$data['cep']);
	echo "<br/>";
	print_r("Rua    : " .$data['logradouro']);
	echo "<br/>";
	print_r("Bairro : " .$data['bairro']);
	echo "<br/>";
	print_r("Cidade : " .$data['localidade']);
	echo "<br/>";
	print_r("Estado : " .$data['uf']);	*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>CEP</title>
	<style type="text/css">
		input{
			padding: 10px;
			margin: 2px;
			border-radius: 5px;
			border: 1px solid red
		}

		#alinhar{
			float: left;

		}

	</style>
</head>
<body>
	<form>

		<div class="container">
			<p><input size="5" id="alinhar" type="text" name="cep" placeholder="Cep" value="<?php echo $data['cep'];?>"></p>
			<p><input id="alinhar" type="text" name="rua" placeholder="Rua" size="35" value="<?php echo $data['logradouro'];?>"><input type="text" name="num" placeholder="Nº" size="5"></p>

			<p><input id="alinhar" type="text" name="bairro" placeholder="Bairro" value="<?php echo $data['bairro'];?>"></p>
			<p><input id="alinhar" type="text" name="cidade" placeholder="Cidade" value="<?php echo $data['localidade'];?>"></p>
			<p><input size="5" id="alinhar" type="text" name="estado" placeholder="UF" value="<?php echo $data['uf'];?>"></p>
		</div>

	</form>

</body>
</html>