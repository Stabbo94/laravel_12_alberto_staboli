<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Around The World Travel!</title>
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/general.js'])
    
</head>

<body>
    <x-navbar/>
    {{$slot}}
    
    <footer class="container-fluid">
        <p class="text-center footertext">Around The World S.r.l. | Viale Parioli 78, 00197 Roma RM | Tel. +39 06 331 5528 | P.IVA 12556984588</p>
    </footer>
</body>
</html>

