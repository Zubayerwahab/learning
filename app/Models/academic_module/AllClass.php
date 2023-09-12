<?php

namespace App\Models\academic_module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AllClass extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getClassName($id){
        $class_name =  $this->where('id', $id)->select('class_name')->get();
       return $class_name[0]->class_name;
    }

    public function getMediumName($id){
        $medium_name =  $this->where('id', $id)->select('medium_name')->get();
       return $medium_name[0]->medium_name;
    }

}
