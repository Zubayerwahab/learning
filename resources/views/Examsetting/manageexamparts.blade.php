@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Exam Parts
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamparts') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center branch_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <input type="text" name="" id="">
                                    </td>
                                    <td>
                                        <input type="text" name="" id="">
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Class Test</td>
                                    <td>1</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="exam_part_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="exam_part_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Class Test</td>
                                    <td>1</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="exam_part_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="exam_part_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Class Test</td>
                                    <td>1</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="exam_part_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="exam_part_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>Class Test</td>
                                    <td>1</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="exam_part_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="exam_part_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                            </tbody>
                        </table>
                   
                    <!---- /session table ----->
            
                </form> 
            </div>
    
        </div>    
    </section>
    
</div>
@endsection

