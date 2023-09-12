@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Manage Notice
                        </h2>
                    </header>

                    <div class="card-body " id="institue">
                        <form action="" class="es-form es-add-form">
                            <a href="{{ route('add_notice') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <div class="table-responsive">
                                <p class="text-right">Showing 1-1 of 1 item</p>
                                <!---- slide show table  ----->
                                <table class="table table-bordered mt-3 text-center">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">File Upload</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($add_notice as $notice)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $notice->title }}</td>
                                            <td>{{ $notice->file_upload }}</td>
                                            <td>{{ $notice->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('edit-notice',['id'=>$notice->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{ route('delete-notice',['id'=>$notice->id]) }}" onclick="return confirm('Are You Sure You Want To Delete This')" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
{{--                                        <tr>--}}
{{--                                            <th scope="row"></th>--}}
{{--                                            <td>--}}
{{--                                                <input type="text" name="" id="">--}}
{{--                                            </td>--}}
{{--                                            <td> </td>--}}
{{--                                            <td>--}}
{{--                                                <select name="" id="">--}}
{{--                                                    <option value="">All</option>--}}
{{--                                                    <option value="">Active</option>--}}
{{--                                                    <option value="">Inactive</option>--}}
{{--                                                </select>--}}
{{--                                            </td>--}}
{{--                                            <td></td>--}}
{{--                                        </tr>--}}

{{--                                        <tr>--}}
{{--                                            <th scope="row">1</th>--}}
{{--                                            <td>HSC Model test will be start on 03/03/2020</td>--}}
{{--                                            <td>No File</td>--}}
{{--                                            <td>Active</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="notice_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp--}}
{{--                                                <a href="notice_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp--}}
{{--                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}

{{--                                        <tr>--}}
{{--                                            <th scope="row">1</th>--}}
{{--                                            <td>HSC Model test will be start on 03/03/2020</td>--}}
{{--                                            <td>No File</td>--}}
{{--                                            <td>Active</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="notice_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp--}}
{{--                                                <a href="notice_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp--}}
{{--                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}

{{--                                        <tr>--}}
{{--                                            <th scope="row">1</th>--}}
{{--                                            <td>HSC Model test will be start on 03/03/2020</td>--}}
{{--                                            <td>No File</td>--}}
{{--                                            <td>Active</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="notice_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp--}}
{{--                                                <a href="notice_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp--}}
{{--                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}

{{--                                        <tr>--}}
{{--                                            <th scope="row">1</th>--}}
{{--                                            <td>HSC Model test will be start on 03/03/2020</td>--}}
{{--                                            <td>No File</td>--}}
{{--                                            <td>Active</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="notice_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp--}}
{{--                                                <a href="notice_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp--}}
{{--                                                <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}



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
