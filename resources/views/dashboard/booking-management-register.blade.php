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
        <li class="active">{{ __('Booking Management') }}</li>
    </ol>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <li class="active">
                            <a href="#addNewBooking" data-toggle="tab">{{ __('Make new booking') }}</a>
                        </li>

                    </ul>
                    <div class="tab-content">

                        <div id="addNewBooking">
                            <form id="search" action="{{ route('bookings.search') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Date and time range -->
                                        <div class="form-group">
                                            <label>{{ __('Select date and time') }}:</label>

                                            <div class="input-group" style="display: none">
                                                <input type="text" class="form-control pull-right" name="bookingTime" id="bookingTime">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                </div>
                                            </div>

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

                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->

                                        <!-- Material inline 1 -->
                                        @if($resource == 'coworking')
                                            <div class="form-check form-check-inline" style="padding-top: 20px">
                                                <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" checked>
                                                <label class="form-check-label" for="materialInline1">Coworking &nbsp;</label>

                                                <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline2">DayOffice &nbsp;</label>

                                                <!-- Material inline 3 -->
                                                <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline3">Sala riunioni &nbsp;</label>
                                            </div>
                                        @endif

                                        @if($resource == 'dayoffice')
                                            <div class="form-check form-check-inline" style="padding-top: 20px">
                                                <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline1">Coworking &nbsp;</label>

                                                <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample" checked>
                                                <label class="form-check-label" for="materialInline2">DayOffice &nbsp;</label>

                                                <!-- Material inline 3 -->
                                                <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline3">Sala riunioni &nbsp;</label>
                                            </div>
                                        @endif

                                        @if($resource == 'sala_riunioni')
                                            <div class="form-check form-check-inline" style="padding-top: 20px">
                                                <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline1">Coworking &nbsp;</label>

                                                <input type="radio" class="form-check-input" id="materialInline2" name="inlineMaterialRadiosExample">
                                                <label class="form-check-label" for="materialInline2">DayOffice &nbsp;</label>

                                                <!-- Material inline 3 -->
                                                <input type="radio" class="form-check-input" id="materialInline3" name="inlineMaterialRadiosExample" checked>
                                                <label class="form-check-label" for="materialInline3">Sala riunioni &nbsp;</label>
                                            </div>
                                        @endif

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-3">

                                        <!-- foreach for pax of rooms -->
                                     <!--   <div class="form-group">
                                            <label>{{ __('Pax') }}</label>
                                            <select class="form-control" style="width: 100%;" name="pax">
                                                <option value="">Please select one</option>
                                                @foreach($rooms as $room)
                                                    <option>{{ $room->pax }}</option>
                                                @endforeach
                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <label>{{ __('Pax') }}</label>
                                            <select class="form-control" style="width: 100%;" name="pax">
                                                <option value="">Please select one</option>
                                                    <option>1</option>
                                                    <option>3</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>{{ __('Location') }}</label>
                                            <select class="form-control" style="width: 100%;" name="location">
                                                <option value="">Please select one</option>
                                                @foreach($sedi as $sede)
                                                    <option>{{ $sede->sede }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>




                                    <!-- /.col -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="btn btn-primary" style="width: 100%">{{ __('Submit') }}</button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addModal" data-whatever="" style="width: 100%">Add Optional</button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <div id="result">
                                <h2 style="text-align: center">{{ __('Spazi disponibili per la data selezionata') }}:</h2>
                                <table id="searchResult" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                     <tr>
                                         <th>{{ __('Room Name') }}</th>
                                         <th>{{ __('Pax') }}</th>
                                         <th>{{ __('Location') }}</th>
                                         <th>{{ __('Type') }}</th>
                                         <th>{{ __('Price') }}</th>
                                         <th>{{ __('Action') }}</th>
                                     </tr>
                                     </thead>
                                     <tfoot>
                                     <tr>
                                         <th>{{ __('Room Name') }}</th>
                                         <th>{{ __('Pax') }}</th>
                                         <th>{{ __('Location') }}</th>
                                         <th>{{ __('Type') }}</th>
                                         <th>{{ __('Price') }}</th>
                                         <th>{{ __('Action') }}</th>
                                     </tr>
                                     </tfoot>
                                </table>
                                <p>
                                    <table>
                                         @include('optionals.modal_form')
                                    </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
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
        $(document).ajaxStart(function() { Pace.restart(); });
        $('#result').hide(); // hide booking search result table

        $(document).ready(function () {


            $('#bookingList').DataTable({
                initComplete: function(){
                    var api = this.api();
                    $('#bookingList_filter input')
                        .off('.DT')
                        .on('keyup.DT', function (e) {
                            if (e.keyCode === 13) {
                                api.search(this.value).draw();
                            }
                        });
                },
                processing: true,
                serverSide: true,
                ajax: "{!! route('datatables.bookings') !!}",
                lengthMenu: [[5,20,50,100,-1], [5,20,50,100,"All"]],
                columns: [
                    { data: 'room_name', name: 'room_name' },
                    { data: 'booked_by', name: 'booked_by' },
                    { data: 'start_date', name: 'start_date' },
                    { data: 'end_date', name: 'end_date' },
                    { data: 'duration', name: 'duration'},
                    { data: 'status', name: 'status'},
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });

            // Cancel booking
            $('#bookingList')
                .DataTable()
                .on('click', '.btn-delete', function (event) {
                    event.preventDefault();

                    var url = $(this).data('remote');
                    var token = $('meta[name="csrf-token"]').attr('content');

                    swal({
                        title: '{{ __ ('Are you sure to cancel this booking?') }}',
                        text: "{!! __("You won't be able to revert this!") !!}",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#ccc',
                        confirmButtonText: '{!! __('Yes, cancel it!') !!}',
                        cancelButtonText: '{!! __('Cancel') !!}',
                        allowOutsideClick: false
                    }).then(function () {
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {'_method' : 'DELETE', '_token' : token},
                            dataType: 'json'
                        })
                            .done(function(data){
                                swal({
                                    title: '{{ __('Cancelled!') }}',
                                    text: data.message,
                                    type: 'success',
                                    confirmButtonText: '{!! __('Close') !!}',
                                    allowOutsideClick: false
                                }).then(function(){
                                    $('#bookingList').DataTable().ajax.reload();
                                });
                            })
                            .fail(function(data){
                                var errors = data.responseJSON;
                                if (data.status === 403) {
                                    swal({
                                        title: '{{ __('Request denied!') }}',
                                        text: errors.message,
                                        type: 'error',
                                        confirmButtonText: '{!! __('Close') !!}',
                                        allowOutsideClick: false
                                    });
                                } else {
                                    $.each(errors.errors, function (key, value) {
                                        toastr.error(value);
                                    });
                                }
                            });
                    });
                });

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

            $('#search').on('submit', function (event) {
                event.preventDefault();
                var data = $(this).serialize();

                //   var bookingTime = document.getElementById('bookingTime').value;
                var bookingTimeUno = document.getElementById('bookingTimeUno').value;
                var bookingTimeDue = document.getElementById('bookingTimeDue').value;
                var bookingTime = bookingTimeUno + ' - ' + bookingTimeDue;
                //   console.log(bookingTime);
                console.log(bookingTime);

                $.ajax({
                    type: "POST",
                    url: "{{ route('bookings.search') }}",
                    data: data,
                    dataType: 'json'
                })
                    .done(function(result){
                        $('#searchResult').DataTable().destroy();
                        $('#webconference').prop("checked",false);
                        $('#videoproiettore').prop("checked",false);
                        $('#videoregistrazione').prop("checked",false);
                        $('#lavagna_interattiva').prop("checked",false);
                        $('#videoconferenza').prop("checked",false);
                        $('#result').show();
                        $('#searchResult').DataTable({
                            data: result,
                            columns: [
                                { data: 'name' },
                                { data: 'pax', width: '100px', orderable: false, searchable: false},
                                { data: 'location', width: '100px', orderable: false, searchable: false},
                                { data: 'type', width: '100px', orderable: false, searchable: false},
                                { data: 'price', width: '100px', orderable: false, searchable: false},
                                { data: 'action', width: '100px', orderable: false, searchable: false}
                            ]
                        }).on('click', '.btn-book', function(event){
                            event.preventDefault();
                            var price = $(this).data('price');
                            var room_name = $(this).data('name');
                            $('#addModal').modal('show');
                            $('.modal-title').html($(this).data('name'));
                            $('.price_resource').html($(this).data('price'));
                            $('.total').text(price);
                            var roomName = $(this).data('name');
                            var roomId = $(this).data('id');
                            var url = $(this).data('remote');
                            var token = $('meta[name="csrf-token"]').attr('content');
                            var clickedRow = $('#searchResult')
                                .DataTable()
                                .row($(this).parents('tr'));

                            // START optionals

                            $('.add').off('click').on('click',function(event) {
                                event.preventDefault();
                                var coffee_break = $('#coffee_break').val() * 6.5;
                                var quick_lunch = $('#quick_lunch').val() * 1;
                                var permanent_coffee = $('#permanent_coffee').val() * 7;
                                var wifi = $('#wifi').val() * 50;
                                var lavagna_foglimobili = $('#lavagna_foglimobili').val() * 1;
                                var stampante = $('#stampante').val() * 25;
                                var permanent_coffeeplus = $('#permanent_coffeeplus').val() * 1;
                                var connessione_viacavo = $('#connessione_viacavo').val() * 1;
                                var integrazione_permanentcoffee = $('#integrazione_permanentcoffee').val() * 1;
                                var upgrade_banda10mb = $('#upgrade_banda10mb').val() * 1;
                                var upgrade_banda8mb = $('#upgrade_banda8mb').val() * 1;
                                var upgrade_banda20mb = $('#upgrade_banda20mb').val() * 1;
                                var wirless_4mb20accessi = $('#wirless_4mb20accessi').val() * 1;
                                var wirless_8mb35accessi = $('#wirless_8mb35accessi').val() * 1;
                                var wirless_10mb50accessi = $('#wirless_10mb50accessi').val() * 1;
                                var fattorino = $('#fattorino').val() * 1;
                                // START checkbox
                                if ($('#lavagna_interattiva').is(':checked')) {
                                    var lavagna_interattiva = 75;
                                    //console.log(lavagna_interattiva);
                                } else {
                                    var lavagna_interattiva = 0;
                                    // console.log(lavagna_interattiva);
                                }

                                if ($('#videoproiettore').is(':checked')) {
                                    var videoproiettore = 55;
                                    //    console.log(videoproiettore);
                                } else {
                                    var videoproiettore = 0;
                                    //    console.log(videoproiettore);
                                }

                                if ($('#videoconferenza').is(':checked')) {
                                    var videoconferenza = 45;
                                    //    console.log(videoconferenza);
                                } else {
                                    var videoconferenza = 0;
                                    // console.log(videoconferenza);
                                }

                                if ($('#webconference').is(':checked')) {
                                    var webconference = 35;
                                    // console.log(webconference);
                                } else {
                                    var webconference = 0;
                                    // console.log(webconference);
                                }

                                if ($('#videoregistrazione').is(':checked')) {
                                    var videoregistrazione = 25;
                                    // console.log(videoregistrazione);
                                } else {
                                    var videoregistrazione = 0;
                                    // console.log(videoregistrazione);
                                }

                                //END checkbox

                                var tot_optional = coffee_break + quick_lunch + permanent_coffee + wifi + lavagna_foglimobili + stampante + permanent_coffeeplus + connessione_viacavo
                                    + integrazione_permanentcoffee + upgrade_banda10mb + upgrade_banda8mb + upgrade_banda20mb + wirless_4mb20accessi + wirless_8mb35accessi
                                    + wirless_10mb50accessi + fattorino + lavagna_interattiva + videoproiettore + videoconferenza + webconference + videoregistrazione;

                                var sum = 0;


                                $('.totaloptional').each(function () {
                                    sum += parseFloat(tot_optional);

                                });
                                $('.totaloptional').text(sum);

                                $('.total').text(sum + price);

                            });

                            $('.save').off('click').on('click',function(event) {
                                event.preventDefault();
                                var coffee_break = $('#coffee_break').val() * 6.5;
                                var quick_lunch = $('#quick_lunch').val() * 1;
                                var permanent_coffee = $('#permanent_coffee').val() * 7;
                                var wifi = $('#wifi').val() * 50;
                                var lavagna_foglimobili = $('#lavagna_foglimobili').val() * 1;
                                var stampante = $('#stampante').val() * 25;
                                var permanent_coffeeplus = $('#permanent_coffeeplus').val() * 1;
                                var connessione_viacavo = $('#connessione_viacavo').val() * 1;
                                var integrazione_permanentcoffee = $('#integrazione_permanentcoffee').val() * 1;
                                var upgrade_banda10mb = $('#upgrade_banda10mb').val() * 1;
                                var upgrade_banda8mb = $('#upgrade_banda8mb').val() * 1;
                                var upgrade_banda20mb = $('#upgrade_banda20mb').val() * 1;
                                var wirless_4mb20accessi = $('#wirless_4mb20accessi').val() * 1;
                                var wirless_8mb35accessi = $('#wirless_8mb35accessi').val() * 1;
                                var wirless_10mb50accessi = $('#wirless_10mb50accessi').val() * 1;
                                var fattorino = $('#fattorino').val() * 1;
                                // START checkbox
                                if ($('#lavagna_interattiva').is(':checked')) {
                                    var lavagna_interattiva = 75;
                                    //console.log(lavagna_interattiva);
                                } else {
                                    var lavagna_interattiva = 0;
                                    // console.log(lavagna_interattiva);
                                }

                                if ($('#videoproiettore').is(':checked')) {
                                    var videoproiettore = 55;
                                    //    console.log(videoproiettore);
                                } else {
                                    var videoproiettore = 0;
                                    //    console.log(videoproiettore);
                                }

                                if ($('#videoconferenza').is(':checked')) {
                                    var videoconferenza = 45;
                                    //    console.log(videoconferenza);
                                } else {
                                    var videoconferenza = 0;
                                    // console.log(videoconferenza);
                                }

                                if ($('#webconference').is(':checked')) {
                                    var webconference = 35;
                                    // console.log(webconference);
                                } else {
                                    var webconference = 0;
                                    // console.log(webconference);
                                }

                                if ($('#videoregistrazione').is(':checked')) {
                                    var videoregistrazione = 25;
                                    // console.log(videoregistrazione);
                                } else {
                                    var videoregistrazione = 0;
                                    // console.log(videoregistrazione);
                                }

                                //END checkbox

                                var tot_optional = coffee_break + quick_lunch + permanent_coffee + wifi + lavagna_foglimobili + stampante + permanent_coffeeplus + connessione_viacavo
                                    + integrazione_permanentcoffee + upgrade_banda10mb + upgrade_banda8mb + upgrade_banda20mb + wirless_4mb20accessi + wirless_8mb35accessi
                                    + wirless_10mb50accessi + fattorino + lavagna_interattiva + videoproiettore + videoconferenza + webconference + videoregistrazione;

                                swal({
                                    title: roomName + '<h4 />Price Resource: &euro; ' + price + '</h4>' +
                                    '<h4>Otional: &euro; '+tot_optional + '</h4>'+
                                    '<h4>Total: &euro; '+ (price+tot_optional) +'</h4>',
                                    text: "{!! __("Are you sure to book this room?") !!}",
                                    type: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#ccc',
                                    confirmButtonText: "{!! __("Yes, book it!") !!}",
                                    cancelButtonText: '{!! __('Cancel') !!}',
                                    allowOutsideClick: false
                                })
                                    .then(function(){
                                        var input = {
                                            '_token': token,
                                            'roomId' : roomId,
                                            'roomName' : roomName,
                                            'bookingTime': bookingTime,
                                            'tot_optional': tot_optional,
                                            'coffee_break' : coffee_break,
                                            'quick_lunch' : quick_lunch,
                                            'videoproiettore': videoproiettore,
                                            'permanent_coffee': permanent_coffee,
                                            'wifi': wifi,
                                            'videoconferenza': videoconferenza,
                                            'webconference': webconference,
                                            'lavagna_foglimobili': lavagna_foglimobili,
                                            'stampante': stampante,
                                            'permanent_coffeeplus': permanent_coffeeplus,
                                            'connessione_viacavo': connessione_viacavo,
                                            'integrazione_permanentcoffee': integrazione_permanentcoffee,
                                            'upgrade_banda10mb': upgrade_banda10mb,
                                            'upgrade_banda8mb': upgrade_banda8mb,
                                            'upgrade_banda20mb': upgrade_banda20mb,
                                            'wirless_4mb20accessi': wirless_4mb20accessi,
                                            'wirless_8mb35accessi': wirless_8mb35accessi,
                                            'wirless_10mb50accessi': wirless_10mb50accessi,
                                            'videoregistrazione': videoregistrazione,
                                            'fattorino': fattorino,
                                            'lavagna_interattiva': lavagna_interattiva
                                        };
                                        $('#addModal').modal('hide');
                                        console.log(input);
                                        $.ajax({
                                            type: "post",
                                            url: url,
                                            data: input,
                                            dataType: 'json'
                                        })
                                            .done(function(data){
                                                swal({
                                                    title: '{{ __('Booked!') }}',
                                                    text: 'Reservation confirmed!',
                                                    type: 'success',
                                                    allowOutsideClick: false
                                                }).then(function(){
                                                    clickedRow.remove().draw();
                                                    $('#bookingList').DataTable().ajax.reload();
                                                });
                                            })
                                            .fail(function(data){
                                                var errors = data.responseJSON;
                                                $.each(errors.errors, function (key, value) {
                                                    toastr.error(value);
                                                });
                                            });
                                    });
                            });
                        });

                        // END optionals
                    })
                    .fail(function(data){
                        $('#result').hide();

                        var errors = data.responseJSON;
                        $.each(errors.errors, function (key, value) {
                            toastr.error(value);
                        });
                    });
            })

        });
    </script>
@endpush