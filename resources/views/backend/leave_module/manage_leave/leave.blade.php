@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Leaves
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('add_leave') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Employee Type</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Leave Type</th>
                                <th scope="col">From Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Total Days</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Casual</option>
                                        <option value="">Parmanant</option>
                                        <option value="">Fixed-term</option>
                                        <option value="">Shift-worker</option>
                                        <option value="">Outworkers</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Casual</option>
                                        <option value="">Parmanant</option>
                                        <option value="">Fixed-term</option>
                                        <option value="">Shift-worker</option>
                                        <option value="">Outworkers</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">Special Leave</option>
                                        <option value="">Medical Leave</option>
                                    </select>
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td>
                                    <input type="text" name="" id="">
                                </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Permanent</td>
                                <td>(20200007) Salam</td>
                                <td>Maternity/Paternity Leave</td>
                                <td>2021-03-16</td>
                                <td>2021-03-20</td>
                                <td>4</td>
                                <td>4</td>
                                <td>
                                    <a href="{{ route('view_leave') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit_leave') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{route('delete_leave')}}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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
