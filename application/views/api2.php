<?php

$curl = curl_init();

$data = json_encode(
	array(
		"device_token"=> "tes"
		)
	);

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://hack.kurio.co.id/v1/auth/login",
  CURLOPT_CUSTOMREQUEST => "POST",

  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/json",
    "x-app-version: 3.1.13",
    "x-kurio-client-id: 99",
    "x-kurio-client-secret: S3VyaW9IYWNrYXRvbjIw",
    "x-os: windows"
  ),
  CURLOPT_POSTFIELDS => $data,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

  $hasil = json_decode($response, true)
  echo $hasil['title'];
}
  var_dump(json_decode($response));
?>