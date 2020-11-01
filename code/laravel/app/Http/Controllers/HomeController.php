<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $html=<<<HTML
        <h1>home</h1><p>Welcome to this website</p>
HTML;

        return $html;

    }

 //   public function index()
//    {
 //       return <<<php
//        <h1>hello user</h1>
 //       Some text here<br>
 //       <a href="/">Transition to admin page</a>
 //php;
//    }
}
