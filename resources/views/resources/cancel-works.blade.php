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
                            <a href="#bookingresource" data-toggle="tab">{{ __('All Room') }}</a>
                        </li>
                        <li>
                            <a href="#bookinglocation" data-toggle="tab">{{ __('All Location') }}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="bookingresource">
                            <table id="table_id" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Room Id</th>
                                    <th>Location</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                        <tr id="{{$booking->id}}">
                                            <td class="roomId">{{$booking->room_id}}</td>
                                            <td class="roomName">{{$booking->name}}</td>
                                            <td class="roomLocation">{{$booking->sede}}</td>
                                            <td class="start">{{$booking->start_date}}</td>
                                            <td class="end">{{$booking->end_date}}</td>
                                            <td>
                                                <button type="button" class="deleteProduct btn btn-danger" data-id="{{ $booking->id }}" data-token="{{ csrf_token() }}">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="bookinglocation">
                            <table id="table_id" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Location</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr id="{{$booking_locations[0]->id}}">
                                        <td class="roomId">{{$booking_locations[0]->location_id}}</td>
                                        <td class="roomLocation">{{$booking_locations[0]->sede}}</td>
                                        <td class="start">{{$booking_locations[0]->start_date}}</td>
                                        <td class="end">{{$booking_locations[0]->end_date}}</td>
                                        <td>
                                            <button type="button" class="deleteProductLocation btn btn-danger" data-id="{{ $booking_locations[0]->location_id }}" data-token="{{ csrf_token() }}">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </section>
@endsection

@push('js')
<script>
    // delete work for a single resource
    $(".deleteProduct").click(function(event){
        var id = $(this).data('id');
        var token = $(this).data('token');
        var $tr = $(this).closest('tr');
        var tr =  $tr.find('td');
        console.log(tr);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    url: '/dashboard/booking/deletebooking/'+id,
                    type: 'delete', // replaced from put
                    dataType: "json",
                    data: {
                        "id": id // method and token not needed in data
                    },
                    success: function (response)
                    {
                        // see the reponse sent
                        $tr.find('td').fadeOut(1000,function(){
                            $tr.remove();
                        });
                        console.log(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText); // this line will save you tons of hours while debugging
                        // do something here because of error

                    }
                });

    });

    // delete work for a location
    $(".deleteProductLocation").click(function(event){
        var id = $(this).data('id');
        var token = $(this).data('token');
        var $tr = $(this).closest('tr');
        var tr =  $tr.find('td');
        console.log(tr + '<br />' + token + '<br />' + $tr + '<br />' + tr );


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax(
                {
                    url: '/dashboard/booking/deletebookinglocation/'+id,
                    type: 'delete', // replaced from put
                    dataType: "json",
                    data: {
                        "id": id // method and token not needed in data
                    },
                    success: function (response)
                    {
                        // see the reponse sent
                        $tr.find('td').fadeOut(1000,function(){
                            $tr.remove();
                        });
                        console.log(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText); // this line will save you tons of hours while debugging
                        // do something here because of error

                    }
                }
        );
    });
</script>
@endpush






