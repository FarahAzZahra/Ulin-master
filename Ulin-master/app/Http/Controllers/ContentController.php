<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function createContent()
    {
        return view('create_content');
    }
}
