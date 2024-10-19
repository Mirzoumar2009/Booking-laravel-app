<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user')->get();
        return view('bookings.index', compact('bookings'));
    }


    public function create()
    {
        return view('bookings.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Проверка существования пользователя
            'table_id' => 'nullable|exists:tables,id', // Проверка существования стола, если он задан
            'cabin_id' => 'nullable|exists:cabins,id', // Проверка существования кабины, если она задана
            'booking_time' => 'required|date_format:Y-m-d H:i:s', // Проверка правильного формата даты и времени
            'number_of_people' => 'required|integer|min:1', // Проверка, что количество людей является положительным целым числом
            'status' => 'required|in:pending,confirmed,cancelled', // Проверка статуса бронирования
            'booking_type' => 'required|in:home,in_restaurant', // Проверка типа бронирования
        ]);
        //$post = $request->all();
        Booking::create($validated);
        return redirect()->route('booking.index');
        /*dd($post);*/
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }


    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validate = $request->validate([
            'user_id' => 'required|exists:users,id', // Проверка существования пользователя
            'table_id' => 'nullable|exists:tables,id', // Проверка существования стола, если он задан
            'cabin_id' => 'nullable|exists:cabins,id', // Проверка существования кабины, если она задана
            'booking_time' => 'required|date_format:Y-m-d H:i:s', // Проверка правильного формата даты и времени
            'number_of_people' => 'required|integer|min:1', // Проверка, что количество людей является положительным целым числом
            'status' => 'required|in:pending,confirmed,cancelled', // Проверка статуса бронирования
            'booking_type' => 'required|in:home,in_restaurant', // Проверка типа бронирования
        ]);
        $booking->update($validate);
        return redirect()->route('booking.index')->with('success');
    }



    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
