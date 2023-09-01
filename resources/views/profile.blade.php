@extends('layout')

@section('content')

@unless (!$person)

<h2 class="text-lg font-bold">{{$person['names']}}/ {{$person['age']}}</h2>

<li class="list-none">
    <ul>Status: {{$person['status']}}</ul>
    <ul>Location: {{$person['nationality']}}</ul>
    <ul>Height: {{$person['height']}}inches</ul>
    <ul>Weight: {{$person['weight']}}Kg</ul>
    <ul>Disability: {{$person['disability']}}</ul>
</li>    
@else
<p>No Profile</p>
@endunless

<a href="/">Back</a>

@endsection