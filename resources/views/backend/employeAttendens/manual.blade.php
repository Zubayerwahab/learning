@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Manual Attendence</h2>
            </header>

            <div class="academic_info">

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Day <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Employee Type <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Employee Type</option>
                                <option value="">All</option>
                                <option value="">Casual</option>
                                <option value="">Contactual</option>
                                <option value="">Full-time</option>
                                <option value="">Half Day</option>
                                <option value="">Part-time</option>
                                <option value="">Parmanant</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Working Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Working Shift</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <a href="#" class="btn btn-primary">Submit</a>
                        </div>

                    </div>

                </div>

                <div class="attendenceTable table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr style="background-color:rgb(226, 226, 226);">
                                <th scope="col">SL</th>
                                <th scope="col">Emp. ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">In Time</th>
                                <th scope="col">Out Time</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>20101001</td>
                                <td>
                                    <img src="assets/img/student.png" class="student_img" alt="">
                                    <span>Tamim</span>
                                </td>
                                <td>Asst. Teacher</td>
                                <td>01754786512</td>
                                <td><input type="date"></td>
                                <td><input type="date"></td>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </section>

</div>
@endsection

@section('fotter_js')

@endsection
