@extends('layouts.AdminPanal')
@section('content')

   <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Class</h2>
        </header>
        <div class="branch_edit class_edit">

            <form method="post" action="{{ route('store-class') }}">
                @csrf

                 <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Medium Name <span>*</span></label>
                     <select name="medium_name" id="" required>
                         <option value="bangla_medium">Bangla Medium</option>
                         <option value="english_medium">English Medium</option>
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Class Name <span>*</span></label>
                    <input type="text" placeholder=" "  name="class_name" id="" value="{{ old('class_name') }}" required>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Rank <span>*</span></label>
                    <input type="text" placeholder=" "  name="rank" id="" value="{{ old('rank') }}" required>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Class Code <span>*</span></label>
                    <input type="number" placeholder=" "  name="class_code" value="{{ old('class_code') }}" id="" @error('class_code') is-invalid @enderror"   ><br>
                    <span style="color: red; padding-left: 102px;" class="mt-2 mr-10 d-block">Class code must be 2 digit. For examples : Class Nine - 09</span>
                    @error('class_code')
                    <span style="color: red;" > {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-10 mb-3" style="margin-left: -191px">
                    <label for="">Has Group/4th Subject <span>*</span></label>
                    <p class="rad_text">
                      <input type="radio" placeholder="Education" name="has_group" value="{{ old('has_group') }}" id="check" value="1" required>
                      <b>activities</b>
                    </p> &nbsp; &nbsp;
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="has_group" value="{{ old('has_group') }}" id="check" value="0" required>
                        <b>Holidays</b>
                      </p>
                </div>



                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                     <select name="status" id="" required value="{{ old('status') }}">
                         <option value="active" id="ac" ><label for="ac">Active</label></option>
                         <option value="inactive" id="in" ><label for="in">Inactive</label></option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                     <a href="{{ route('all-class-list') }}" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

            </div>
        </form>

        </div>
    </div>
</section>

    </div>
</div>
@endsection
