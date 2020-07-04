<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    function index(){
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas'=>$pizzas]);
    }

    function show($id){
        $pizza  = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    function create(){
        return view('pizzas.create');
    }

    function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('msg', 'Thanks For Your Order');
    }

    function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('msg', 'You Have Updated The Pizzas List');
    }
}
