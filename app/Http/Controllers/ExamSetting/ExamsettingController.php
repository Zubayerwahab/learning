<?php

namespace App\Http\Controllers\ExamSetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\academic_module\AllClass;
use App\Models\ExamSetting\GradeMOdule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamSetting\ExamTerms;

class ExamsettingController extends Controller
{

    public function ManageGrade(){
        $grades = GradeMOdule::latest()->paginate(15);
        return view('backend.Examsetting.grade.managegrade',compact('grades'));
    }//end method
    public function AddGrade(){
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.grade.addgrade',compact('classname'));
    }//end method
   
    public function InsertGrade(Request $request){
        $request->validate([
            'class_name' => 'required',
            'start_mark' => 'required|numeric',
            'end_mark' => 'required|numeric',
            'grade_latter' => 'required|alpha',
            'grade_point' => 'required|numeric',
            'remarks' => 'required|max:100',
            'status' => 'required',
        ]);
        $gradeinsert = new GradeMOdule();
        $gradeinsert->class_name = $request->class_name;
        $gradeinsert->start_mark = $request->start_mark;
        $gradeinsert->end_mark = $request->end_mark;
        $gradeinsert->grade_latter = ucwords($request->grade_latter);
        $gradeinsert->grade_point = $request->grade_point;
        $gradeinsert->remarks = $request->remarks;
        $gradeinsert->status = $request->status;
        $gradeinsert->created_by = Auth::user()->id;
        $gradeinsert->created_at = Carbon::now();
        $gradeinsert->save();
        $notification = array(
            'message' => 'Grade Added',
            'alert-type' => 'success'
        );
        return redirect()->route('managegrade')->with($notification);

    }//end method

    public function GradeEdit($id){
        $grade = GradeMOdule::find($id);
        $classname = AllClass::select('id','class_name')->get();
        return view('backend.Examsetting.grade.editgrades',compact('grade','classname'));
    }//end method


    public function UpdateGrade(Request $request,$id){
        $request->validate([
            'class_name' => 'required',
            'start_mark' => 'required|numeric',
            'end_mark' => 'required|numeric',
            'grade_latter' => 'required|alpha',
            'grade_point' => 'required|numeric',
            'remarks' => 'required|max:100',
            'status' => 'required',
        ]);
        $gradeinsert = GradeMOdule::findOrFail($id);
        $gradeinsert->class_name = $request->class_name;
        $gradeinsert->start_mark = $request->start_mark;
        $gradeinsert->end_mark = $request->end_mark;
        $gradeinsert->grade_latter = ucwords($request->grade_latter);
        $gradeinsert->grade_point = $request->grade_point;
        $gradeinsert->remarks = $request->remarks;
        $gradeinsert->status = $request->status;
        $gradeinsert->updated_by = Auth::user()->id;
        $gradeinsert->updated_at = Carbon::now();
        $gradeinsert->update();
        $notification = array(
            'message' => 'Grade Updated',
            'alert-type' => 'info'
        );
        return redirect()->route('managegrade')->with($notification);

    }//end method

    public function GradeDelete($id){
        $gradeinsert = GradeMOdule::findOrFail($id);
        $gradeinsert->delete();
        $notification = array(
            'message' => 'Grade Deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('managegrade')->with($notification);
    }//end method
    public function GradeShow($id){
        $gradeshow = GradeMOdule::findOrFail($id);
        return view('backend.Examsetting.grade.showgrades',compact('gradeshow'));
    }//end method



   
    // EXAMTERMS

    public function Manageexamterms(){
        $terms = ExamTerms::latest()->paginate(15);
        return view('backend.Examsetting.examterms.manageexamterms',compact('terms'));
    }//end method
    public function Addexamterms(){
        return view('backend.Examsetting.examterms..addexamterms');
    }//end method
    public function InsertTerms(Request $request){
       $request->validate([
            'term_name'=> 'required|max:150',
            'rank'=> 'required|max:150',
            'related_to_final'=> 'required',
            'cfinal_term'=> 'required',
            'admit_routine'=> 'required',
            'admitcard_instruction'=> 'required',
            'routine_instruction'=> 'required',
            'result_publish'=> 'required',
            'status'=> 'required',
       ]);

       $insertterms = new ExamTerms();
       $insertterms->term_name = $request->term_name;
       $insertterms->rank = $request->rank;
       $insertterms->related_to_final = $request->related_to_final;
       $insertterms->cfinal_term = $request->cfinal_term;
       $insertterms->admit_routine = $request->admit_routine;
       $insertterms->admitcard_instruction = $request->admitcard_instruction;
       $insertterms->result_publish = $request->result_publish;
       $insertterms->routine_instruction = $request->routine_instruction;
       $insertterms->status = $request->status;
       $insertterms->save();
       $notification = array(
        'message' => 'Terms Added',
        'alert-type' => 'info'
         );
         return redirect()->route('manageexamterms')->with($notification);

    }//end method





    // EXAM PARTS

    public function Manageexamparts(){
        return view('Examsetting.manageexamparts');
    }//end method
    public function Addexamparts(){
        return view('Examsetting.addexamparts');
    }//end method
    
    
    // EXAM ASSIGN

    public function Manageexamassign(){
        return view('Examsetting.manageexamassign');
    }//end method
    public function Addexamassign(){
        return view('Examsetting.addexamassign');
    }//end method


    // EXAM WORKINGDAYS

    public function Manageexamworkingdays(){
        return view('Examsetting.manageexamworkingdays');
    }//end method
    public function Addexamworkingdays(){
        return view('Examsetting.addexamworkingdays');
    }//end method
   
   
//    RESULT SETTING
    public function ResultSetting(){
        return view('Examsetting.resultsetting');
    }//end method

    //    Exam ELIGIBILITY
    public function ExamEligibility(){
        return view('Examsetting.exameligibility');
    }//end method
    
    //    Exam SeatPlan
    public function ExamSeatplan(){
        return view('Examsetting.examseatplan');
    }//end method


    //    Exam Attendance
    public function ExamAttendance(){
        return view('Examsetting.examattendance');
    }//end method

    //    Exam Attendance
    public function ExamattenSubject(){
        return view('Examsetting.examattensubject');
    }//end method
    public function ExamattenExam(){
        return view('Examsetting.examattenexam');
    }//end method

}
