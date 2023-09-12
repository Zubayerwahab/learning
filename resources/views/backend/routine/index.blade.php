@extends('layouts.AdminPanal')
@section('content')
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">General Routine</h2>
                </header>
                <div class="branch_edit">
                    <div class="row">


                        <div class="col-md-10 mb-3">
                            <label for="">Class <span>*</span></label>
                            <select name="" id="">
                                <option value="selectClass">Select Class</option>
                                <option value="banglaMedium" class="bold_text">Bangla Medium</option>
                                <option value="play">Play</option>
                                <option value="nursary">Nursary</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="englishMedium" class="bold_text">English Medium</option>
                                <option value="play">Play</option>
                                <option value="nursary">Nursary</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Shift <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Night</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Section <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Routine Day <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Routine Day</option>
                                <option value="">Saturday</option>
                                <option value="">Sunday</option>
                                <option value="">Monday</option>
                                <option value="">Tuesday</option>
                                <option value="">Wednessday</option>
                                <option value="">Thursday</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Start Time<span>*</span></label>
                            <input type="time" name="" id="">
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">End Time<span>*</span></label>
                            <input type="time" name="" id="">
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Break / Tiffin ? <span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="a" id="check">
                                <b>Yes</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" name="a" id="check">
                                <b>No</b>
                            </p>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Subject <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Subject</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Teacher <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Teacher</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="" id="">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <a href="" class="btn bg-gradient border-0 text-white">Save</a>
                                <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>




@endsection
