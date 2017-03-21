<?php

class TasksController {
    public function index()
    {
        $tasks = App::get('database')->getAll('tasks');
        return view('tasks', compact('tasks')); //['tasks' => $tasks]
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