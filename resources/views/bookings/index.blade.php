@extends('layouts.app')

@section('content')


    <table class="table">
        <tr>
            <th>#</th>
            <th>user</th>
            <th>table</th>
            <th>cabin</th>
            <th>booking_time</th>
            <th>number_of_people</th>
            <th>status</th>
            <th>booking_type</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>edit</th>
            <th>delete</th>
            <th>show</th>
        </tr>
        {{$bookings}}
        @foreach($bookings as $booking)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$booking->user->name}}</td>
                <td>{{$booking->table->seats}}</td>
                <td>{{$booking->cabin->name}}</td>
                <td>{{$booking->booking_time}}</td>
                <td>{{$booking->number_of_people}}</td>
                <td>{{$booking->status}}</td>
                <td>{{$booking->booking_type}}</td>
                <td>{{$booking->created_at}}</td>
                <td>{{$booking->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('booking.edit', $booking)}}">change</a></td>
                <td>
                    <form action="{{route('booking.destroy', $booking)}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-outline-danger" type="submit" value="delete">
                    </form>
                </td>
                <td>
                    <form action="{{route('booking.show', $booking)}}" method="post">
                        @csrf
                        @method('get')
                        <input class="btn btn-outline-success" type="submit" value="show">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-outline-primary" href="{{route('booking.create')}}">add</a>
@endsection
