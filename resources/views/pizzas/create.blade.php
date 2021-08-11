@extends('layouts.app')  

@section('content')
    <div class = "wrapper create-pizza">
        <h1 class = "text-5xl">Create a new Pizza</h1>

        <form action = "/pizzas" method = "POST">
        @csrf
            <label for="name">Your Name: </label>
            <input type = "text" id="name" name="name">

            <label for="type">Choose Pizza type:</label>
            <select name="type" id = "type">
                <option value="margarita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

            <label for="base">Choose Pizza base:</label>
            <select name="base" id = "base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin and crispy">Thin and Crispy</option>
                <option value="thick">Thick</option>
            </select>

            <fieldset>
                <label>Extra toppings</label><br />
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                <input type="checkbox" name="toppings[]" value="olives">Olives<br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            </fieldset>


            <input type="submit" value="Order Pizza">
        </form>
    </div>

@endsection


