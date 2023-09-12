@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Assign Exam</h2>
            </header>
            <div class="session_add">
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
                        <label for="">Exam Part <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select Exam Part</option>
                            <option value="">Class Test</option>
                            <option value="">Ques Test</option>
                            <option value="">CT</option>
                            <option value="">Final</option>
                            <option value="">Written</option>
                        </select>
                    </div>
    
                    <div class="col-md-10 mb-3">
                        <label for="">Individual Pass ? <span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" placeholder="Education" name="" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" name="" id="check"> 
                            <b>No</b> 
                          </p> 
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Consider Fail on Absent ?<span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" placeholder="Education" name="" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" name="" id="check"> 
                            <b>No</b> 
                          </p> 
                     </div>
    
                     
                     <div class="col-md-10 mb-3">
                        <label for="">Marks for Term (%) <span>*</span></label>
                        <input type="text" name="" id="">
                     </div>
    
    
                     <div class="col-md-10 mb-3">
                        <label for="">Class <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select Class</option>
                            <option value="" class="bold_text">Bangla Medium</option>
                            <option value="">Play</option>
                            <option value="">Nursary</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                            <option value="" class="bold_text">English Medium</option>
                            <option value="">Play</option>
                            <option value="">Nursary</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
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
@endsection