<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProfilesController extends Controller
{
    public function show($id)
    {
        return View::make('profiles.show');
    }
}
