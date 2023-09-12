<?php

namespace App\Http\Controllers\backend\academic_module;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AllClassController extends Controller
{
    ////// All Shift List////////
    public function AllClassList()
    {

        $all_class = AllClass::get();
        return view('backend.academic_module.all_class.all_class_list', compact('all_class'));
    } //end method


    ////// All Shift List////////
    public function AddClass()
    {

        return view('backend.academic_module.all_class.add_class');
    } //end method


    ////// Store Shift List////////
    public function StoreClass(Request $request)
    {


        $request->validate([
            'class_code' => 'required|integer|regex:/\b\d{2}\b/',
        ], [
            'product_code.required' => 'Product code Must Be Unique'
        ]);

        AllClass::insert([
            'medium_name' => $request->medium_name,
            'class_name' => $request->class_name,
            'rank' => $request->rank,
            'class_code' => $request->class_code,
            'has_group' => $request->has_group,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Class Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method

    ////// edit Shift List////////
    public function EditClass($id)
    {

        $class_data = AllClass::findOrFail($id);

        return view('backend.academic_module.all_class.edit_class', compact('class_data'));
    } //end method

    ////// update Shift List////////
    public function UpdateClass(Request $request)
    {

        $class_id = $request->class_id;

        AllClass::findOrFail($class_id)->Update([
            'medium_name' => $request->medium_name,
            'medium_name' => $request->medium_name,
            'class_name' => $request->class_name,
            'rank' => $request->rank,
            'class_code' => $request->class_code,
            'has_group' => $request->has_group,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Class Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method

    ////// delete Shift List////////
    public function DeleteClass($id)
    {

        AllClass::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all-class-list')->with($notification);
    } //end method


    ////// View Shift List////////
    public function ClassView($id)
    {

        $class_data = AllClass::findOrFail($id);

        return view('backend.academic_module.all_class.class_view', compact('class_data'));
    } //end method
}
