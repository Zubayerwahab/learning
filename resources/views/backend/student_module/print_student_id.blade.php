@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student ID Card</h2>
            </header>

            <div class="academic_info student_search">
                <h5>
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Class Name <span class="text-danger">*</span></label>
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
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Student <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Student</option>
                                <option value="">00213 - Maruf</option>
                                <option value="">02146 - Kamal</option>
                                <option value="">02146 - Kamal</option>
                                <option value="">02146 - Kamal</option>
                                <option value="">02146 - Kamal</option>
                                <option value="">02146 - Kamal</option>
                                <option value="">02146 - Kamal</option>
                            </select>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Valid Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div> <br><br>

                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Establishment </label>
                            <input type="text" name="" id="">
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Back Part Design? </label>
                            <input type="radio" name="" id="rad_btn"><span>Back Part (Normal)</span><br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            &nbsp &nbsp &nbsp<input type="radio" name="" id="rad_btn">Back Part (With Parent's Photo)
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck"> Show Session ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Show Roll No.?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Blood Group ?</h6>
                            </div>
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" check id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck"> Show Shift ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Show Group ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt " id="printCheck">Students Who has Picture ?</h6>
                            </div>
                        </div> <br><br>

                    </div>

                </div>

            </div>


            <p class="text-center">
                <a href="#" class="btn btn-primary px-5">Submit</a>
            </p>

        </div>
    </section>

</div>
@endsection