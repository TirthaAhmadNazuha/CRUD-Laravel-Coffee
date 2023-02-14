<?php

namespace App\Http\Controllers;

class CoffeeController extends Controller {
    public function add() {      
        return view('pages.add.index');
    }
}