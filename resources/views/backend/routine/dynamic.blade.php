@extends('layouts.AdminPanal')
@section('content')
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Dynamic Routine</h2>
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
                                <option value="">Twelve</option>
                                <option value="" class="bold_text">English Medium</option>
                                <option value="">Play</option>
                                <option value="">Nursary</option>
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
                                <option value="">Twelve</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Shift <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Night</option>
                            </select>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Section <span>*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                            </select>
                        </div>

                    </div>


                    <div class="routineShort table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Saturday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
