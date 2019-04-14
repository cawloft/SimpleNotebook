<?php

namespace App\Http\Controllers;

use App\Note;

class NoteController extends Controller{

    public function index(){

        $notes = Note::all();

        return view('welcome', compact('notes'));

    }

    public function create(){

        return view('note.create');

    }

    public function store(){

        Note::create(request()->validate([
            'title' => 'required|max:20',
            'content' => 'required'
        ]));

        return redirect('/');

    }

    public function show(Note $note){

        return view('note.show', compact('note'));

    }

    public function edit(Note $note){

        return view('note.edit', compact('note'));

    }

    public function update(Note $note){

        $note->update(request()->validate([
            'title' => 'required|max:20',
            'content' => 'required'
        ]));

        return redirect('/note/' . $note->id);

    }

    public function destroy(Note $note){

        $note->delete();

        return redirect('/');

    }

}
