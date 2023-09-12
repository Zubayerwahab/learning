@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Manage Gallery
                        </h2>
                    </header>

                    <div class="card-body table-responsive" id="institue">
                        <form action="" class="es-form es-add-form">
                            <a href="{{ route('add_gallery') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>

                            <p class="text-right">Showing 1-1 of 1 item</p>
                            <!---- slide show table  ----->
                            <table class="table table-bordered mt-3 text-center">
                                <thead class="table-bordered">
                                    <tr>
                                        <th scope="col">Srl</th>
                                        <th scope="col">Album Title</th>
                                        <th scope="col">Caption</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>
                                            <select name="" id="">
                                                <option value="">All</option>
                                                <option value="">Photo</option>
                                                <option value="">Video</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="">
                                        </td>
                                        <td> </td>
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
                                        <td>CULTURAL PROGRAM</td>
                                        <td>CULTURAL PROGRAM 1</td>
                                        <td></td>
                                        <td><img src="assets/img/avatars/img4.jpg" class="slide_pic" alt=""></td>
                                        <td>Active</td>
                                        <td>
                                            <a href="gallery_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                            <a href="gallery_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
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
