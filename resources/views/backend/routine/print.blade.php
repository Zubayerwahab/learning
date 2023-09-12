@extends('layouts.AdminPanal')
@section('content')
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Veiw/Print Routine</h2>
                </header>
                <div class="branch_edit">
                    <div class="row">


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
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Routine Type<span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="a" id="check">
                                <b>Time Slot At (Top)</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" name="a" id="check">
                                <b>Time Slot (Inner)</b>
                            </p>
                        </div>


                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <a href="" class="btn bg-gradient border-0 text-white">View Routine</a>
                                <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                            </p>
                        </div>

                    </div>

                    <div class="search_result table-responsive">

                        <div class="d-flex justify-content-between">
                            <a href="#" class="print_btn"><i class="fa-solid fa-print"></i>  Print</a>
                            <a href="#" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
                        </div>

                        <table class="table table-bordered mt-5">
                            <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">12:00 pm - 12:40 pm</th>
                                <th scope="col">12:40 pm - 1:20 pm</th>
                                <th scope="col">1:20 pm - 2:00 pm</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Saturday</td>
                                <td>Bangla 1st Paper <br>  Afzal </td>
                                <td>Bangla 2nd Paper <br>  Babar </td>
                                <td>Break</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>Bangla 1st Paper <br>  Afzal </td>
                                <td>Bangla 2nd Paper <br>  Babar </td>
                                <td>Break</td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>Bangla 1st Paper <br>  Afzal </td>
                                <td>Bangla 2nd Paper <br>  Babar </td>
                                <td>Break</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
