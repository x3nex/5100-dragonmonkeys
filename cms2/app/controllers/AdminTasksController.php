<?php
namespace App\Controllers;
use \App\Core\App;

class AdminTasksController {

    public function index()
    {
        $tasks = App::get('database')->getAll('tasks');
        return view('admin/tasks/index', compact('tasks')); //['tasks' => $tasks]
    }

    /*
     * Displays edit form
     */
    public function edit()
    {
        $id = (int)$_GET['id'];
        $task = App::get('database')->find('tasks', $id);

        return view('admin/tasks/edit', compact('task'));
    }

    /*
    Update the task
    */
    public function update()
    {
        if(!isset($_POST['completed'])) {
            $_POST['completed'] = 0;
        }
        App::get('database')->update('tasks', $_POST, $_POST['id']);
        return redirect('admin/tasks');
    }

    public function delete()
    {
        $id = $_GET['id'];
        App::get('database')->delete('tasks',$id);
        return redirect('admin/tasks');
    }

    public function create()
    {
        return view('admin/tasks/create');
    }

    public function insert()
    {
        App::get('database')->insert('tasks', $_POST);

        return redirect('admin/tasks');
    }
}
