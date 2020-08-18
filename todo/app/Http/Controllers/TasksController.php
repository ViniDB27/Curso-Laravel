<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {

        $tasks = [
            [
                "id"=>1,
                "name"=>"Estudar PHP",
                "complete"=>false
            ],
            [
                "id"=>2,
                "name"=>"Estudar JS",
                "complete"=>true
            ],
            [
                "id"=>3,
                "name"=>"Estudar Laravel",
                "complete"=>false
            ],
            [
                "id"=>4,
                "name"=>"Estudar React Js",
                "complete"=>true
            ]
        ];
    
        return $tasks;

    }

    public function store()
    {
        return "Adcionado";
    }
}
