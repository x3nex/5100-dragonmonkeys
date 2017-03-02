<?php

$tasks = $app['database']->getAll('tasks');

require 'views/index.view.php';