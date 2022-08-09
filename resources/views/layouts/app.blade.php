<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add to Cart</title>
    @livewireStyles
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
<link href="https://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
<link rel="stylesheet" href="/scss/webshop.css">
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

@livewire('header')

<div class="font-sans text-gray-900 antialiased uk-container websitewrapper">
    @yield('content')
</div>

@livewireScripts
</body>
</html>
