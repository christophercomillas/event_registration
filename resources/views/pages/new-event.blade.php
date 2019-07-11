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
                                <h5>New Event</h5>
                            </div>
                            <div class="card-block">
                                <form id="main" method="post" action="/" novalidate="">
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
                                                <div class="adjoined-bottom">
                                                    <div class="grid-container">
                                                        <div class="grid-width-100">
                                                            <div id="editor">
                                                                <h1>Hello world!</h1>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

    
@endpush

@push('extra-js')

@endpush