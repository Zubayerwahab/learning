@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0"> Today Students Absent (March 31, 2022)</h2>
                </header>

<div class="academic_info">

<div class="container">

  <p class="total_count"><i class="fa-solid fa-users"></i> Total Absent 76</p>

    <div class="row mt-3 mb-4">

        <div class="col-md-4">
            <div class="absentClassLeft">

                 <ul>

                     <li><a href="#">
                         <span>Play(English Medium)</span>
                         <span>1</span>
                         </a>
                    </li>

                    <li><a href="#">
                        <span>Play (Bangla Medium)</span>
                        <span>5</span>
                        </a>
                   </li>

                   <li><a href="#">
                     <span>Nine (Vocational)</span>
                     <span>11</span>
                     </a>
                   </li>

                 <li><a href="#">
                  <span>Ten (Vocational)</span>
                  <span>10</span>
                 </a>
                 </li>

                 <li><a href="#">
                    <span>Nursery (English Version)</span>
                    <span>6</span>
                   </a>
                   </li>

                   <li><a href="#">
                    <span>Nursery (Bangla verson)</span>
                    <span>8</span>
                   </a>
                   </li>

                   <li><a href="#">
                    <span>Nursery (Bangla verson)</span>
                    <span>8</span>
                   </a>
                   </li>

                   <li><a href="#">
                    <span>Nursery (Bangla verson)</span>
                    <span>8</span>
                   </a>
                   </li>

                   <li><a href="#">
                    <span>Nursery (Bangla verson)</span>
                    <span>8</span>
                   </a>
                   </li>

                   <li><a href="#">
                    <span>Nursery (Bangla verson)</span>
                    <span>8</span>
                   </a>
                   </li>

                 </ul>
            </div>
        </div>


        <div class="col-md-8">
            <div class="absentStudentRight table-responsive">
                <!---- student table  ----->
                <table class="table table-bordered mt-3 text-center">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col"><input type="checkbox" name="" id="check"></th>
                            <th scope="col">ID</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Shift</th>
                            <th scope="col">Section</th>
                            <th scope="col">Name</th>
                            <th scope="col"><button class="btn btn-secondary">Send SMS</button></th>
                        </tr>
                    </thead>
                    <tbody>

                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>20201002</td>
                            <td>2</td>
                            <td>Morning</td>
                            <td>B</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">Mahim</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>

                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>20201002</td>
                            <td>2</td>
                            <td>Morning</td>
                            <td>B</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">Mahim</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>

                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>20201002</td>
                            <td>2</td>
                            <td>Morning</td>
                            <td>B</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">Mahim</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>

                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>20201002</td>
                            <td>2</td>
                            <td>Morning</td>
                            <td>B</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">Mahim</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>

                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>20201002</td>
                            <td>2</td>
                            <td>Morning</td>
                            <td>B</td>
                            <td>
                                <img src="assets/img/student.png" class="curentStuImage" alt="">
                                <br><a href="#">Mahim</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>

                    </tbody>
                </table>
            <!---- /student table ----->
            </div>
        </div>

    </div>

</div>
</div>
</div>
</section>

</div>
</div>

@endsection
