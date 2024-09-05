<?php

require_once __DIR__ . "/data/LoginRequest.php";
require_once __DIR__ . "/exception/ValidationException.php";
require_once __DIR__ . "/helper/Validation.php";

$login = new LoginRequest();
$login->username = " fsd ";
$login->password = "  ";

try {
    validationException($login);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    // Dengan getTrace mendapatkan pesan lebih detail oleh array
    var_dump($exception->getTrace());

    // Dengan getTrace mendapatkan pesan lebih detail oleh string
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "ERRO ATAU TIDAK TETAP DI EKSEKUSI" . PHP_EOL;
}
