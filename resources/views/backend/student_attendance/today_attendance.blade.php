@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                 Student Attendence (31 March 2022)
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">

                <!---- student table  ----->
                    <table class="table table-bordered mt-3 text-center ">
                        <thead class="table-bordered">
                            <tr style="background-color:#ccc">
                                <th scope="col">ID</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Class</th>
                                <th scope="col">Name</th>
                                <th scope="col">In</th>
                                <th scope="col">Out</th>
                                <th scope="col">Punch IN Zone</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>4</td>
                                <td>Six</td>
                                <td>Rayhan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                <!---- /student table ----->
            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
