<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use App\Models\Backend\hr_module\EmployeeType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Backend\hr_module\Type;

class EmployeetypeController extends Controller
{
    public function allEmployeetype()
    {
        $emptypes = EmployeeType::all();
        // if($emptypes->deduct_salary == 1){
        // $emptypes->deduct_salary = "Yes";
        // }else
        return view('backend.hr_module.employee_type.employee_type', compact('emptypes'));
    }
    public function addEmployeetype()
    {
        $all_types = Type::all();
        return view('backend.hr_module.employee_type.add_employee_type', compact('all_types'));
    }
    public function storeEmployeetype(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'name' => ['required', 'max:100'],
            'deduct_salary' => ['required'],
            'over_time' => ['required'],
            'status' => ['required'],
        ]);
        $type_id = $request->type;
        $type_id_details = Type::find($type_id);
        $name = $type_id_details->title;
        $id = $type_id_details->id;
        EmployeeType::insert([
            'type' => $name,
            'type_id' => $id,
            'name' => $request->name,
            'deduct_salary' => $request->deduct_salary,
            'over_time' => $request->over_time,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Employee type added successfully!');
    }
    public function showEmployeetype($id)
    {
        $emptype = EmployeeType::find($id);

        return view('backend.hr_module.employee_type.employee_type_view', compact('emptype'));
    }
    public function editEmployeetype($id)
    {
        $emptype = EmployeeType::find($id);
        $all_types = Type::all();

        return view('backend.hr_module.employee_type.employee_type_edit', compact('emptype', 'all_types'));
    }
    public function updateEmployeetype(Request $request, $id)
    {
        $request->validate([
            'type' => ['required'],
            'name' => ['required', 'max:100'],
            'deduct_salary' => ['required'],
            'over_time' => ['required'],
            'status' => ['required'],
        ]);
        $type_id = $request->type;
        $type_id_details = Type::find($type_id);
        $name = $type_id_details->title;
        $_id = $type_id_details->id;
        $emptype = EmployeeType::find($id);
        $emptype->type = $name;
        $emptype->type_id = $_id;
        $emptype->name = $request->name;
        $emptype->deduct_salary = $request->deduct_salary;
        $emptype->over_time = $request->over_time;
        $emptype->status = $request->status;
        $emptype->updated_at = Carbon::now();
        $emptype->update();
        return back()->with('success', 'Employee type updated successfully!');
    }
    public function deleteEmployeetype($id)
    {
        EmployeeType::find($id)->delete();
        return back()->with('success', 'Employee type deleted successfully!');
    }
}
