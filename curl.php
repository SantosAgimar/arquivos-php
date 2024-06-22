<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,"http://localhost/curl/api.php");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST,"GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$reponse = curl_exec($curl);

curl_close($curl);

echo $reponse;