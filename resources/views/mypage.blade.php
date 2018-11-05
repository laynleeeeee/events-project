@extends('layouts.app')

@section('content')

    <h1>Profile</h1>
    <div name="profile">
        <strong>Name:  </strong> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<br>
    </div>

    <br><h3><strong>{{ Auth::user()->first_name }}</strong>, here are the events you have been on:</h3><br>

    <ul>
    @foreach ($events as $event)
        <li><strong><a href="{{ url('dashboard/events/'.$event->name_event)}}"><p>Event:</p>{{ $event->name_event }}<p>Description:</p>{{$event->desc_event}}<p>Date:</p>{{$event->date_event}}</a></strong></li>  
    @endforeach
    </ul>

@endsection