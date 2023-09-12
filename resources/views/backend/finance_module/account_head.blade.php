@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Account Head
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
            <a href="{{ route('add_account_head') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">A/C Type</th>
                                <th scope="col">A/C Category</th>
                                <th scope="col">A/C Parents</th>
                                <th scope="col">A/C Head</th>
                                <th scope="col">A/C Code</th>
                                <th scope="col">Yearly / Monthly</th>
                                <th scope="col">Has Child ? </th>
                                <th scope="col" width="35px">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Academic</option>
                                        <option value="">General</option>
                                        <option value="">Bank</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Recipts(+)</option>
                                        <option value="">Payments(-)</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">GRAND PARENT</option>
                                        <option value="">30.00 Yearly Tour</option>
                                        <option value="">34.00 Admission</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Yearly</option>
                                        <option value="">Monthly</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>
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
                                <td>1</td>
                                <td>Academic</td>
                                <td>Receipts (+)</td>
                                <td>GRAND PARENT</td>
                                <td>Admission Fee</td>
                                <td>18</td>
                                <td>Yearly</td>
                                <td>No</td>
                                <td>Active</td>
                                <td>
                                  <a href="{{ route('account_head_view') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit_account_head') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('delete_account_head') }}" id="delete" ><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Academic</td>
                                <td>Receipts (+)</td>
                                <td>GRAND PARENT</td>
                                <td>Admission Fee</td>
                                <td>18</td>
                                <td>Yearly</td>
                                <td>No</td>
                                <td>Active</td>
                                <td>
                                    <a href="account_head_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="account_head_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Academic</td>
                                <td>Receipts (+)</td>
                                <td>GRAND PARENT</td>
                                <td>Admission Fee</td>
                                <td>18</td>
                                <td>Yearly</td>
                                <td>No</td>
                                <td>Active</td>
                                <td>
                                    <a href="account_head_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="account_head_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Academic</td>
                                <td>Receipts (+)</td>
                                <td>GRAND PARENT</td>
                                <td>Admission Fee</td>
                                <td>18</td>
                                <td>Yearly</td>
                                <td>No</td>
                                <td>Active</td>
                                <td>
                                    <a href="{{ route('account_head_view') }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit_account_head') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('delete_account_head') }}" id="delete" ><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>



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
