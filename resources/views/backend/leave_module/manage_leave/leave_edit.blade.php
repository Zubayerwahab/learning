@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Update Leave</h2>
        </header>

        <div class="session_view_link mt-5 ml-4 mb-2">
            <a href="add_leaves.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="leaves_view.html" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>

        <div class="branch_edit">

            <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Employee Type <span>*</span></label>
                     <select name="" id="">
                         <option value="">Half-time</option>
                         <option value="">Full-time</option>
                         <option value="">Part-time</option>
                         <option value="">Contractual</option>
                         <option value="">Casual</option>
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Employee <span>*</span></label>
                     <select name="" id="">
                         <option value="">Kamal</option>
                         <option value="">Faria</option>
                         <option value="">Nirob</option>
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Leave Type <span>*</span></label>
                     <select name="" id="">
                         <option value="">Medical Leave</option>
                         <option value="">Special Leave</option>
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">From Date <span>*</span></label>
                    <input type="date" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">End Date <span>*</span></label>
                    <input type="date" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Total Days <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
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
                     <a href="" class="btn bg-gradient border-0 text-white">Update</a>
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
