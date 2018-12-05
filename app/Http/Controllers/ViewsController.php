<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Adapter\PDFLib;
use Dompdf\Dompdf;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function generatePDF($id){

        $booking  = Booking::find($id);
        $user = User::find($booking->booked_by);
        $room = Room::find($booking->room_id);


        $details = ['title' => 'Documento'];

        $pdf = PDF::loadView('pdf.textDoc',$details,compact('booking','user','room'));

        return $pdf->download('Modulo_Prenotazione.pdf');
    }
}
