<?php

require_once __DIR__ . "/Database.php";
use Config\Database;

$connection = Database::getConnection();
echo "SUKSES TERKONEKSI DENGAN DATABASE" . PHP_EOL;
