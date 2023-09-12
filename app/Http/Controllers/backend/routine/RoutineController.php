<?php

namespace App\Http\Controllers\backend\routine;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
   public function index()
   {
       return view('backend.routine.index');
   }
   public function dynamic()
   {
       return view('backend.routine.dynamic');
   }
   public function printindex()
   {
       return view('backend.routine.print');
   }
}
