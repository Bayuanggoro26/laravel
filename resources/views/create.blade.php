@extends('components.layout')


@section('body')
<div >
    <h1 class="font-bold text-3xl text-blue-500">login.</h1>
    <h1>welcome.</h1>
    <div>
        <form action="/" method="POST" class="flex flex-col mt-2">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" class="border rounded">
            <label for="email">Email:</label>
            <input type="email" name="email" class="border rounded">

            <button type="submit" class="bg-blue-500 mt-2 rounded font-bold py-2 text-white">Simpan.</button>
        </form>
    </div>
</div>
@endsection

