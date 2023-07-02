<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="{{ asset('js/echarts.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        {{-- navbar --}}
        @include('dashboard.layouts.navbar')

        <!-- Sidebar -->
        @include('dashboard.layouts.sidebar') 
        
        {{-- main section --}}       
       <div>
        @yield('container')
       </div>


    </div>
    <script>
        feather.replace()
    </script>
    <script src="js/chrat.js"></script>
</body>

</html>
