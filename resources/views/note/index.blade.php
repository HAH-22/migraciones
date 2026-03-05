@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
  <a class="btn" href="{{ route('note.create')}}">Create new note</a>
    <h1>Lista de notas:</h1>
    <ul>
        @foreach ($notes as $note)
        <div class="container mt-3">            
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nota</th>
                <th>Descripción</th>
                <th>Autor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $note->title }}</td>
                <td>{{ $note->description }}</td>
                <td>{{ $note->author }}</td>
              </tr>
            </tbody>
          </table>
          <a class="btn" href="#">EDIT</a>
          <a class="btn" href="#">DELETE</a>
        </div>
        @endforeach
    </ul>
@endsection