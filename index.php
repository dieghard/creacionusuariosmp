<?php
/*powered by Diego S. Markiewicz
Copyright 2021 Diego S. Markiewicz
Licensed under: SEE LICENSE IN https://github.com/dieghard/
*/
$token = ''//ACA VA EL TOKEN CREADO EN MERDCADO PAGO;

$url = "https://api.mercadolibre.com/users/test_user?access_token=$token";

$vars = "{\"site_id\":\"MLA\"}";

echo(enviar($vars, $url));

function enviar($parametrospost,$urlpost)
{

        $curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $urlpost);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $parametrospost);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$respuesta = trim(curl_exec($curl));
		curl_close($curl);
                return $respuesta ;
}
