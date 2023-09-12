<?php

namespace App\Http\Controllers\backend\student_attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{

    public function TodayAttendance(){
        return view('backend.student_attendance.today_attendance');
    } //method end

    public function ManualAttendance(){
        return view('backend.student_attendance.manual_attendance');
    } //method end

    public function AbsentStudent(){
        return view('backend.student_attendance.absent_student_list');
    } //method end

    public function AttendanceDetails(){
        return view('backend.student_attendance.attendance_details');
    } //method end

    public function DailyAttendance(){

        return view('backend.student_attendance.daily_attendance_summary');
        
    } //method end

    public function MonthlyAttendance(){
        return view('backend.student_attendance.monthly_attendance_summary');
    } //method end
}
