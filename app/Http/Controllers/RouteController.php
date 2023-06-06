<?php

namespace App\Http\Controllers;

class Controller extends RouteController
{
    public function test() {
        return view('test');
    }
}
