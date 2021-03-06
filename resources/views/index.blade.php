@extends('layouts.master')

@section('content')
    @if ($errors->any())
        <p class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </p>
    @endif
    @if (isset($yourRoomMembers))
        <h1>{{ trans('cosub.yourrooms') }}</h1>
        <ul class="yourRoomsList">
            @foreach($yourRoomMembers->all() as $yourRoomMember)
                <li>
                    <a href="{{ route('rooms.room', [$yourRoomMember->room()->id]) }}">{{ $yourRoomMember->room()->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
    <h1>
        {{ trans('cosub.lastestrooms') }}
        <small>
            <a href="{{ route('rooms.rooms') }}">{{ trans('cosub.allRooms') }}</a>
        </small>
    </h1>
    @if (isset($lastRooms))
        <ul class="lastRoomsList">
            @foreach($lastRooms->all() as $lastRoom)
                <li>
                    <a href="{{ route('rooms.room', [$lastRoom->id]) }}">{{ $lastRoom->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@stop