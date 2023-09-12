@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Assigned Exam
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamassign') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center branch_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Exam Term</th>
                                    <th scope="col">Exam Part</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Individual Pass ?</th>
                                    <th scope="col">Consider Fail on Absent ?</th>
                                    <th scope="col">Marks for Term (%)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <select name="" id="">
                                            <option value="">2022</option>
                                            <option value="">2021</option>
                                            <option value="">2020</option>
                                            <option value="">2019</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Half Yearly Exam</option>
                                            <option value="">Annual Exam</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Class Test</option>
                                            <option value="">Toutorial</option>
                                            <option value="">Ques Test</option>
                                            <option value="">Final</option>
                                            <option value="">Written</option>
                                            <option value="">MCQ</option>
                                            <option value="">Practical</option>
                                            <option value="">CQ</option>
                                            <option value="">Objective</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="" class="bold_text">Bangla Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="" class="bold_text">English Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>    
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>    
                                        </select>
                                    </td>
                                 
                                    <td></td>
                                    <td></td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Half Yearly Exam</td>
                                    <td>Written</td>
                                    <td>Six</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>100%</td>
                                    <td>
                                        <a href="assign_exam_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="assign_exam_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Half Yearly Exam</td>
                                    <td>Written</td>
                                    <td>Six</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>100%</td>
                                    <td>
                                        <a href="assign_exam_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="assign_exam_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Half Yearly Exam</td>
                                    <td>Written</td>
                                    <td>Six</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>100%</td>
                                    <td>
                                        <a href="assign_exam_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="assign_exam_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Half Yearly Exam</td>
                                    <td>Written</td>
                                    <td>Six</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>100%</td>
                                    <td>
                                        <a href="assign_exam_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="assign_exam_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Half Yearly Exam</td>
                                    <td>Written</td>
                                    <td>Six</td>
                                    <td>No</td>
                                    <td>No</td>
                                    <td>100%</td>
                                    <td>
                                        <a href="assign_exam_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="assign_exam_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
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

