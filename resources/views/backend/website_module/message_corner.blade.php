@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Message Corner
                        </h2>
                    </header>

                    <div class="card-body table-responsive" id="institue">
                        <form action="" class="es-form es-add-form">
                            <a href="{{ route('add_message') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                            <p class="text-right">Showing 1-1 of 1 item</p>
                            <!---- slide show table  ----->
                            <table class="table table-bordered mt-3 text-center">
                                <thead class="table-bordered">
                                    <tr>
                                        <th scope="col">Srl</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><input type="text" name="" id=""></td>
                                        <td><input type="text" name="" id=""></td>
                                        <td></td>
                                        <td><input type="text" name="" id="" style="width: 60px;"></td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                                <option value="">Active</option>
                                                <option value="">Inactive</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>


                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Md. Monsur Rahman</td>
                                        <td>Founder & Director</td>
                                        <td><img src="assets/img/avatars/img4.jpg" class="slide_pic" alt=""></td>
                                        <td>2</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="message_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp
                                            &nbsp
                                            <a href="message_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                            <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <!---- /slide show table ----->


                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
