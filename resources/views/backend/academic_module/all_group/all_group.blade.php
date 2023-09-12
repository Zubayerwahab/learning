@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                All Group
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('add-group') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing {{ count($all_group) }} item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Group Name</th>
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
                                        <option value="" class="bold_text">English Medim</option>
                                        <option value="">Play</option>
                                        <option value="">Nursary</option>
                                        <option value="">KG</option>
                                    </select>
                                </td>
                                <td><input type="text"> </td>
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
                    @foreach($all_group as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $all_class->getClassName($item->class_name)}}</td>
                                <td>{{ $item->group_name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('group-view',$item->id) }}" title="View"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{ route('edit-group',$item->id)}}" title="Edit"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp&nbsp
                                    <a href="{{route('delete-group',$item->id)}}" id="delete" title="Delete"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp&nbsp
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
