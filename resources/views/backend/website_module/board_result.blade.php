@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Manage Board Result
                        </h2>
                    </header>

                    <div class="card-body " id="institue">
                        <form action="" class="es-form es-add-form">
                            <a href="{{ route('add_board_result') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <div class="table-responsive">
                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- slide show table  ----->
                                <table class="table table-bordered mt-3 text-center">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Exam Type</th>
                                            <th scope="col">Total Student</th>
                                            <th scope="col">Passed</th>
                                            <th scope="col">Passed (%)</th>
                                            <th scope="col">A+</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
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
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">PSC</option>
                                                    <option value="">JSC</option>
                                                    <option value="">SSC</option>
                                                    <option value="">HSC</option>
                                                </select>
                                            </td>
                                            <td> <input type="text" name="" id=""> </td>
                                            <td> <input type="text" name="" id=""> </td>
                                            <td> <input type="text" name="" id=""> </td>
                                            <td> <input type="text" name="" id=""> </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                    <option value="">Active</option>
                                                    <option value="">Inactive</option>
                                                </select>
                                            </td>
                                            <td>
                                                <p style="color: #fff;">Action Buttonaaaa</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>2019</td>
                                            <td>SSC</td>
                                            <td>550</td>
                                            <td>550</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="board_result_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                                &nbsp
                                                <a href="board_result_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                                &nbsp
                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>2019</td>
                                            <td>SSC</td>
                                            <td>550</td>
                                            <td>550</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="board_result_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                                &nbsp
                                                <a href="board_result_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                                &nbsp
                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>2019</td>
                                            <td>SSC</td>
                                            <td>550</td>
                                            <td>550</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="board_result_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                                &nbsp
                                                <a href="board_result_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                                &nbsp
                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                            <!---- /slide show table ----->

                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
