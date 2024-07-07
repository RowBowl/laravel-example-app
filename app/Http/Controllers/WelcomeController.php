<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $hello= <<<heredoc
        <h1>hello, links:</h1>
        <ul>
            <li><a href='/hello'>hello</a></li>
            <li><a href='/hello1'>hello1</a></li>
        </ul>
        heredoc;
        return $hello;
    }
}