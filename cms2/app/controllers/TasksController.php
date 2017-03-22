<?php
namespace App\Controllers;
use \App\Core\App;

class TasksController {
    public function index()
    {
        $tasks = App::get('database')->getAll('tasks');
//        return view('tasks', compact('tasks'));
        header('Content-Type: application/json');
        echo json_encode($tasks);
        return;
    }

    public function store()
    {
        App::get('database')->insert('tasks', [
            'title' => $_POST['title'],
            'completed' => 0
        ]);

        return redirect('tasks');
    }
}