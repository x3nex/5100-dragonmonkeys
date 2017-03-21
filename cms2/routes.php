<?php

$routes->get('', 'PagesController@home');
$routes->get('about', 'PagesController@about');
$routes->get('contact', 'PagesController@contact');

$routes->get('tasks', 'TasksController@index');
$routes->post('tasks', 'TasksController@store');
