<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlogApp</title>
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
    <h2>Arbitrary Profiles</h2>

    {{-- VIEW OUTPUT --}}

    @yield('content')
</body>
</html>