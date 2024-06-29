<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceBoard extends Model
{
    use HasFactory;

    protected $table = 'pieceboards';
    protected $fillable = [
        'piece_title',
        'piece_description',
        'piece_progress',
        'user_id'
    ];
}
