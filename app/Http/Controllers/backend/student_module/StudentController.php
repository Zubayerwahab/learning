<?php

namespace App\Http\Controllers\backend\student_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addForm()
    {
        return view("backend.student_module.add_students");
    }
    public function printForm()
    {
        return view("backend.student_module.print_admission_form");
    }
    public function currentStudentList()
    {
        return view("backend.student_module.current_students");
    }
    public function archiveStudentList()
    {
        return view("backend.student_module.archive_students");
    }
    public function currentStudentSearch()
    {
        return view("backend.student_module.current_student_search");
    }
    public function archiveStudentSearch()
    {
        return view("backend.student_module.archive_student_search");
    }
    public function studentSwitch()
    {
        return view("backend.student_module.student_switch");
    }
    public function studentMigration()
    {
        return view("backend.student_module.student_migration");
    }
    public function printStudentId()
    {
        return view("backend.student_module.print_student_id");
    }
    public function biometricExport()
    {
        return view("backend.student_module.student_biometric_export");
    }
    public function printStudentTesimonial()
    {
        return view("backend.student_module.testimonial");
    }
}
