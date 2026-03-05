<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        //$notes = Note::where('done','==', '0')->get();
        return view('note.index', ['notes' => $notes]);
    }

    public function creare()
    {
        return view('note.create');
        /*$note = new Note();
        $note->title = 'Titulo #4';
        $note->description = 'Descripcion de la nota #4';
        $note->done = 0;
        $note->author='John Doe';
        $note->save();

        Note::create([
            'title' => 'Titulo #5',
            'description' => 'Descripcion de la nota #5',
            'done' => 0,
            'author' => 'Juan Perez'
        ]);

        return redirect()->route('note.index');*/
    }

    public function store(Request $request)
    {
        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'done' => $request->done,
            'author' => $request->author
        ]);

        return redirect()->route('note.index');
    }
}
