@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Group</h2>
        </header>
        <div class="branch_edit">
            <form method="post" action="{{ route('store-group') }}">
                @csrf

                <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Class Name <span>*</span></label>
                     <select name="class_name" id="" required>
                         <option value="" selected disabled>Select Class</option>
                         @foreach($all_class as $item)
                         <option value="{{ $item->id }}">{{ $item->class_name }}</option>
                         @endforeach
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Group Name <span>*</span></label>
                    <input type="text" placeholder=" "  name="group_name" id="" required>
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                     <select name="status" id="" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                     </select>
                 </div>

                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                     <a href="{{ route('all-group') }}" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

               </div>
            </form>
        </div>
    </div>
</section>

    </div>
</div>

@endsection
