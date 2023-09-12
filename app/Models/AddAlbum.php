<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddAlbum extends Model
{
    use HasFactory;

    protected $table = 'add_album';
    protected $fillable = [
        'album_title'
    ];

}
