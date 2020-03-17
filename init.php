<?php

require 'core/bootstrap.php';
return (new QueryBuilder($pdo))->createStatement();

//run $php init.php to create tables