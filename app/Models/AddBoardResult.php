<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBoardResult extends Model
{
    use HasFactory;

    protected $table = 'add_board_result';
    protected $fillable = [
        'year',
        'total_student',
        'passed',
        'passed(%)',
        'A+',
        'details'
    ];

}
