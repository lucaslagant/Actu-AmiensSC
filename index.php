<!-- /!\ Pensez à s'abonner (ici la version gratuite est suffisante) -->

<?php
// Initialization d'une session cURL
$curl = curl_init();


// Fixe plusieurs options pour un transfert cURL
curl_setopt_array($curl, [
	CURLOPT_URL => "https://football-prediction-api.p.rapidapi.com/api/v2/predictions?market=classic&iso_date=2018-12-01&federation=UEFA",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: football-prediction-api.p.rapidapi.com",
        // Les clés sont unique , il faut créé un compte pour en avoir une 
		"X-RapidAPI-Key: f060058b44mshde73172348c5530p1cfbdbjsn48d4228d0357"
	],
]);

// Execute une session cURL 
$response = curl_exec($curl);

// Retourne une chaîne contenant le dernier message d'erreur cURL
$err = curl_error($curl);

// ferme la session cURL
curl_close($curl);

// Condition message erreur ou la reponse

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}



// <!-- "https://football-prediction-api.p.rapidapi.com/api/v2/home-league-stats/81930" -->