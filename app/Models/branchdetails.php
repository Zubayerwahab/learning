<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branchdetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'auth_signature',
        // Add more attributes as needed
    ];
}
