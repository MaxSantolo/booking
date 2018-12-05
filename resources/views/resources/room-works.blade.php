@extends('dashboard.layouts')

@section('csrf-token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@push('css')
<link rel="stylesheet" href="{{ url('/') }}/plugins/pace/pace.min.css">
<link rel="stylesheet" href="{{ url('/') }}/toastr/toastr.min.css">
<link rel="stylesheet" href="{{ url('/') }}/datatables/datatables.min.css">
<link rel="stylesheet" href="{{ url('/') }}/sweetalert2/sweetalert2.min.css">
@endpush

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="active">{{ __('Room Works') }}</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#bookings" data-toggle="tab">{{ __('All Room') }}</a>
                        </li>
                        <li>
                            <a href="#addNewBooking" data-toggle="tab">{{ __('All Location') }}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="bookings">
                            <table id="table_id" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Room Name</th>
                                    <th>Location</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $room)
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <tr id="{{$room->id}}">
                                        <td class="roomId">{{$room->id}}</td>
                                        <td class="roomName">{{$room->name}}</td>
                                        <td class="roomLocation">{{$room->location}}</td>
                                        <td>
                                            <a href="showroom/{{$room->id}}">
                                                <button type="button" class="btn btn-warning">Work</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="addNewBooking">
                            <table id="table_id" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Location</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($location as $locazione)
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <tr id="{{$locazione->id}}">
                                        <td class="locationId">{{$locazione->id}}</td>
                                        <td class="locationName">{{$locazione->sede}}</td>
                                        <td>
                                            <a href="showlocation/{{$locazione->id}}">
                                                <button  type="button" class="btn btn-warning">Work</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </section>
@endsection

