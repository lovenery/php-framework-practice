<?php

class PagesController
{
    public function home()
    {
        require 'Task.php';
        $tasks = App::get('database')->selectAll('todos', 'Task');

        return view('index', compact('tasks', 'users'));
    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }
}
