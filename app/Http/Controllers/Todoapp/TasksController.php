<?php

namespace App\Http\Controllers\Todoapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tasks;

class TasksController extends Controller
{
    public function index()
    {

        $data["task"] = tasks::all()->sortBy("id");
        return view("todoapp.tasks", compact("data"));
    }
}
