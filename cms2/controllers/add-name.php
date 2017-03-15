<?php

$app['database']->insert('tasks', [
    'title' => $_POST['title'],
    'completed' => 0
]);

header('Location: /');