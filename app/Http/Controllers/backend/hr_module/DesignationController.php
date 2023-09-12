<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\hr_module\Designation;
use App\Models\Backend\hr_module\Type;
use Carbon\Carbon;

class DesignationController extends Controller
{
    public function allDesignation()
    {
        $designations = Designation::all();
        return view('backend.hr_module.designation.all_designations', compact('designations'));
    }
    public function addDesignation()
    {
        $all_types = Type::all();
        return view('backend.hr_module.designation.add_designation', compact('all_types'));
    }
    public function storeDesignation(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'title' => ['required', 'max:100'],
            'status' => ['required'],
        ]);
        $type_id = $request->type;
        $type_id_details = Type::find($type_id);
        $title = $type_id_details->title;
        $id = $type_id_details->id;
        Designation::insert([
            'type' => $title,
            'type_id' => $id,
            'title' => $request->title,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Designation added successfully!');
    }
    public function showDesignation($id)
    {
        $designation = Designation::find($id);
        return view('backend.hr_module.designation.designation_view', compact('designation'));
    }
    public function editDesignation($id)
    {
        $designation = Designation::find($id);
        $all_types = Type::all();
        return view('backend.hr_module.designation.designation_edit', compact('designation', 'all_types'));
    }
    public function updateDesignation(Request $request, $id)
    {
        $request->validate([
            'type' => ['required'],
            'title' => ['required', 'max:100'],
            'status' => ['required'],
        ]);
        $type_id = $request->type;
        $type_id_details = Type::find($type_id);
        $name = $type_id_details->title;
        $_id = $type_id_details->id;
        $designation = Designation::find($id);
        $designation->type = $name;
        $designation->type_id = $_id;
        $designation->title = $request->title;
        $designation->status = $request->status;
        $designation->updated_at = Carbon::now();
        $designation->update();
        return back()->with('success', 'Designation updated successfully!');
    }
    public function deleteDesignation($id)
    {
        Designation::find($id)->delete();
        return back()->with('success', 'Designation deleted successfully!');
    }
}
