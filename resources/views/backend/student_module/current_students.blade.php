
@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Our Current Student's
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <a href="students-add.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <div class="studetn_count">
                        <h3>
                            <p><i class="fa-solid fa-person"></i> Total Male : 123</p>
                            <p><i class="fa-solid fa-person-dress"></i> Total Female : 52</p>
                        </h3>
                        <p class="text-right">Showing 1-1 of 1 item</p>
                    </div>
                    <!---- student table  ----->
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3 text-center current_student_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Shift</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Device Serial / MAC</th>
                                    <th scope="col">Finger ID</th>
                                    <th scope="col">RFID Card No</th>
                                    <th scope="col">Guardian's Phone</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">Select Class &nbsp;&nbsp;&nbsp;</option>
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
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Morning</option>
                                            <option value="">Day</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">Select Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                            <option value="">A</option>
                                            <option value="">B</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>
                                    <td><input type="text" name="" id=""></td>

                                    <td>
                                        <select name="" id="">
                                            <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>All</td>
                                    <td>One</td>
                                    <td>Morning</td>
                                    <td>A</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td>0211123</td>
                                    <td>13</td>
                                    <td>1</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>0000000000</td>
                                    <td>29-02-2022</td>
                                    <td>Active</td>
                                    <td class="link_table">
                                        <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                        <a href="student_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="student_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>All</td>
                                    <td>One</td>
                                    <td>Morning</td>
                                    <td>A</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td>0211123</td>
                                    <td>13</td>
                                    <td>1</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>0000000000</td>
                                    <td>29-02-2022</td>
                                    <td>Active</td>
                                    <td class="link_table">
                                        <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                        <a href="student_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="student_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>All</td>
                                    <td>One</td>
                                    <td>Morning</td>
                                    <td>A</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td>0211123</td>
                                    <td>13</td>
                                    <td>1</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>0000000000</td>
                                    <td>29-02-2022</td>
                                    <td>Active</td>
                                    <td class="link_table">
                                        <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                        <a href="student_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="student_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>All</td>
                                    <td>One</td>
                                    <td>Morning</td>
                                    <td>A</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td>0211123</td>
                                    <td>13</td>
                                    <td>1</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>0000000000</td>
                                    <td>29-02-2022</td>
                                    <td>Active</td>
                                    <td class="link_table">
                                        <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                        <a href="student_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="student_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>All</td>
                                    <td>One</td>
                                    <td>Morning</td>
                                    <td>A</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td>0211123</td>
                                    <td>13</td>
                                    <td>1</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>0000000000</td>
                                    <td>29-02-2022</td>
                                    <td>Active</td>
                                    <td class="link_table">
                                        <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                        <a href="student_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="student_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!---- /student table ----->
                </form>
            </div>

            <div class="mt-5 ml-4">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>

</div>
@endsection