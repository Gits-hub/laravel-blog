@extends('layout')

@section('content')
    
    <h1>Available {{$Name}}</h1>
    @unless (!$profile)

    @foreach ($profile as $person)
    <div class="p-5 mb-4 w-12/12 bg-lightGray rounded-md">
        <h2 class="text-lg font-bold"><a href="/{{$person['up_id']}}">{{$person['names']}}/ {{$person['age']}}</a></h2>

        <li class="list-none">
            <ul>Status: {{$person-> status}}</ul>
            <ul>Location: {{$person-> nationality}}</ul>
            <ul>Height: {{$person-> height}} inches</ul>
            <ul>Weight: {{$person-> weight}}Kg</ul>
            <ul>Disability: {{$person-> disability}}</ul>
        </li>
    </div>
    @endforeach

    @else
        <p>No Profiles posted</p>

    @endunless

@endsection