<?php

use Config\Database;

require_once __DIR__ . "/Database.php";

$connection = Database::getConnection();
echo "SUKSES KONEKSI DENGAN DATABASE" . PHP_EOL;
