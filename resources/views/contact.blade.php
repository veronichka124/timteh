@extends('layout.app')


@section ('content')

    <h1>contacts</h1>

    @if (count($people))
        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>

        @endforeach


        </ul>
     @endif


    @stop