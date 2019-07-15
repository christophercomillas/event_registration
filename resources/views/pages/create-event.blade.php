@extends('layouts.default')
@section('title', 'New Event')
@section('content')   
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card sale-card">
                            <div class="card-header">
                                <h5>Create Event</h5>
                            </div>
                            <div class="card-block">
                                <form id="main" method="post" action="{{ route('store-event') }}" novalidate="" id="new-event">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <input type="text" class="form-control" name="EventName" id="EventName" placeholder="Event Name">                                                
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Location</label>
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <input type="text" class="form-control" name="EventLocation" id="EventLocation" placeholder="Event Location">                                                
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <textarea class="form-control" id="EventDescription" name="EventDescription"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Type</label>
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <select class="form-control" name="EventType">
                                                <option value="">Seminar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                                <i class="fa fa-calendar"></i>&nbsp;
                                                <span></span> <i class="fa fa-caret-down"></i>
                                                <input type="hidden" value="" name="EventDateRange" id="EventDateRange">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Registration Start</label>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <input type="datetime-local" class="form-control" id="EventRegistrationStart" name="EventRegistrationStart"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Registration End</label>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <input type="datetime-local" class="form-control" id="EventRegistrationEnd" name="EventRegistrationEnd" />
                                        </div>
                                    </div>
                                    <div class="col text-center">                                       
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Submit</button>                                
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@push('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">

    
@endpush

@push('extra-js')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.min.js') }}"></script>
<script>
    CKEDITOR.replace( 'EventDescription' );
    //CKEDITOR.config.removeButtons = 'Underline,JustifyCenter';

        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#reportrange #EventDateRange').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });

</script>
@endpush