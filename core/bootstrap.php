<?php

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$config = require 'env.php';
$pdo = Connection::make($config);
$db = new QueryBuilder($pdo);
?>