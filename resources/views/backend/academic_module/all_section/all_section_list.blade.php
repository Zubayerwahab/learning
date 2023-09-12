@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                All Section
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('add-section') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing {{ count($all_section) }} item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Shift Name</th>
                                <th scope="col">Name</th>
                                <th scope="col" width="35px">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Select Class</option>
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
                                        <option value="" class="bold_text">English Medim</option>
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
                                        <option value="">All</option>
                                        <option value="">Morning</option>
                                        <option value="">Night</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp; &nbsp;&nbsp;</option>
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach($all_section as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $item->class_name }}</td>
                                <td>{{ $item->shift_name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('section-view',$item->id) }}" title="View"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{ route('edit-section',$item->id) }}" title="Edit"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{route('delete-section',$item->id)}}" id="delete" title="Delete"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp&nbsp
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
