<?php

$config = [
    'db_user' => $_ENV['MYSQL_USER'],
    'db_pass' => $_ENV['MYSQL_PASSWORD'],
    'db_host' => 'mysql',
    'db_name' => $_ENV['MYSQL_DATABASE']
];

$pdo = new PDO('mysql:dbname='. $config['db_name'] .';host=mysql', $config['db_user'], $config['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
