<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingsupport extends Model
{
    protected $fillable = [
        'booking_id',
        'tot_optional',
        'coffee_break',
        'quick_lunch',
        'videoproiettore',
        'permanent_coffee',
        'wifi',
        'videoconferenza',
        'webconference',
        'lavagna_foglimobili',
        'stampante',
        'permanent_coffeeplus',
        'connessione_viacavo',
        'integrazione_permanentcoffee',
        'upgrade_banda10mb',
        'upgrade_banda8mb',
        'upgrade_banda20mb',
        'wirless_4mb20accessi',
        'wirless_8mb35accessi',
        'wirless_10mb50accessi',
        'videoregistrazione',
        'fattorino',
        'lavagna_interattiva',
        'tot_optional',
        'price_room'
    ];
}
