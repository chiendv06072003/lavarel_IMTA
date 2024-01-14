<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    @include('clients.blocks.header')    
    <main>
        @include('clients.blocks.carousel')
        {{-- <aside>
            @section('sidebar')
                @include('clients.blocks.sidebarblock')
            @show
         
        </aside> --}}
        <div class="content">
            @yield('content')
        </div>
    </main>
   @include('clients.blocks.footer')
    <script src="{{asset('assets/client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/client/js/custom.js')}}"></script>
</body>
</html>