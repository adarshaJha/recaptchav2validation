<?php
$post = [
   'secret' => '6LfcOEcUAAAAABldSkevRJL75VSrvheVbc_4z9wU', //Enter the secret key provided by the google (just copy and paste it)
   'response' => $_POST['googleResponse'],
   
];
$ch = curl_init();
echo 
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
$response = curl_exec($ch);
var_export ($response);
// echo $response;
?>