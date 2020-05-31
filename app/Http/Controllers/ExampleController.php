<?php

namespace App\Http\Controllers;

use Blueprinting\Blueprint;
use Blueprinting\Elements\TextField;

class ExampleController extends Controller
{
    public function example(Blueprint $blueprint): Blueprint
    {
        $blueprint[] = new TextField('username', 'Username');
        $blueprint[] = new TextField('password', 'Password');
        return $blueprint;
    }
}
