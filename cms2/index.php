<?php

$query = require 'bootstrap.php';

$tasks = $query->getAll('tasks');

require 'index.view.php';