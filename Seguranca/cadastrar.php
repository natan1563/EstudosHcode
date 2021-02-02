<?php 

$email = $_POST["inputEmail"];

var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

//CONFIGURAÇÃO DE PROXY PARA ACESSO DA URL VIA CURL
curl_setopt($ch, CURLOPT_PROXY, 'serverproxyteste:9091');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'use:password');

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    "secret" => "6LckOj0aAAAAABt_OR5fGqjWKQJglyATwWDBu73U",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
]));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptchar = json_decode(curl_exec($ch), true);

curl_close($ch);

if($recaptchar["success"] === true) {
    echo 'Ok: '.$_POST['inputEmail'];
} else {
    header('Location: exemplo-04.php');
}

?>
