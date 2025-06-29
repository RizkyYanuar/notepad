<?php

use App\Http\Controllers\NoteController;
use App\Models\NoteModel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $note = NoteModel::orderBy('created_at', 'desc')->get();


    return view('home', compact('note'));
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/edit/{id}', function ($id) {
    $note = NoteModel::findOrFail($id);

    return view('edit', compact('note'));
});

Route::post('/tambah', [NoteController::class, 'create']);
Route::post('/edit/{id}', [NoteController::class, 'edit']);

Route::post('/delete/{id}', [NoteController::class, 'delete']);