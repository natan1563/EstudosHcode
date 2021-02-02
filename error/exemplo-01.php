<?php 

function error_handler($code, $message, $file, $linha) {

    echo json_encode([ 
        "code" => $code,
        "message"=>$message,
        "line"=>$linha,
        "file"=>$file
    ]);
}

set_error_handler("error_handler");

$total = 100 / 0;