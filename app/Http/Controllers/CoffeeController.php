<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CoffeeController extends Controller {
    public function index(Request $request) {
        $coffee = $request->cookie('coffee');
        return view('pages.list.index', ['coffee' => json_encode((object)[ 'data' => $coffee, ])]);
    }
    public function add() {  
        return view('pages.add.index');
    }
    public function addCoffee(Request $request) {
        $minutes = 30;
        $value = isset(json_decode($request->cookie('coffee'))->data) ? json_decode($request->cookie('coffee'))->data : [];
        $value = array_merge($value, array((object)[
            'id' => time(),
            'coffeeName' => $request->coffeeName,
            'price' => $request->harga,
            'ingridients' => $request->ingridients,
            'description' => $request->description,
        ]));
        return redirect('/coffee')->withCookie(cookie('coffee', json_encode((object)[ 'data' => $value, ]), $minutes));;
    }
    public function deleteCoffee(Request $request) {
        $value = isset(json_decode($request->cookie('coffee'))->data) ? json_decode($request->cookie('coffee'))->data : (object)['data' => []];
        return json_encode([$value->data? $value->data : 'not Found', $request->id]);
    }
}