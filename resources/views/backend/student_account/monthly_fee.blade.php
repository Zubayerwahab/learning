@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Admission Fees (Monthly)</h2>
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
                    <label for="">Shift <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Shift</option>
                        <option value="">Morning</option>
                        <option value="">Day</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Section <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Section</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Gender <span>*</span></label>
                    <select name="" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for=""></label>
                   <p class="rad_text">
                      <input type="radio" placeholder="Education" name="" id="check">
                      <b>For New Students (Only for Admission)</b>
                    </p> &nbsp; &nbsp;
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="" id="check">
                        <b>For Existing & New Students (All)</b>
                    </p>
                    <label for=""></label>
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="" id="check">
                        <b>For Existing & New Students Except (Special Discount)</b>
                    </p>
                 </div>

                 <div class="col-md-10 mt-4 mb-3">
                    <p style="color:brown; background:pink;padding:5px"><b>Warning!</b>  Fees Setting (Admission) will be applicable for only new/existing students. [ Gender is not mandatory ], Only select Gender when Boy's & Girl's Admission fees are different.</p>
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
