<?php

$dbh = new PDO('mysql:host=localhost;dbname=jcms','jcms','9dgvbfrWLnFotdtm');
$dbh -> prepare("DROP TABLE users");
$dbh -> prepare("DROP TABLE config");
$sql_users = 'CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP NOT NULL,
updated_at TIMESTAMP
)';
$dbh->exec($sql_users);
$sql_config = 'CREATE TABLE IF NOT EXISTS config (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
config_name VARCHAR(30) NOT NULL,
url VARCHAR(30),
config VARCHAR(30),
created_at TIMESTAMP,
updated_at TIMESTAMP
)';
$dbh->exec($sql_config);
print("created users table");
?>
