<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteModel extends Model
{
    protected $fillable = [
        'isi',
        'judul'
    ];

    protected $table = 'note';
}
