@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add Career</h2>
                    </header>
                    <div class="session_add">
                        <div class="row">
                            <form action="{{ route('new-career') }}" method="GET">
                                @csrf
                                <div class="col-md-10 mb-3">
                                    <label for="">Title <span>*</span></label>
                                    <input type="text" name="title" id="" value="{{ old('title') }}">
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Deadline <span>*</span></label>
                                    <input type="text" name="deadline" id="" value="{{ old('deadline') }}"><br>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Details </label>
                                    <textarea class="ckeditor" id="editor1" name="editor1">{{ old('details') }}</textarea>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">File </label>
                                    <input type="file" name="" id="file">
                                    <label for="file" id="fileCustom" class="add_messageFile"><i
                                                class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                    <span style="color:red">Attachment file type (pdf) only, maximum 10MB</span>
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
                                        <button class="btn bg-gradient border-0 text-white">Create</button>
                                        <button class="btn  cancel_btn border-0 text-white">Cancel</button>
                                    </p>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
