@extends('master')

@section('style')

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.list_next_appointment_today')}}</h5>

            </div>
            <div class="ibox-content">


                {{-- row for buttons --}}
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="/patient"><i class="fa fa-arrow-left"></i>{{trans('file.back')}}</a>
                    </div>
                </div>

                {{-- row for table --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.visits')}}</th>
                                    <th>{{trans('file.doctor')}}&nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>{{trans('file.next_appointment_date')}}&nbsp;<i class="fa fa-calendar"></i></th>
                                    <th>{{trans('file.phone')}}&nbsp;<i class="fa fa-phone"></i></th>
                                    <th>{{trans('file.edit')}}</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($allPatientNextAppointment as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->lastname }}</td>
                                        <td>{{ $patient->status }}</td>
                                        @if($patient->doctor != null)
                                        <td>{{ $patient->doctor->first_name }}</td>
                                        @else
                                        <td>Null</td>
                                        @endif
                                        <td>{{ $patient->next_appointment }}</td>
                                        <td>{{ $patient->phone }}</td>
                                        <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal"
                                                    data-target="#e{{$patient->id}}"><i class="fa fa-edit"></i>&nbsp;{{trans('file.edit')}}
                                            </button>
                                        </td>                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.visits')}}</th>
                                    <th>{{trans('file.doctor')}}&nbsp;<i class="fa fa-stethoscope"></i></th>
                                    <th>{{trans('file.next_appointment_date')}}&nbsp;<i class="fa fa-calendar"></i></th>
                                    <th>{{trans('file.phone')}}&nbsp;<i class="fa fa-phone"></i></th>
                                    <th>{{trans('file.edit')}}</th>
                                <tr>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end of all box content --}}

    @foreach($allPatientNextAppointment as $patient)
        {{-- modal window to show editing detail of doctor--}}
        <div class="modal inmodal" id="e{{$patient  ->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">{{trans('file.patient_information')}}</h4>
                    </div>
                    <form id="form" action="/next-appointment-patient-edit/{{$patient->id}}" method="post">
                        {{method_field('patch')}}
                        <div class="modal-body">



                            <div class="form-group"><label>{{trans('file.id')}}</label> <input type="text" name="id" placeholder="{{trans('file.id')}}"
                                                                                                      value="{{$patient->id}}" class="form-control" disabled></div>
                            <div class="form-group"><label>{{trans('file.first_name')}}</label> <input type="text" name="name" placeholder="{{trans('file.first_name')}}"
                                                                                                       value="{{$patient->name}}" class="form-control"></div>


                            <div class="form-group"><label>{{trans('file.last_name')}}</label> <input type="text" name="lastname" placeholder="{{trans('file.last_name')}}"
                                                                                                       value="{{$patient->lastname}}" class="form-control"></div>


                            <div class="form-group"><label>{{trans('file.visits')}}</label> <input type="text" name="visits" placeholder="{{trans('file.visits')}}"
                                                                                                      value="{{$patient->status}}" class="form-control"></div>


                            <div class="form-group"><label>{{trans('file.next_appointment_date')}}</label> <input type="date" name="next_appointment_date" placeholder="{{trans('file.next_appointment_date')}}"
                                                                                                      value="{{$patient->next_appointment}}" class="form-control"></div>


                            <div class="form-group"><label>{{trans('file.phone')}}</label> <input type="text" name="phone" placeholder="{{trans('file.phone')}}"
                                                                                                                  value="{{$patient->phone}}" class="form-control"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>
                            <button type="submit"   class="btn btn-primary">{{trans('file.save')}}</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endforeach
    {{-- end of modal window--}}

@endsection

@section('script')
    <script>
        {{-- filter search all patient table --}}
        function search_all_patient() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_all_patient");
            filter = input.value.toUpperCase();
            table = document.getElementById("table_all_patient");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>

@endsection


