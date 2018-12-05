@extends('dashboard.layouts')

<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

@push('css')
    <link href='{{ url('/') }}/newfullcalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='{{ url('/') }}/newfullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href='{{ url('/') }}/newfullcalendar/scheduler.min.css' rel='stylesheet' />
    <link href='{{ url('/') }}/jqueryui/jquery-ui.min.css' rel='stylesheet' />
    <link href='{{ url('/') }}/jqueryui/themes/smoothness/jquery-ui.css' rel='stylesheet' />
  <!--   <link href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css' rel='stylesheet' /> -->
<!--  <link href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css' rel='stylesheet' /> -->
    <style>
        #calendar {
            max-width: 1440px;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
            font-size: 20px;
        }
    </style>

    <title>Booking Calendar</title>
@endpush

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="active">{{ __('Booking Calendar') }}</li>
    </ol>
@endsection


@section('content')
<section>
    <div class="row">
        <!-- Button trigger modal -->
        <div class="col-md-12">
            <div id="calendar"></div>
                <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Booking</h4>
                            </div>
                            <div class="modal-body">
                                <form name="save-event" method="post">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <input type="text" name="title" id="title" class="form-control col-xs-3" />
                                    </div>
                                    <div class="form-group">
                                        <label>Event start</label>
                                        <input type="text" name="evtStart" id="evtStart" class="form-control col-xs-3" />
                                    </div>
                                    <div class="form-group">
                                        <label>Event end</label>
                                        <input type="text" name="evtEnd" id="evtEnd" class="form-control col-xs-3" />
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="save btn btn-primary">Save</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>
    </div>

    <div id="eventContent" title="Event Details" style="display:none;">
        <span id="bookingId" style="display: none"></span><br>
        Start: <span id="startTime"></span><br>
        End: <span id="endTime"></span><br>
        Resource: <span id="resourceName"></span><br>
        Price:&euro; <span id="price"></span><br>
        Optional:&euro; <span id="optional"></span><br>
        Total Price:&euro; <span id="total_price"></span><br><br />
            <div class="col-sm-4 eventDelete">
                <button type="submit" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </div>
            <div class="col-sm-4 eventOptional">
                <button type="submit" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                </button>
            </div>
            <div class="col-sm-4 closeEvent">
                <button type="submit" class="btn btn-secondary btn-lg">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
    </div>


</section>
    @endsection


@push('js')
    <script src="{{ url('/') }}/newfullcalendar/moment.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/fullcalendar.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/scheduler.min.js"></script>
    <script src="{{ url('/') }}/jqueryui/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/js/sweetalert.min.js"></script>

<script>
        $('#calendar').fullCalendar({
            schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
            header: {
                center: 'title',
                left: 'today prev,next,addEventButton',
                right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
            },
            // now: new Date(),
            editable: false,
            defaultView: 'timelineDay',
            resourceLabelText: 'Rooms',
            slotLabelFormat: ['H:mm'],
            forceEventDuration : false,
            defaultTimedEventDuration : "01:00",
            selectHelper: false,
            snapDuration: '00:30:00',
            selectable: true,
            aspectRatio: 1.8,
            scrollTime: '08:00', // undo default 6am scrollTime
            resources: '{!! route('fullcalendar.roomall') !!}',
            events: '{!! route('fullcalendar.bookingall') !!}',
            select: function( start, end, jsEvent, view, resourceId,event) {

                var hours = Math.abs(end - start) / 36e5;

                var integer = Number.isInteger(hours);

              //  alert(integer);

                if(integer){
                    $('#event-modal').find('input[name=title]').val('');
                    // set values in inputs
                    $('#event-modal').find('input[name=evtStart]').val(
                            start.format('YYYY-MM-DD HH:mm:ss')
                    );
                    $('#event-modal').find('input[name=evtEnd]').val(
                            end.format('YYYY-MM-DD HH:mm:ss')
                    );
                    // show modal dialog
                    $('#event-modal').modal('show');
                    /*
                     bind event submit. Will perform a ajax call in order to save the event to the database.
                     When save is successful, close modal dialog and refresh fullcalendar.
                     */

                    $("#event-modal .save").off('click').on('click', function(e) {

                        var id = resourceId['id'];
                        var roomName = resourceId['title'];
                        var title = $('#title').val();
                        var start = $('#evtStart').val();
                        var end = $('#evtEnd').val();


                        $('#event-modal').modal('hide');

                        $.ajax({
                            url: '{{ route('events.save') }}',
                            data: $("#event-modal").serialize(),
                            type: 'post',
                            dataType: 'json',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'title': title,
                                'start': start,
                                'end': end,
                                'roomId': id,
                                'roomName': roomName
                            },
                            success: function(response) {
                                console.log(response);
                                //  location.reload();
                                $("#calendar").fullCalendar( 'refetchEvents');
                            }
                        });
                    });
                } else {
                   // alert ('Devi selezionare per multipli di 1 ora a partire da start');
                   // e.preventDefault();
                    swal ( "Oops" ,  "Puoi selezionare multipli di 1h!" ,  "error" );
                }



            },

            // apre popup su evento
            eventRender: function (event, element) {
                element.attr('href', 'javascript:void(0);');
                element.click(function() {
                    console.log(event);
                    $("#startTime").html(moment(event.start).format('Do MMM HH:mm'));
                    $("#endTime").html(moment(event.end).format('Do MMM HH:mm'));
                    $("#resourceName").html(event.name);
                    $("#bookingId").html(event.id);
                    $("#price").html(event.price);
                    $("#optional").html(event.price_tot_optional);
                    $("#total_price").html(event.total_price);
                    $("#eventLink").attr('href', event.url);
                    $("#eventContent").dialog({ modal: true, title: event.title, width:400});

                    // START delete booking
                    $('.eventDelete').off('click').on('click',function(){
                        var id = event.id;
                        $('#eventContent').dialog('close');
                        $.ajax({
                          //  url:'/dashboard/booking/deletebooking/'+id,
                            url:'/events/delete/'+id,
                            type: 'delete',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'id': event.id
                            },
                            success: function(response) {
                                console.log(response);
                                //  location.reload();
                                  $("#calendar").fullCalendar( 'refetchEvents');
                            }
                        });
                    });
                    // END delete booking

                    // START Add Optional
                    $('.eventOptional').off('click').on('click',function(){
                        var id = event.id;
                        $('#eventContent').dialog('close');
                        $.ajax({
                            //  url:'/dashboard/booking/deletebooking/'+id,
                            url:'/dashboard/bookingoptionals/optionalcreate/'+id,
                            type: 'get',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'id': event.id
                            },
                            success: function(response) {
                                console.log(response);
                                window.location.href = '/dashboard/bookingoptionals/optionalcreate/'+id;
                                //  location.reload();
                            }
                        });
                    });
                    // END Add Optional

                    $('.closeEvent').off('click').on('click',function(){
                        $('#eventContent').dialog('close');
                    });


                });
            },



        });

</script>

@endpush






