@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Working Days
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamworkingdays') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center branch_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Exam Term</th>
                                    <th scope="col">Classes</th>
                                    <th scope="col">Class Start Date</th>
                                    <th scope="col">Class End Date</th>
                                    <th scope="col">Total Working Days</th>
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
                                            <option value="" class="bold_text">Bangla Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">KG</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="">Three</option>
                                            <option value="">Four</option>
                                            <option value="">Five</option>
                                            <option value="">Six</option>
                                            <option value="">Seven</option>
                                            <option value="">Eight</option>
                                            <option value="">Nine</option>
                                            <option value="">Ten</option>
                                            <option value="">Eleven</option>
                                            <option value="">Tweleve</option>
                                            <option value="" class="bold_text">English Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">KG</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="">Three</option>
                                            <option value="">Four</option>
                                            <option value="">Five</option>
                                            <option value="">Six</option>
                                            <option value="">Seven</option>
                                            <option value="">Eight</option>
                                            <option value="">Nine</option>
                                            <option value="">Ten</option>
                                            <option value="">Eleven</option>
                                            <option value="">Tweleve</option>
                                        </select>
                                    </td>
                                    <td>
                                       <input type="date" name="" id="">
                                    </td>
                                    <td>
                                        <input type="date" name="" id="">
                                     </td>
                                     <td>
                                        <input type="text" name="" id="">
                                     </td>
                                    <td></td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Mid</td>
                                    <td>Six</td>
                                    <td>2020-01-01</td>
                                    <td>2020-01-01</td>
                                    <td>80</td>
                                    <td>
                                        <a href="working_days_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_days_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Mid</td>
                                    <td>Six</td>
                                    <td>2020-01-01</td>
                                    <td>2020-01-01</td>
                                    <td>80</td>
                                    <td>
                                        <a href="working_days_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_days_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Mid</td>
                                    <td>Six</td>
                                    <td>2020-01-01</td>
                                    <td>2020-01-01</td>
                                    <td>80</td>
                                    <td>
                                        <a href="working_days_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_days_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
    
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>Mid</td>
                                    <td>Six</td>
                                    <td>2020-01-01</td>
                                    <td>2020-01-01</td>
                                    <td>80</td>
                                    <td>
                                        <a href="working_days_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="working_days_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
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

