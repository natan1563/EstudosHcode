<?php 

$data = [ 
    "nome" => "Nata Morão"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET, 
    json_encode($data),
    MCRYPT_MODE_ECB
);

?>