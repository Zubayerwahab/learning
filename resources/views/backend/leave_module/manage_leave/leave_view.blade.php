@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Leave View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="add_leaves.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="leaves_edit.html" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Employee Type</th>
                                <td>Permanent </td>
                            </tr>
                            <tr>
                                <th>Employee</th>
                                <td>Salam</td>
                            </tr>
                            <tr>
                                <th>Leave Type</th>
                                <td>Maternity/Paternity Leave</td>
                            </tr>
                            <tr>
                                <th>From Date</th>
                                <td>2021-03-16</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td>2021-03-20</td>
                            </tr>
                            <tr>
                                <th>Total Days</th>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>2021-12-19 07:39:06</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>tsit</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>2022-02-03 04:58:07</td>
                            </tr>
                            <tr>
                                <th>Modified By</th>
                                <td>Learning Campus</td>
                            </tr>

                        </tbody>
                    </table>

                <!---- /session View table ----->
            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
