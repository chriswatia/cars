@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Car
            </h1>
        </div>
    </div>
    <div class="flex justify-center">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="name"
                    value="{{ $car->name }}">
                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="founded"
                    value="{{ $car->founded }}">
                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="description"
                    value="{{ $car->description }}">
                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10
                    uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>
@endsection