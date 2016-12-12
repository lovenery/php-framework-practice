<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos', 'Task');
        return view('index', compact('tasks', 'users'));
    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }
}
