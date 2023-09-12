<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCareer extends Model
{
    use HasFactory;

    protected $table = 'add_career';
//    protected $fillable = [
//        'title',
//        'deadline',
//        'details',
//        'file'
//    ];
private static $career;
public static function createAddCareer($request)
{
    self::$career                = new AddCareer();
    self::$career->title         =$request->title;
    self::$career->deadline         =$request->deadline;
    self::$career->details         =$request->details;
    self::$career->file         =$request->file;
    self::$career->save();

}

}
