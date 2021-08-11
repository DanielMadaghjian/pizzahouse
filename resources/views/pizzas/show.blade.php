@extends('layouts.app') 

@section('content')
    <div class = "wrapper pizza-details">
        <h1 class = "text-3xl">Order for {{ $pizza->name}}</h1><br />
        <p class = "type">Type - {{ $pizza->type }}</p><br />
        <p class = "base">Base - {{ $pizza->base }}</p><br />
        <p class = "toppings">Extra toppings: </p>
            <ul>
                @foreach($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>
                @endforeach
            </ul>

            <form action="{{ route('pizzas.destroy', $pizza->id) }}" method = "POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button><br />
            </form>
    </div><br />

    <a href="/pizzas" class = "back"><- Back to all Pizzas</a>
@endsection


