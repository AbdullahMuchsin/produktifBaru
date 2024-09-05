<?php

// Perbedaan require dan include
// Require akan terjadi error saat terjadi kesalahan pemanggilan file
// Inlcude tetap berjalan meskipun salah dalam pemanggilan file hanya ada pemberitahuan warning

// Perbedaan require dan include dengan require_once dan include_once
// require dan include dapat terjadi duplikasi file jika dipanggil berulang kali
// require_once dan include_once agar tidak terjadi dubplikasi pemanggilan file yang sudah ada

include_once "./Lib/MyFunction.php";
require_once "./Lib/MyFunction.php";

echo sayHello("Muchsin") . PHP_EOL;
