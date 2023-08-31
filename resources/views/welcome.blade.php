@extends('layout')

@section('content')
    
    <h1>Available {{$Name}}</h1>
    @unless (!$profile)

    @foreach ($profile as $person)
        <h2><a href="/{{$person['up_id']}}">{{$person['names']}}/ {{$person['age']}}</a></h2>

        <li>
            <ul>Status: {{$person['status']}}</ul>
            <ul>Location: {{$person['nationality']}}</ul>
            <ul>Height: {{$person['height']}}inches</ul>
            <ul>Weight: {{$person['weight']}}Kg</ul>
            <ul>Disability: {{$person['disability']}}</ul>
        </li>
    @endforeach

    @else
        <p>No Profiles posted</p>
    @endunless

@endsection