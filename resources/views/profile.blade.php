@unless (!$person)

<h2>{{$person['names']}}/ {{$person['age']}}</h2>

<li>
    <ul>Status: {{$person['status']}}</ul>
    <ul>Nationality: {{$person['nationality']}}</ul>
    <ul>Height: {{$person['height']}}inches</ul>
    <ul>Weight: {{$person['weight']}}Kg</ul>
    <ul>Disability: {{$person['disability']}}</ul>
</li>    
@else
<p>No Profile</p>
@endunless

<a href="/">Back</a>