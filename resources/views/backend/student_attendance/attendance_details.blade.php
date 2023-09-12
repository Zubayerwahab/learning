@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Attendence Details</h2>
                </header>

<div class="academic_info student_search">


<div class="container">

    <div class="row mt-3 mb-4">

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Session <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">2021</option>
                <option value="">2020</option>
                <option value="">2019</option>
            </select>
        </div> <br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Class Name <span class="text-danger">*</span></label>
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
        </div> <br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Shift <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Shift</option>
                <option value="">Morning</option>
                <option value="">Day</option>
            </select>
        </div> <br><br>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Section <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Section</option>
                <option value="">A</option>
                <option value="">B</option>
            </select>
        </div> <br><br>

        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Student <span class="text-danger">*</span></label>
            <select name="" id="">
                <option value="">Select Student</option>
                <option value="">01254 - Sumon (play)</option>
                <option value="">12486 - Rana</option>
                <option value="">12486 - Kiron</option>
                <option value="">12486 - Rased</option>
                <option value="">12486 - Jony</option>
                <option value="">12486 - Sahid</option>
                <option value="">12486 - Sopnil</option>
                <option value="">12486 - Rakib</option>
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
                <option value="">June</option>
                <option value="">July</option>
                <option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
                <option value="">November</option>
                <option value="">December</option>
            </select>
        </div> <br><br>

    </div>


    <div class="row mt-3 mb-4">


        <div class="col-12 col-md-6 col-lg-4">
            <label for="">Year</label>
            <select name="" id="">
                <option value="">Select Year</option>
                <option value="">2022</option>
                <option value="">2021</option>
                <option value="">2020</option>
                <option value="">2019</option>
            </select>
        </div> <br><br>

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
        <h3>Attendance Details for the Month of April 2022</h3>
        <p>ID : 20204002, Name : Mahmudul</p>
        <h3>
            <span class="text-primary">Weekend : 3</span>,
            <span class="text-info">Holidays : 0</span>,
            <span class="text-danger">Absent : 18</span>,
            <span class="text-secondary">Green : 0</span>,
            <span class="text-warning"> Orange : 0</span>,
            <span class="text-danger"> Red : 0</span>
        </h3>
    </div>

    <div class="attendence_summary_mid table-responsive">

           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center table-striped">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Date</th>
                    <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="color: green;">IN</span></th>
                    <th scope="col"><span style="color: red;">OUT</span></th>
                    <th scope="col">Middle Punches</th>
                    <th scope="col" ><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                    <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                    <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                </tr>
            </thead>
            <tbody>

                 <tr>
                    <td>1</td>
                    <td>01, Apr 2022</td>
                     <td style="color: red; font-weight: 900;"> X </td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>01, Apr 2022</td>
                     <td style="color: red; font-weight: 900;"> X </td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>

                 <tr>
                    <td>1</td>
                    <td>01, Apr 2022</td>
                     <td style="color: red; font-weight: 900;"> X </td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>


            </tbody>
        </table>
    <!---- /student table ----->
    </div>

</div>


</div>
</section>

</div>
</div>

@endsection
