<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();   //Pegando informações do Usuário autenticado
        $user_id = $user->id;   //Pegando apenas o Id do Usuário
        
        $bookings = Booking::where('user_id', $user_id) 
                            ->with(['user', 'service', 'barbershop']) 
                            ->orderBy('id', 'desc')
                            ->get();
        
        return response()->json($bookings);
    }

    public function confirmedBookings($id)
    {
        //
        $bookings = Booking::where('user_id', $id) 
                            ->where('date', '>=', date('Y-m-d'))
                            ->with(['user', 'service', 'barbershop']) 
                            ->orderBy('id', 'desc')
                            ->get();
        
        return response()->json($bookings);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'barbershop_id' => 'required|exists:barbershops,id', 
            'service_id' => 'required|exists:services,id',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
        ]);
        
        //$booking = $request->all();
        $booking = Booking::create($request->all());
     
        $booking['message'] = "Reserva confirmada com sucesso";

        return response()->json($booking);
    }

    public function getBookingsOfTheDay(Request $request)
    {
        //
        $barbershop_id = $request->barbershop_id;
        $day = $request->date;
        $startOfDay = date('Y-m-d 00:00:00', strtotime($day)); 
        $endOfDay = date('Y-m-d 23:59:59', strtotime($day)); 
        
        $bookingOfTheDay = Booking::where('barbershop_id', $barbershop_id)
                                    ->whereBetween('date', [$startOfDay, $endOfDay])
                                    ->get();
        
        return response()->json($bookingOfTheDay);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($booking_id)
    {
        //
        $booking = Booking::findOrFail($booking_id);

        $booking->delete();

        return response()->json([
            'message' => 'Reserva cancelada com Sucesso.',
        ]);
    }
}
