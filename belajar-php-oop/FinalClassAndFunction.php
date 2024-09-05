<?php

require_once __DIR__ . "/data/SocialMedia.php";

use Data\{SocialMedia, Facebook};

$muchsin = new Facebook();

var_dump($muchsin->login(false, true));
