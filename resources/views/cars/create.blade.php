@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create car
            </h1>
        </div>
    </div>
    <div class="flex justify-center">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="name"
                    placeholder="Brand Name....">
                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="founded"
                    placeholder="Founded....">
                    <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic"
                    name="description"
                    placeholder="Description....">
                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10
                    uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>
@endsection