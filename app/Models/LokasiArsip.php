<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiArsip extends Model
{
    use HasFactory;

    protected $fillable = ['ruangan', 'gedung', 'lemari', 'rak', 'book', 'folder'];
}
