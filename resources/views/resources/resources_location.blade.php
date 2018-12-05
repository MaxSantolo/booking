@extends('dashboard.layouts')

@section('csrf-token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@push('css')
<link rel="stylesheet" href="{{ url('/') }}/plugins/pace/pace.min.css">
<link rel="stylesheet" href="{{ url('/') }}/toastr/toastr.min.css">
<link rel="stylesheet" href="{{ url('/') }}/datatables/datatables.min.css">
<link rel="stylesheet" href="{{ url('/') }}/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="{{ url('/') }}/plugins/daterangepicker/daterangepicker.css">
@endpush

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="active">{{ __('Work in Room') }}</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        @foreach($location as $locazione)
                            <h4>Location:<strong>{{$locazione->sede}}</strong></h4>
                            <br />
                        <form action="{{ route('bookingshowlocation')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>{{ __('Select date and time') }}:</label>
                                        <br />
                                        <div class="input-group">
                                            <input type="text" class="form-control pull-right" name="bookingTimeUno" id="bookingTimeUno">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar-check-o"></i>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="input-group">
                                            <input type="text" class="form-control pull-right" name="bookingTimeDue" id="bookingTimeDue">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar-check-o"></i>
                                            </div>
                                        </div>

                                        <br />
                                        <br />
                                        <div class="form-group green-border-focus">
                                            <label for="areatesto">Type Work</label>
                                            <textarea class="form-control" id="areatesto" name="areatesto" rows="3"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6" style="display: none">
                                    <div class="input-group">
                                        <label>{{ __('Location Id') }}</label>
                                        <input name="locationId" id="locationId" value="{{$locazione->id}}">
                                    </div>
                                        <div class="input-group">
                                            <label>{{ __('Location Name') }}</label>
                                                <input name="locationName" id="locationName" value="{{$locazione->sede}}">
                                        </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning">SEND</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection

@push('js')
<script src="{{ url('/') }}/plugins/pace/pace.min.js"></script>
<script src="{{ url('/') }}/toastr/toastr.min.js"></script>
<script src="{{ url('/') }}/toastr/option.js"></script>
<script src="{{ url('/') }}/datatables/datatables.min.js"></script>
<script src="{{ url('/') }}/sweetalert2/sweetalert2.min.js"></script>
<script src="{{ url('/') }}/plugins/daterangepicker/moment.min.js"></script>
<script src="{{ url('/') }}/plugins/daterangepicker/daterangepicker.js"></script>
<script>

    $(document).ready(function () {
        // Date range picker with time picker
        $('#bookingTimeUno').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePickerIncrement: 30,
            timePicker24Hour: true,
            minDate: moment().format('DD/MM/YYYY HH'),
            opens: 'right',
            locale: {
                format: 'DD/MM/YYYY HH:mm:ss'
            }
        });

        $('#bookingTimeDue').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePickerIncrement: 30,
            timePicker24Hour: true,
            minDate: moment().format('DD/MM/YYYY HH'),
            opens: 'right',
            locale: {
                format: 'DD/MM/YYYY HH:mm:ss'
            }
        });


        $('#submit').on('submit', function (e) {
            e.preventDefault();
            var start = $('#bookingTimeUno').val();
            var end = $('#bookingTimeDue').val();
            var locationId = $('#locationId').val();
            var locationName = $('#locationName').val();
            $.ajax({
                type: "POST",
                url: '/booking/showroom',
                headers: {
                    'X-CSRF-Token': $('#_token').val()
                },
                data: {
                    start: start,
                    end: end,
                    room: room,
                    location:location
                },
                success: function(result) {
                    response(result);
                }
            });
        });

    });



</script>
@endpush

