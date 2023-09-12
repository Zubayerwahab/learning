@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Live Class
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <a href="{{ route('add_live_class') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <form action="" class="es-form es-add-form">

              <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- Branch table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Class</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Section</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Teacher</th>
                                <th scope="col">Class Topic</th>
                                <th scope="col">Class ID</th>
                                <th scope="col">Password</th>
                                <th scope="col">Class Date</th>
                                <th scope="col">Class Time</th>
                                <th scope="col">Status</th>
                                <th scope="col" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
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
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;</option>
                                        <option value="">Morning</option>
                                        <option value="">Day</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">Bangla</option>
                                        <option value="">English</option>
                                        <option value="">Mathmatics</option>
                                        <option value="">Science</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">12458 - Afzal</option>
                                        <option value="">12458 - Afzal</option>
                                        <option value="">12458 - Afzal</option>
                                        <option value="">12458 - Afzal</option>
                                        <option value="">12458 - Afzal</option>
                                    </select>
                                </td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">Pending</option>
                                        <option value="">Done</option>
                                    </select>
                                </td>
                                <td><p class="text-white">This is action Buttonaaaaaaaaaaaa</p></td>
                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>Play</td>
                                <td>Morning</td>
                                <td>A</td>
                                <td>Math</td>
                                <td>20200005 - Babar</td>
                                <td>Math Test Class</td>
                                <td>72547022683</td>
                                <td>123456</td>
                                <td>24, January 2022</td>
                                <td>04:00:00 PM</td>
                                <td>Done</td>
                                <td width="60%">
                                    <a href="{{ route('view_live_class') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp &nbsp
                                    <a href="{{ route('edit_live_class') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('live_class_report') }}"><i class="fa-solid fa-file-invoice"></i></a>&nbsp &nbsp &nbsp
                                    <a href="{{ route('delete_live_class') }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp &nbsp
                                </td>
                            </tr>


                        </tbody>
                    </table>

                <!---- /Branch table ----->


            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
