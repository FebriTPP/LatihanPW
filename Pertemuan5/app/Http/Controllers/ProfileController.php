<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view("Profile.profile");
    }

    public function identity() {
        return view("Profile.identity");
    }

    public function family() {
        return view("Profile.family");
    }
}
