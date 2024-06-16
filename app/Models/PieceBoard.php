<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceBoard extends Model
{
    use HasFactory;

    protected $table = 'pieces';
    protected $fillable = [
        'title',
        'description',
        'progress',
        'user_id',
    ];
}
