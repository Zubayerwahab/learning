@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Student Wise Wavier</h2>
        </header>
        <div class="session_add">
            <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Session <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Session</option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                        <option value="">2018</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Class <span>*</span></label>
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
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Student <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Student</option>
                        <option value="">56789 - Kamal</option>
                        <option value="">45675 - Rana</option>
                        <option value="">45675 - Rana</option>
                        <option value="">45675 - Rana</option>
                        <option value="">45675 - Rana</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Waived Month <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Waived Month</option>
                        <option value="">Admission</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                        <option value="">May</option>
                        <option value="">June</option>
                        <option value="">July</option>
                        <option value="">August</option>
                        <option value="">September</option>
                        <option value="">October</option>
                        <option value="">November</option>
                        <option value="">December</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Fees Type <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Fees Type</option>
                        <option value="">1.00 Tution Fees</option>
                        <option value="">11.00 Registration Fees</option>
                        <option value="">18 Admission Fees</option>
                        <option value="">2.00 Exam Fees</option>
                        <option value="">3.00 Sports Fees</option>
                        <option value="">30.00 Yearly Tour</option>
                        <option value="">32.00 Day Care</option>
                        <option value="">34.00 Admission Fees</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Wavier <span>*</span></label>
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
                     <a href="" class="btn bg-gradient border-0 text-white">Save</a>
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
