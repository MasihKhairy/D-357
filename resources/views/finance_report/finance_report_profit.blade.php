@extends('master')

@section('style')
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dropdown_menu.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/hover/hover-min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">

    <style media="screen">
        .bts:hover {
            box-shadow: 4px 4px 4px 4px grey;
            transform: scale(1.1);
        }

        .bts {
            height: 70px;
            width: 155px;
        }

        #menu-me-drop {
            overflow: hidden;
            position: absolute;
            transition: height 1s ease;
        }

    </style>
@endsection

@section('content')
    <div class="row text-center">
        <div class="col-md-12">
            <h1>{{trans('file.pfr')}}&nbsp;&nbsp;<img src="img/profit.png" width="100px;"/></h1>
        </div>
    </div>
    <br/>
    <br/>


    {{-- financial report all report --}}
    <div class="row page-wrapper border-bottom white-bg" style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12" style="margin-top:15px; margin-left:20px;">
                    <h3> {{trans('file.profit_report')}} </h3>
                </div>
            </div>
            <form action="finance_report_profit1">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">{{trans('file.select_day')}}</label>
                            <div class="input-daterange input-group" id="">
                                <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i class="fa fa-arrow-right"></i></span>
                                <input type="date" class="input-sm form-control" name="single" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top:21px;">
                    <div class="form-group">
                            <button class="btn btn-sm btn-primary form-control"  type="submit"><i
                                        class="fa fa-tag" style=" color:#ffe118 ;"></i>
                                {{trans('file.report')}}&nbsp;
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12" style="margin-top:15px; margin-left:20px;">
                    <h3> {{trans('file.profit_report_range')}}</h3>
                </div>
            </div>
            <form action="finance_report_profit2">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">{{trans('file.select_range')}}</label>
                            <div class="input-daterange input-group" id="">
                                <input type="date" class="input-sm form-control" name="start" required/>
                                <span class="input-group-addon">{{trans('file.to')}} &nbsp;<i class="fa fa-arrow-right"></i></span>
                                <input type="date" class="input-sm form-control" name="end" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 21px;">
                    <div class="form-group" style="margin-left: 10px">
                            <button class="btn btn-sm btn-primary form-control" type="submit"><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                                &nbsp;{{trans('file.report')}}&nbsp;&nbsp;
                            </button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- end all report --}}










@endsection


@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });
        });
        $(document).on('click', function () {
            $('.getl').collapse('hide');
        })
    </script>


@endsection
