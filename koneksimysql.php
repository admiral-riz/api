<?php

// define('host', 'localhost');
// define('user', 'root');
// // define('user', 'root');
// define('password', '');
// define('database', 'uts-uasmobile2');

define('host', 'localhost');
define('user', 'androidrisky');
define('password', 'Risky123');
define('database', 'androidrisky');

$conn = mysqli_connect(host, user, password, database);
if (!$conn) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
    exit();
}
