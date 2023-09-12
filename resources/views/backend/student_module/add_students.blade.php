@extends("layouts.AdminPanal")
@section("content")
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add New Student</h2>
            </header>

            <div class="academic_info">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Acamedic Information
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Class <span class="text-danger">*</span></label>
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
                                <option value="" class="bold_text">English Medim</option>
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

                        <div class="col-6">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Device Serial / MAC</label>
                            <input type="text" placeholder="1">
                        </div>

                        <div class="col-6">
                            <label for="">Student ID <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Tracking ID</label>
                            <input type="text" placeholder="Last Finger Id">
                        </div>

                        <div class="col-6">
                            <label for="">Roll No <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">RFID Card No</label>
                            <input type="text" placeholder="No Depends On Device Id">
                        </div>

                        <div class="col-6 toggle-group">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt">Attendance SMS</h6>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="academic_info">


                <h5>
                    <i class="fa-solid fa-circle-info"></i> Personal Information
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Name(In English) <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Blood Group <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Name(In Bengali) <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Religion <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Religion</option>
                                <option value="">Islam</option>
                                <option value="">Hindu</option>
                                <option value="">Buddo</option>
                            </select>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Device Serial / MAC</label>
                            <input type="text" placeholder="1">
                        </div>

                        <div class="col-6">
                            <label for="">Student ID <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Date Of Birth</label>
                            <input type="date">
                        </div>

                        <div class="col-6">
                            <label for="">Nationality <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Gender</label>
                            <select name="" id="">
                                <option value="">Select Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>

                        <div class="col-6 toggle-group">
                            <label for="">Photo</label>
                            <input type="file" name="" id="file">
                            <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
                        </div>

                    </div>

                </div>

            </div>

            <div class="academic_info">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Contact Information
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Mobile <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Email</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Present Address <span class="text-danger">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-6">
                            <label for="">Parmanant Address <span class="text-danger">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <br>
                            <input type="checkbox" name="" id="check"><span>Same as parmanant</span>
                        </div>

                    </div>

                </div>

            </div>


            <div class="academic_info">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Parents Information
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Name <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Name <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Phone <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Phone <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's NID</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's NID</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Profession</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Profession</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Designation</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Designation</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Office Name & Addres</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-6">
                            <label for="">Office Name & Addres</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Office Contact No.</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Office Contact No.</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Father's Photo</label>
                            <input type="file" name="" id="file">
                            <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                            <label for=""><span>(maximum image size 300 KB)</span></label>
                        </div>

                        <div class="col-6">
                            <label for="">Mother's Photo</label>
                            <input type="file" name="" id="">
                            <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                            <label for=""><span>(maximum image size 300 KB)</span></label>
                        </div>

                    </div>

                </div>

            </div>


            <div class="academic_info">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Guardian / Receiver Information
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Guardian / Receiver</label>
                            <input type="checkbox" name="" id="check"><span>Father</span>
                            <input type="checkbox" name="" id="check"><span>Mother</span>
                            <input type="checkbox" name="" id="check"><span>Other</span>
                        </div>

                        <div class="col-6">
                            <label for="">Guardian's Profession</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Guardian's Name <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Guardian's Designation</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Relation With Student</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Office Contact No.</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Guardian's Phone <span>*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">Office Name & Address</label>
                            <input type="text" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Status</label>
                            <select name="" id="">
                                <option value="">Active</option>
                                <option value="">Deactive</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>

            <p class="text-center">
                <a href="#" class="btn btn-primary px-5">Save</a>
            </p>

        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection