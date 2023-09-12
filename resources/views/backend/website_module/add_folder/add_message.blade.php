@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add Message</h2>
                    </header>
                    <div class="session_add">
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Name <span>*</span></label>
                                <input type="text" name="" id="">
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Designation <span>*</span></label>
                                <input type="text" placeholder=" " name="" id="">
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Photo <span>*</span></label>
                                <input type="file" name="" id="file">
                                <label for="file" id="fileCustom" class="add_messageFile"><i
                                        class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                <span style="color: red;">Only image (png,jpg,gif) width = 1200px & Height = 400px - maximum
                                    1MB</span>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Message <span>*</span></label>
                                <textarea class="ckeditor" id="editor1" name="editor1"></textarea>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Rank <span>*</span></label>
                                <input type="text" name="" id="">
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
                                    <a href="" class="btn bg-gradient border-0 text-white">Create</a>
                                    <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
