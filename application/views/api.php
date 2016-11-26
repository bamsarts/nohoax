<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://hack.kurio.co.id/v1/feed/topic:40?detail=true",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,  
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept : application/json",
    "X-Kurio-Client-ID : 99",
    "X-Kurio-Client-Secret : S3VyaW9IYWNrYXRvbjIw",
    "X-Os : windows",
    "X-App-Version : 1.0.0",
    "Content-Type : application/json",
    "Authorization: Bearer 17wSA8iFr0qlkQfOP0rQKKCPazYJrG4RXFDVGorb"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  
  $data = json_decode($response, true);
  //echo json_encode($k['rajaongkir']['results']);

  
  //for ($i=0; $i < count($data['data']['title']); $i++){
  

    // echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";

    echo $data['data']['title'];
}

?>