@extends('layouts.app')

@section('content')

    <h1><strong>{{ $name }}</h1></strong>

    <br><h3>People that have been on this event:</h3>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->first_name }} {{ $user->last_name }}</li>
        @endforeach
    </ul>

     <div class="form-group">
                	 <button type="submit" class="btn btn-warning">
                                    <a href="/dashboard/del_event/{{ $name }}">Cancel Participation</a>
                     </button>
     </div>
@endsection