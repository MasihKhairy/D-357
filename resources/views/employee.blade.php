@extends('master')

@section('style')



@endsection
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Doctor Registration </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="container">

                    <div class="row">
                        <form method="post" class="form-horizontal" action="/doctors">
                            <div class="col-md-4">
                                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                                <div class="form-group">
                                    <label class="control-label">First name</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="Doctor's firstname" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Last name</label>
                                    <input type="text" class="form-control" name="last_name"
                                                                 placeholder="Doctor's last name" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Father name</label>
                                   <input type="text" class="form-control" name="father_name"
                                                                 placeholder="Doctor's father name" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Age</label>
                                    <input type="number" class="form-control" name="age"
                                                                 placeholder="Doctor's age">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">Working Time</label>
                                    <label for=""> From </label><input type="time" class="form-control"
                                                                       name="start_work_time"
                                                                       style="width: 40%" required>
                                    <label for=""> To </label> <input type="time" class="form-control"
                                                                      name="end_work_time"
                                                                      style="width: 40%" required>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">Phone</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Doctor's Phone number" required>
                                </div>

                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Departement</label>
                                        <select class="select2_demo_1 form-control" id="dept" name="department"
                                                required>
                                            <option value="0">Select Department</option>
                                            <option value="regular basis">regular basis</option>
                                            <option value="Orthodontist">Orthodontist</option>
                                            <option value="Oral and maxillofacial surgeon">Oral and maxillofacial
                                                surgeon
                                            </option>
                                            <option value="Periodontist">Periodontist</option>
                                            <option value="Prosthodontist">Prosthodontist</option>
                                            <option value="Endodontist">Endodontist</option>
                                            <option value="General">General</option>
                                        </select>
                                </div>

                                <div class="form-group"><label class="control-label">Max Patient can
                                        visits</label>
                                   <input type="number" class="form-control" name="max_patient"
                                                                 placeholder="Enter Maximum patient can visits"
                                                                 required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Gender</label>
                                        <div class="i-checks"><label>
                                         <input type="radio" value="Male" name="gender"  required>
                                                <i></i> Male </label></div>
                                        <div class="i-checks"><label> <input type="radio" value="Female" name="gender"
                                                                             required>
                                                <i></i> Female </label></div>
                                </div>

                                <div class="form-group">
                                    <label class=" control-label">Salary Type</label>

                                            {{--<div class="i-checks">--}}
                                            <label><input type="radio" name="salary_type" value="percentage" id="per"
                                                          onclick="perSal()" style="height: 25px;width:25px;" required>
                                                <i></i>
                                                Per%
                                            </label>

                                    <div class="col-sm-1">
                                        {{--<div class="i-checks">--}}
                                        <label> <input type="radio" name="salary_type" onclick="fixSal()" id="fix"
                                                       value="fix"
                                                       style="height: 25px;width:25px;"> <i></i> Fix </label></div>

                                </div>

                                <div class="form-group"><label class=" control-label" id="label">Salary
                                        amount</label>
                                  <input type="number" class="form-control" name="salary_amount"
                                                                 id="sal"
                                                                 required>
                                </div>

                                <div class="form-group"><label class=" control-label" id="label">
                                        Email</label>
                                    <input type="email" class="form-control" name="email"
                                           id="sal"
                                           required>
                                </div>

                                <div class="form-group"><label class=" control-label" id="label">
                                        password</label>
                                    <input type="password" class="form-control" name="password"
                                           id="sal"
                                           required>
                                </div>


                                <div class="form-group">

                                        <button class="btn btn-white"  type='reset'>Reset</button>
                                        <button class="btn btn-primary " type="submit" name="submit" value="Save">Save
                                        </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('script')
    <script>
        function perSal() {
            document.getElementById('label').innerHTML = 'Salary Percentage';
            document.getElementById('sal').setAttribute('max', 100);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the percentage of salary');
        }

        function fixSal() {
            document.getElementById('label').innerHTML = 'Salary amount';
            document.getElementById('sal').setAttribute('max', 10000000);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the amount  of salary');
        }
    </script>

@endsection

