<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $data = [
            "title" => "Sample IF ELSE",
            "npm" => "212310065",
            "students" => [
                ["npm" => "212310034", "name" => "Rayyan Pratama"],
                ["npm" => "212310035", "name" => "Rayyan Pratama"],
                ["npm" => "212310036", "name" => "Rayyan Pratama"],
                ["npm" => "212310037", "name" => "Rayyan Pratama"],
            ]
        ];

        return view("modules.home.home", [
            "data" => $data
        ]);
    }
}
