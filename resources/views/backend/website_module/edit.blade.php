@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Edit Notice</h2>
                    </header>
                    <div class="session_add">
                        <div class="row">
                            <form action="{{ route('update-notice',['id'=>$notice->id]) }}" method="POST">
                                @csrf

                                <div class="col-md-10 mb-3">
                                    <label for="">Title <span>*</span></label>
                                    <input type="text" name="title" id="" value="{{ $notice->title }}">
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">File Upload <span>*</span></label>
                                    <input type="file" name="file" id="file" value="{{ $notice->file_upload }}">
{{--                                    <label for="file" id="fileCustom" class="add_messageFile"><i--}}
{{--                                                                                        class="fa-solid fa-camera"></i> Choose Photo</label><br>--}}
                                        <span style="color: red;">Only PDF allowed - maximum 10MB</span>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Notice <span>*</span> </label>
                                    <textarea class="ckeditor" id="editor1" name="notice" value="{{ $notice->notice }}"></textarea>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="">Status <span>*</span></label>
                                    <select name="status" id="">
                                        <option value="1" {{ $notice->status == 1 ? 'checked' : '' }}>Active</option>
                                        <option value="0" {{ $notice->status == 0 ? 'checked' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-10 mt-4 mb-3">
{{--                                    <input type="submit" class="btn bg-gradient border-0 text-white" value="Update Notice">--}}
                                    <p>
                                        <button class="btn bg-gradient border-0 text-white">Update</button>
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

