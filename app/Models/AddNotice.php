<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddNotice extends Model
{
    use HasFactory;

  protected $table = 'add_notice';
//   protected $fillable = [
//       'title',
//       'file_upload',
//       'notice',
//       'status'
//   ];
   private static $notice;

   public static function createAddNotice($request)

   {

       self::$notice                = new AddNotice();
       self::$notice->title         =$request->title;
       self::$notice->file_upload   =$request->file_upload;
       self::$notice->notice        =$request->notice;
       self::$notice->status        =$request->status;
       self::$notice->save();
   }



   public static function updateAddNotice($request,$id)
   {
       self::$notice                = AddNotice::find($id);
       self::$notice->title         =$request->title;
       self::$notice->file_upload   =$request->file_upload;
       self::$notice->notice        =$request->notice;
       self::$notice->status        =$request->status;
       self::$notice->save();

   }

}
