@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Student Fees Collection (Quick)</h2>
        </header>
        <div class="branch_edit">
            <div class="row">


                <div class="col-md-10 mb-3">
                    <label for="">Session<span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Session </option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                    </select>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Class <span>*</span></label>
                    <select name="" id="">
                        <option value="">Select Class </option>
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
                    <label for="">Student ID/Name <span>*</span></label>
                     <select name="" id="">
                         <option value="">Select Student ID/Name </option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                         <option value="">02141 - Kamal</option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <a href="" class="btn bg-gradient border-0 text-white">Search</a>
                     <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

            </div>

        </div>

        <div class="quickCollection table-responsive">
            <h3><i class="fa-solid fa-info"></i> Student Fees Collection (Quick)</h3>
            <table class="table table-bordered table-striped">
                <thead>
                  <!-- <tr class="th_color">
                    <th scope="col">Image</th>
                    <th scope="col">21113001</th>
                    <th scope="col">Session</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Admission</th>
                    <th scope="col">January</th>
                    <th scope="col">February</th>
                    <th scope="col">March</th>
                    <th scope="col">April</th>
                    <th scope="col">May</th>
                    <th scope="col">June</th>
                    <th scope="col">July</th>
                    <th scope="col">August</th>
                    <th scope="col">September</th>
                    <th scope="col">October</th>
                    <th scope="col">November</th>
                    <th scope="col">December</th>
                    <th scope="col">Total</th>
                  </tr> -->
                </thead>
                <tbody>

                  <tr>
                    <th rowspan="2">
                        <img src="assets/img/student.png" class="student_pic" alt="">
                    </th>
                    <td>ID</td>
                    <td>21113001</td>
                    <td>Session</td>
                    <td>2021</td>
                    <td>Medium</td>
                    <td>Bangla Medium</td>
                    <td>Class</td>
                    <td>Ten</td>
                  </tr>

                  <tr>

                    <td>Name</td>
                    <td>ABDUL ALIM</td>
                    <td>Shift</td>
                    <td>Day</td>
                    <td>Section</td>
                    <td>A</td>
                    <td>Roll</td>
                    <td>1</td>
                  </tr>

                </tbody>
              </table>
        </div>

        <div class="quickCollection table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>

                  <tr>
                    <td class="text-primary text-center">Admission</td>
                  </tr>

                  <tr>
                    <td class="text-center"><input type="checkbox" name="" id="check"></td>
                  </tr>

                  <tr>
                    <td class="text-center" style="color: red;">3,500.00</td>
                  </tr>

                  <tr >
                    <td class="text-center d-flex justify-content-between">
                       <a href="quickCollectionDetails.html">
                        <i class="fa-solid fa-eye"></i>
                       </a>

                        <i class="fa-solid fa-money-bill"></i>
                    </td>
                  </tr>

                </tbody>
              </table>
        </div>

        <div class="quickCollection table-responsive">
            <table class="table table-bordered table-striped text-center">
                <tbody>

                  <tr>
                    <td style="color: #FF9324;">Total Payable</td>
                    <td style="color:green;"> Total Paid</td>
                    <td style="color: red;"> Total Dues</td>
                  </tr>

                  <tr>
                    <td style="color: #FF9324;">3,500.00</td>
                    <td style="color:green;"> 0.00</td>
                    <td style="color: red;"> 0.00</td>
                  </tr>


                </tbody>
              </table>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
