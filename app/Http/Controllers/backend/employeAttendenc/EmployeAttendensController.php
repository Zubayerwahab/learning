<?php

namespace App\Http\Controllers\backend\employeAttendenc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeAttendensController extends Controller
{
public function  today(){
      return view('backend.employeAttendens.today');
}

public function  manual(){
      return view('backend.employeAttendens.manual');
}
public function  details(){
      return view('backend.employeAttendens.details');
}
public function  dailyDetails(){
      return view('backend.employeAttendens.dailydetails');
}
public function  monthlyDetails(){
      return view('backend.employeAttendens.monthlly');
}
}
