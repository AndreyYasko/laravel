<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeController extends Controller
{
    public function __invoke(Request $request)
    {
    return "<h1>invoke</h1>";
    }
}
