<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBreakingNews extends Model
{
    use HasFactory;

    protected $table = 'add_breaking_news';
    protected $fillable = [
        'title',
        'details'
    ];

}
