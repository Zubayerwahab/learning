@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Testomonial</h2>
            </header>

            <div class="academic_info student_search">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Student Search (Current)
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select>
                        </div> <br><br>

                        <div class="col-12 col-md-6 col-lg-4">
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
                        </div><br><br>

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div><br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Section<span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div><br><br>

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Student <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Student</option>
                                <option value="">02124 - Mamun</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                                <option value="">01234 - Kamal</option>
                            </select>
                        </div><br><br>
                    </div>

                </div>

            </div>

            <p class="text-center">
                <a href="#" class="btn btn-primary px-5">Submit</a>
            </p>

            <div class="testomonial">

                <div class="testomonialBox">

                    <div class="testomonialTop">
                        <h1>Learning Campus</h1>
                        <p>Uttara, Uttarkhan Dhaka 1230</p>
                        <p>Phone : 01234567890</p>
                        <p>Email : learningcampus@gmail.com</p>
                        <h2><span>Testomonial</span> </h2>
                    </div>

                    <div class="testomonialText">

                        <p>
                            <i>
                                This is certify that <b>Rony</b> son/daughter of <b>Rony Biswas</b> and <b>Roxy Das</b> , a student of this institute bearing Roll No. 1 passed the annual examination of class <b>Nine</b> in <b>2020</b> and secured <b>G.P.A 4.50</b> on scale of 5.00. His/her date of birth as recorded in his/her Registration Book is 11-Aug-2020 .
                                To the best of my knowledge and belief he/she is a good student. During this study period he/she did not take part in any activities subversive of the state or discipline.
                            </i>
                        </p>
                        <p>
                            <i>I wish him/her every success in his/her life.</i>
                        </p>
                        <h6>
                            <span>Date</span>
                            <span>Signature of principal</span>
                        </h6>
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