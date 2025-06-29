<?php
namespace App\Http\Controllers;

use App\Models\NoteModel;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'nullable|string',
        ]);

        NoteModel::create($validated);

        return redirect('/')->with('success', 'Catatan berhasil ditambahkan!');
    }

    public function edit($id, Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'nullable|string',
        ]);

        $note = NoteModel::findOrFail($id);
        $note->update($validated);

        return redirect('/')->with('success', 'Catatan berhasil diperbarui!');
    }

    public function delete($id)
    {
        NoteModel::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Catatan berhasil dihapus!');
    }
}
