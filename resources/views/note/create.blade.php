@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')

<a class="btn" href="{{ route('note.index') }}">Back</a>
<main class="contenido-principal">
    <div class="contenedor">
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label class="center">Titulo</label>
        <input class="center" type="text" name="title">
        <br>
        <label class="center" >Descripción</label>
        <input class="center" name="description"></input>
        <br>
        <label class="center" >Done:</label>
        <select class="center" name="done">
            <option value="0">False</option>
            <option value="1">True</option>
        </select>
        <br>
        <label class="center" >Autor</label>
        <input class="center" type="text" name="author">
        <br>
        <input class="btn center" type="submit" value="Create">
    </form>
    </div>
</main>

@endsection