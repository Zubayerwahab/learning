@extends('layouts.AdminPanal')
@section('content')


    <div class="u-content">
        <div class="u-body">

    <section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                All Shift
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('add-shift') }} " class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <p class="text-right">Showing {{count($all_shifts)}} item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center shift_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Medium Name</th>
                                <th scope="col">Shift Name</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Green Limit</th>
                                <th scope="col">Orange Limit</th>
                                <th scope="col">Red Limit</th>
                                <th scope="col" width="35px">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Bangla Medium</option>
                                        <option value="">English Medium</option>
                                    </select>
                                </td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td><input type="text" name="" id=""></td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                        @php
                            $i=1;
                        @endphp
                        @foreach($all_shifts as $item)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    {{ $item->medium_name=="bangla_medium" ? "Bangla Medium" :"English Medium"  }}

                                </td>
                                <td>{{ ucfirst($item->shift_name)}}</td>
                                <td>{{date("g:i a", strtotime($item->start_time))}}</td></td>
                                <td>{{date("g:i a", strtotime($item->start_time))}}</td>
                                <td>{{ $item->green_limit }}</td>
                                <td>{{ $item->orange_limit }}</td>
                                <td>{{ $item->red_limit }}</td>
                                <td>{{ ucfirst($item->status) }}</td>
                                <td>
                                    <a href="{{ route('shift-view',$item->id) }}" title="View"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{ route('edit-shift',$item->id) }}" title="Edit"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{ route('delete-shift',$item->id) }}" id="delete" title="Delete"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp&nbsp
                                </td>
                            </tr>
                        @endforeach
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
