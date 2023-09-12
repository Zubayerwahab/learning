@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Student Fees Collection</h2>
        </header>
        <div class="card-body">
            <form action="" class="es-form es-add-form">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">Session</label>
                        <select id="subject" class="es-add-select" style="display: none;">
                            <option data-display="Select">Select Session</option>
                            <option value="1">2022</option>
                            <option value="2">2021</option>
                            <option value="2">2020</option>
                          </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="">Class</label>
                        <select >
                            <option value="">Select Class</option>
                            <option value="" class="bold_text font-weight-bold">Bangla Medium</option>
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
                            <option value="" class="bold_text">English Medium</option>
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
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Student</label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Student</option>
                            <option value="">Rahim</option>
                            <option value="">Rahim</option>
                            <option value="">Rahim</option>
                            <option value="">Rahim</option>
                            <option value="">Rahim</option>
                            <option value="">Rahim</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Admisson/Month</label>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Admission</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">January</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">February</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">March</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">April</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">May</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">June</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">July</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">August</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">September</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Octorber</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">November</h6>
                            </div>
                        </h4>

                        <h4 class="d-flex justify-content-evnly ml-5">
                            <div class="sms_div">
                                <label class="switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">December</h6>
                            </div>
                        </h4>

                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Folio No</label>
                        <input type="text" placeholder="You can leave this blank for auto generation">
                    </div>

                </div>

                <p>
                    <a href="" class="btn bg-gradient border-0 text-white">Search</a>
                    <a href="" class="btn  border-0 text-white">Cancel</a>
                </p>

            </form>
        </div>
    </div>
</section>

    </div>
</div>


@endsection
