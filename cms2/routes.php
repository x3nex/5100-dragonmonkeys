<?php

$routes->get('', 'PagesController@home');
$routes->get('about', 'PagesController@about');
$routes->get('contact', 'PagesController@contact');

$routes->get('api/tasks', 'TasksController@index');
$routes->post('tasks', 'TasksController@store');


$routes->get('admin/tasks', 'AdminTasksController@index');
$routes->get('admin/tasks/new', 'AdminTasksController@create');
$routes->post('admin/tasks/new', 'AdminTasksController@insert');
$routes->get('admin/tasks/edit', 'AdminTasksController@edit');
$routes->post('admin/tasks', 'AdminTasksController@update');
$routes->get('admin/tasks/delete', 'AdminTasksController@delete');
