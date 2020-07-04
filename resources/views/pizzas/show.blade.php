@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Order for {{$pizza->name}}</h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <div class="base">Base - {{$pizza->base}}</div>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('delete')
        <button>Complete Order</button>
    </form>
    </div>
    <a href="{{route('pizzas.index')}}" class="back">Back To All Pizzas</a>
@endsection
