@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
        @foreach($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="Pizza Icon">
                <h4><a href="{{route('pizzas.index', $pizza->$id)}}">{{ucfirst($pizza->name)}}</a></h4>
            </div>
        @endforeach
        <p>{{session('msg')}}</p>
</div>
@endsection
