@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Working Shift</h2>
            </header>
            <form action="{{route('shift.input')}}" method="POST">
                @csrf
                <div class="branch_edit">
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Name <span>*</span></label>
                            <input type="text" placeholder="Shift Name" name="name" id="">
                            @error('name')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Start Time <span>*</span></label>
                            <input type="time" placeholder="Start Time" name="s_time" id="">
                        </div>
                        @error('s_time')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">End Time <span>*</span></label>
                            <input type="time" placeholder="End Time" name="e_time" id="">
                        </div>
                        @error('e_time')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">Green Limit <span>*</span></label>
                            <input type="time" placeholder="Green Time" name="g_limit" id="">
                        </div>
                        @error('g_limit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">Orange Limit<span>*</span></label>
                            <input type="time" placeholder="Orenge Time" name="o_limit" id="">
                        </div>
                        @error('o_limit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">Red Limit <span>*</span></label>
                            <input type="time" placeholder="Red Time" name="r_limit" id="">
                        </div>
                        @error('r_limit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        @error('status')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                            </p>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

</div>
@endsection
