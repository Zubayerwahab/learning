@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Print Invoice
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="add_fees.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Folio Number</th>
                                <th scope="col">Class</th>
                                <th scope="col">Student</th>
                                <th scope="col">Roll No.</th>
                                <th scope="col">Collection Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="" class="bold_text">Bangla Medium</option>
                                        <option value="">Play</option>
                                        <option value="">Nursary</option>
                                        <option value="">One</option>
                                        <option value="">Two</option>
                                        <option value="">Three</option>
                                        <option value="">Four</option>
                                        <option value="" class="bold_text">English Medium</option>
                                        <option value="">Play</option>
                                        <option value="">Nursary</option>
                                        <option value="">One</option>
                                        <option value="">Two</option>
                                        <option value="">Three</option>
                                        <option value="">Four</option>
                                    </select>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="date" name="" id="">
                                </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2021000003</td>
                                <td>Nursery</td>
                                <td>
                                    <img src="assets/img/student.png" class="student_img" alt="">

                                        20101115 - Khadiza - 3

                                </td>
                                <td>3</td>
                                <td>04 January 2021</td>
                                <td>
                                    <a href="print_invoice_file.html"><i class="fa-solid fa-print"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2021000003</td>
                                <td>Nursery</td>
                                <td>
                                    <img src="assets/img/student.png" class="student_img" alt="">

                                        20101115 - Khadiza - 3

                                </td>
                                <td>3</td>
                                <td>04 January 2021</td>
                                <td>
                                    <a href="print_invoice_file.html"><i class="fa-solid fa-print"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2021000003</td>
                                <td>Nursery</td>
                                <td>
                                    <img src="assets/img/student.png" class="student_img" alt="">

                                        20101115 - Khadiza - 3

                                </td>
                                <td>3</td>
                                <td>04 January 2021</td>
                                <td>
                                    <a href="print_invoice_file.html"><i class="fa-solid fa-print"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2021000003</td>
                                <td>Nursery</td>
                                <td>
                                    <img src="assets/img/student.png" class="student_img" alt="">

                                        20101115 - Khadiza - 3

                                </td>
                                <td>3</td>
                                <td>04 January 2021</td>
                                <td>
                                    <a href="print_invoice_file.html"><i class="fa-solid fa-print"></i></a>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                <!---- /session table ----->

            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
