@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Working Days</h2>
            </header>
            <div class="branch_edit">
                <div class="row">
    
                    <div class="col-md-10 mb-3">
                        <label for="">Exam Term <span>*</span></label>
                         <select name="" id="">
                            <option value="">Select Exam Term</option>
                            <option value="">Half Yearly Exam</option>
                            <option value="">Annual Exam</option>
                          </select>
                     </div>
                    
                    <div class="col-md-10 mb-3">
                        <label for="">Classes <span>*</span></label>
                         <select name="" id="">
                            <option value="">All</option>
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
                        <label for="">Class Start Date <span>*</span></label>
                        <input type="date" name="" id="">
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Class End Date <span>*</span></label>
                        <input type="date" name="" id="">
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Total Working Days <span>*</span></label>
                        <input type="text" name="" id="">
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
@endsection