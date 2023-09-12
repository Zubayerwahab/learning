@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Teacher/Staff Attendence</h2>
                </header>

<div class="academic_info">
<h5>

</h5>

<div class="container">



    <div class="row mt-3 mb-4">

        <div class="col-6">
            <label for="">Day <span class="text-danger">*</span></label>
            <input type="date" name="" id="">
        </div>

        <div class="col-6">
            <label for="">Employee Type <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Employee Type</option>
                <option value="">All</option>
                <option value="">Casual</option>
                <option value="">Contractual</option>
                <option value="">Full-time</option>
                <option value="">Half-time</option>
                <option value="">Part-time</option>
            </select>
        </div>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-6">
            <label for="">Working Shift<span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Shift</option>
                <option value="">Casual</option>
                <option value="">Contractual</option>
                <option value="">Day</option>
                <option value="">Full-time</option>
                <option value="">Morning</option>
                <option value="">Part-time</option>
            </select>
        </div>

    </div>


</div>

</div>

</div>
</section>

</div>
</div>

@endsection
