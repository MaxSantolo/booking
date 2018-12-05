<!DOCTYPE html>
<html lang="en-EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <h3>Conferma booking n.{{$booking->id}}</h3>

    <div class="container">

        <p>Gent.Le {{$booking->booked_name}},</h5> ringraziandoLa per la fiducia accordata, di seguito il riepilogo dei servizi richiesti:<br /><br />

            Prenotazione della risorsa {{$room->name}} presso la sede {{$booking->location}} dal {{$booking->start_date}} al {{$booking->end_date}}</p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Prezzo Risorsa:</td>
            <td>&euro; {{$booking->price}}</td>
        </tr>
        <tr>
            <td>Coffee Break:</td>
            <td>&euro; {{$optional->coffee_break}}</td>
        </tr>
        <tr>
            <td>Quick Lunch:</td>
            <td>&euro; {{$optional->quick_lunch}}</td>
        </tr>
        <tr>
            <td>Videoproiettore:</td>
            <td>&euro; {{$optional->videoproiettore}}</td>
        </tr>
        <tr>
            <td>Permanent Coffee:</td>
            <td>&euro; {{$optional->permanent_coffee}}</td>
        </tr>
        <tr>
            <td>Wi-Fi:</td>
            <td>&euro; {{$optional->wifi}}</td>
        </tr>
        <tr>
            <td>Videconferenza:</td>
            <td>&euro; {{$optional->videoconferenza}}</td>
        </tr>
        <tr>
            <td>Webconference:</td>
            <td>&euro; {{$optional->webconference}}</td>
        </tr>
        <tr>
            <td>Lavagna fogli mobili:</td>
            <td>&euro; {{$optional->lavagna_foglimobili}}</td>
        </tr>
        <tr>
            <td>Stampante:</td>
            <td> &euro; {{$optional->stampante}}</td>
        </tr>
        <tr>
            <td>Permanent Coffee Plus:</td>
            <td>&euro; {{$optional->permanent_coffeeplus}}</td>
        </tr>
        <tr>
            <td>Connessione via cavo:</td>
            <td>&euro; {{$optional->connessione_viacavo}}</td>
        </tr>
        <tr>
            <td>Integrazione Permanent Coffee plus:</td>
            <td>&euro; {{$optional->integrazione_permanentcoffee}}</td>
        </tr>
        <tr>
            <td>Upgrade banda 10 Mb:</td>
            <td>&euro; {{$optional->upgrade_banda10mb}}</td>
        </tr>
        <tr>
            <td>Upgrade banda 8Mb:</td>
            <td>&euro; {{$optional->upgrade_banda8mb}}</td>
        </tr>
        <tr>
            <td>Upgrade banda 20Mb:</td>
            <td>&euro; {{$optional->upgrade_banda20mb}}</td>
        </tr>
        <tr>
            <td>Wirless 4Mb 20 accessi:</td>
            <td>&euro; {{$optional->wirless_4mb20accessi}}</td>
        </tr>
        <tr>
            <td>Wirless 8Mb 35 accessi:</td>
            <td>&euro; {{$optional->wirless_8mb35accessi}}</td>
        </tr>
        <tr>
            <td>Video Registrazione:</td>
            <td>&euro; {{$optional->videoregistrazione}}</td>
        </tr>
        <tr>
            <td>Fattorino:</td>
            <td>&euro; {{$optional->fattorino}}</td>
        </tr>
        <tr>
            <td>Lavagna Interattiva:</td>
            <td>&euro; {{$optional->lavagna_interattiva}}</td>
        </tr>
        <tr>
            <td colspan="3">-------------------------------------------------------------------</td>
        </tr>
        <tr>
            <td>Totale:</td>
            <td>&euro; {{$booking->total_price}} + Iva</td>
        </tr>
        </tbody>
    </table>

<div class="col-md-4">
    Di seguito il modulo di Prenotazioni da rinviare compilato e firmato tramite email a <a href="mailto:info@pickcenter.com">info@pickcenter.com</a>
    <p>
        <a href="{{action('ViewsController@generatePDF', $booking->id)}}"><img src="{{ url('/') }}/img/pdf.png" width="60" /></a>
    </p>
</div>


</div>

</div>


</body>
</html>