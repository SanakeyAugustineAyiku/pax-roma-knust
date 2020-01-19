<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'IMCS Pax Romana KNUST')}}</title>
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }} " />
    @yield('styles')
</head>

<body>
    {{-- <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="main-container">
        @yield('content')
    </div>
    <script src="{{ asset('/js/app.js')}}"></script>
    <script>
    $(document).ready(function() {
        showLoader = () => {
            document.querySelector(".main-container").style.display = "none";
            setTimeout(function() {
                document.querySelector(".main-container").style.display = "block";
                document.querySelector(".loader").hidden = true;
            }, 3000);
        };
      //  showLoader();

        //sidenav
$('.sidenav').sidenav();

// collapse
$('.collapsible').collapsible();
        @yield('scripts')
    });
    </script>
</body>

</html>
