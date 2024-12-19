<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/img/logo.webp') }}" type="image/x-icon" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <title>Contact Manager</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css') }}">
    @vite('resources/css/app.css')
    @stack('style')
</head>

<body>
    {{-- <div class="navbar"></div> --}}
    @include('partials.header')
    <div class="floating"></div>
    @yield('content')
    <div class="footer"></div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    <script async src="//www.instagram.com/embed.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazy-master/jquery.lazy.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('img').Lazy({
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                },
            })
        })
    </script>
    @stack('script')
</body>

</html>
