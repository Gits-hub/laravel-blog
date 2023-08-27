<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-App</title>
    <style>
        li{
            list-style: none;
        }


        a{
            color: rgb(145, 151, 151);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Available {{$Name}}</h1>
    @unless (!$profile)

    @foreach ($profile as $person)
        <h2><a href="/{{$person['up_id']}}">{{$person['names']}}/ {{$person['age']}}</a></h2>

        <li>
            <ul>Status: {{$person['status']}}</ul>
            <ul>Nationality: {{$person['nationality']}}</ul>
            <ul>Height: {{$person['height']}}inches</ul>
            <ul>Weight: {{$person['weight']}}Kg</ul>
            <ul>Disability: {{$person['disability']}}</ul>
        </li>
    @endforeach

    @else
        <p>No Profiles posted</p>
    @endunless
</body>
</html>