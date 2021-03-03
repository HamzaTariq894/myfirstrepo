<?php

namespace Teamincredibles\FirstPackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function demoFunction() {
        return 'This the demo function confirm that demo is working';
    }
}

