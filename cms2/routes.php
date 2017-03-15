<?php

$routes->get('', 'controllers/home.php');
$routes->get('about', 'controllers/about.php');
$routes->get('about/culture', 'controllers/about/culture.php');
$routes->get('contact', 'controllers/contact.php');

$routes->post('names', 'controllers/add-name.php');
