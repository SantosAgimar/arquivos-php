<?php 
	
	$arquivo = fopen('my-arquive.txt', 'w');

	if($arquivo == false): 

		die('Este arquivo já existe'); 

	else:

		$texto = 'Olá Mundo';
		fwrite($arquivo, $texto);
		fclose($arquivo);

	endif ;

?>

    <?php
    // Aqui você abre e lê o arquivo
    $arquivo = fopen ('arq.txt', 'r');
    // Aqui você está definindo que a variável é um 'array()'
    $result = array();
    // Você agora irá verificar se existe o arquivo e se o código acim o leu (true|false)
    while(!feof($arquivo)){
        // Aqui foi onde você errou, pois seria '$result[]' e não '$result'
        $result[] = explode("|",fgets($arquivo));
    }
    // Fechando a leitura do arquivo
    fclose($arquivo);
    // Postando resultados
    print_r($result);
?>
O código limpo ficaria:

    <?php
    $arquivo = fopen ('arq.txt', 'r');
    $result = array();
    while(!feof($arquivo)){
        $result[] = explode("|",fgets($arquivo));
    }
    fclose($arquivo);
    print_r($result); 
?>
