<?php
// Configuración centralizada a partir de variables de entorno.
return [
    'db_host' => getenv('DB_HOST') ?: 'localhost',
    'db_port' => getenv('DB_PORT') ?: '3306',
    'db_name' => getenv('DB_NAME') ?: 'ips',
    'db_user' => getenv('DB_USER') ?: 'usuario',
    'db_pass' => getenv('DB_PASS') ?: 'password',
];
