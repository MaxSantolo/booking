<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Bookingsupport;
use App\User;
use Illuminate\Http\Request;

class BookingsupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookingsupport  $bookingsupport
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingsupport $bookingsupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookingsupport  $bookingsupport
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingsupport $bookingsupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookingsupport  $bookingsupport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookingsupport $bookingsupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookingsupport  $bookingsupport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingsupport $bookingsupport)
    {
        //
    }


    public function bookingsupport(Request $request)
    {
        $bookingsupport = new Bookingsupport();

       // return $bookingsupport;
        $bookingsupport->price_room = $request->price;
        $bookingsupport->roomId = $request->roomId;
        $bookingsupport->roomName = $request->roomName;
        $bookingsupport->bookingTime = $request->bookingTime;

        // explode for get Ip and MacAdress
        $array = explode( ' - ',$request->mac_adress);
        $bookingsupport->ip =  $array[0];
        $bookingsupport->mac_address =  $array[1];
        $bookingsupport->string_user = $request->random;


        // Add Optional in table
        $bookingsupport->tot_optional=$request->tot_optional;
        $bookingsupport->coffee_break=$request->coffee_break;
        $bookingsupport->quick_lunch =$request->quick_lunch;
        $bookingsupport->videoproiettore=$request->videoproiettore;
        $bookingsupport->permanent_coffee=$request->permanent_coffee;
        $bookingsupport->wifi=$request->wifi;
        $bookingsupport->videoconferenza=$request->videoconferenza;
        $bookingsupport->webconference=$request->webconference;
        $bookingsupport->lavagna_foglimobili=$request->lavagna_foglimobili;
        $bookingsupport->stampante=$request->stampante;
        $bookingsupport->permanent_coffeeplus=$request->permanent_coffeeplus;
        $bookingsupport->connessione_viacavo=$request->connessione_viacavo;
        $bookingsupport->integrazione_permanentcoffee=$request->integrazione_permanentcoffee;
        $bookingsupport->upgrade_banda10mb=$request->upgrade_banda10mb;
        $bookingsupport->upgrade_banda8mb=$request->upgrade_banda8mb;
        $bookingsupport->upgrade_banda20mb=$request->upgrade_banda20mb;
        $bookingsupport->wirless_4mb20accessi=$request->wirless_4mb20accessi;
        $bookingsupport->wirless_8mb35accessi=$request->wirless_8mb35accessi;
        $bookingsupport->wirless_10mb50accessi=$request->wirless_10mb50accessi;
        $bookingsupport->videoregistrazione=$request->videoregistrazione;
        $bookingsupport->fattorino=$request->fattorino;
        $bookingsupport->lavagna_interattiva=$request->lavagna_interattiva;

        //Save the booking support
        $bookingsupport->save();
    }


}
