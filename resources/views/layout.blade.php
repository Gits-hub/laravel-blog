<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlogApp</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-10">
    {{-- Nav Bar --}}
    <p class="text-sm container flex justify-center bg-zinc-400 mx-auto rounded">A parody app visualizing how modern slave trade would be like. This is not meant to downplay or desensitize slavery</p>
    <div>
        <h2 class="font-bold text-black space-x-2"><span class="text-2xl">::Blarket</span><span class="text-sm text-darkgray-400">Your one stop slave market</span></h2>
    </div>

    {{-- VIEW OUTPUT --}}

    @yield('content')
</body>
</html>