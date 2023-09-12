@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Migration</h2>
            </header>

            <div class="migrate_div">
                <h6 class="warning">
                    <i class="fa-solid fa-circle-info"></i> Warning ! Please select Migrated From (Current Session) & Migrated To (New Session) carefully ! Otherwise you have to manually.
                </h6>


                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="migrate_left">
                            <h4>Migrate From</h4>

                            <div>
                                <label for="">Session <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Session</option>
                                    <option value="">2022</option>
                                    <option value="">2021</option>
                                    <option value="">2020</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Class <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Class</option>
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
                            </div>

                            <div>
                                <label for="">Shift <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Shift</option>
                                    <option value="">Morning</option>
                                    <option value="">Day</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Section <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Section</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="migrate_left">
                            <h4>Migrate To</h4>

                            <div>
                                <label for="">Migrated Session <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Session</option>
                                    <option value="">2022</option>
                                    <option value="">2021</option>
                                    <option value="">2020</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Migrated Class <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Class</option>
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
                            </div>

                            <div>
                                <label for="">Migrated Shift <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Shift</option>
                                    <option value="">Morning</option>
                                    <option value="">Day</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Migrated Section <span>*</span></label>
                                <select name="" id="">
                                    <option value="">Select Section</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>



            </div>


            <p class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-primary px-5">Review Migration</a>
            </p>

            <div class="search_result table-responsive">
                <div class="attendence_summary">

                    <div class="attendence_summary_top text-center">
                        <h1>Learning Campus (Main Branch)</h1>
                        <a href="#">www.LearningCampus.com</a>
                        <p>Mirpur-3, Dhaka</p>
                        <h3>Student Migration List (Class 7)</h3>
                    </div>

                    <div class="attendence_summary_mid table-responsive">
                        <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                        <!---- student table  ----->
                        <table class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>20201002</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td> Six (A)</td>
                                    <td> Six (A) </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>20201002</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td> Six (A)</td>
                                    <td> Six (A) </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>20201002</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td> Six (A)</td>
                                    <td> Six (A) </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>20201002</td>
                                    <td>
                                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                                        <br><a href="#">Mahim</a>
                                    </td>
                                    <td> Six (A)</td>
                                    <td> Six (A) </td>
                                </tr>

                            </tbody>
                        </table>
                        <!---- /student table ----->
                    </div>
                </div>
            </div>



        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection