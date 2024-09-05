<?php

require_once __DIR__ . "/exception/ValidationException.php";
require_once __DIR__ . "/helper/ValidationUtil.php";

$login = new LoginRequest();
$login->username = "muchsin";
$login->password = null;

try {
    ValidationUtil::validateReflection($login);
} catch (Exception | ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}

class RegisterLoginRequest
{
    public ?string $name;
    public ?string $username;
    public ?string $email;
    public ?string $password;
}

$register = new RegisterLoginRequest();
$register->username = "muchsin";
$register->email = null;
$register->password = "rahasia";

try {
    ValidationUtil::validateReflection($register);
} catch (Exception | ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}
