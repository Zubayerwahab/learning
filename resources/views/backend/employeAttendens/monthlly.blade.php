@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Employee Attendence Summary Monthly</h2>
                </header>

<div class="academic_info student_search">

<div class="container">

    <div class="row mt-3 mb-4">

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Type <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">All</option>
                <option value="">Casual</option>
                <option value="">Contactual</option>
                <option value="">Full-time</option>
                <option value="">Half-time</option>
                <option value="">Part-time</option>
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Shift <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Employee Shift</option>
            </select>
        </div><br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Month <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Month</option>
                <option value="">January</option>
                <option value="">February</option>
                <option value="">March</option>
                <option value="">April</option>
                <option value="">May</option>
            </select>
        </div><br><br>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Date <span class="text-danger">*</span></label>
            <input type="date" name="" id="">
        </div>

    </div>

</div>

</div>

<p class="text-center">
    <a href="#" class="btn btn-primary px-5">Submit</a>
</p>

<div class="container">
    <div class="d-flex justify-content-between mt-5">
       <a href="#" class="print_btn"><i class="fa-solid fa-print"></i>  Print</a>
       <a href="#" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
   </div>
   </div>

<div class="attendence_summary">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Daily Attendance Summary (March 31 2022)</h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Weekend</th>
                    <th scope="col"><span style="color: red;">Holidays</span></th>
                    <th scope="col"><span style="color: green;">Leave</span></th>
                    <th scope="col"><span style="color: green;">Attend</span></th>
                    <th scope="col"><span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                    <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                    <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                </tr>
            </thead>
            <tbody>

                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>


                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>20201002</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">Mahim</a>
                     </td>
                     <td> Bangla Lecturer </td>
                     <td> 1 </td>
                     <td>1</td>
                     <td>0</td>
                     <td>3</td>
                     <td>3</td>
                     <td>0</td>
                     <td>1</td>
                     <td>1</td>
                 </tr>


            </tbody>
        </table>
    <!---- /student table ----->
    </div>
</div>


</div>
</section>

</div>
@endsection

@section('fotter_js')

@endsection
