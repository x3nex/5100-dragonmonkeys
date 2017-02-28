<?php

$conn = require 'bootstrap.php';

$tasks = $conn->selectAll('tasks');

require 'index.view.php';