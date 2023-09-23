<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Admin's Dash</title>
</head>
<body>

    <div class="main-container d-flex h-100">
        <div class="row align-items-start">
            <div class="col sidebar">
                @yield('sidebar')
            </div>
        
    
            <div class="col">
            @yield('main')
            </div>
        </div>
    </div>

    @yield('footer')

</body>
</html>