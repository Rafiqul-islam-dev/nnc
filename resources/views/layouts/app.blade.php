<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Neuron Nursing Coaching</title>
    <!-- Sumerm Note  -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <link href="{{ asset('public/backend/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/app.min.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <div class="page-container">


            <!-- Content Wrapper START -->
            <div class="main-content">
                {{ $slot }}

            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                    <span>
                        <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                        <a href="#" class="text-gray">Privacy &amp; Policy</a>
                    </span>
                </div>
            </footer>
            <!-- Footer END -->

        </div>
        {{-- <main class="app">
            {{ $slot }}
        </main> --}}
    </div>





    <!---Js Link---->
    <script src="{{ asset('public/backend/js/vendors.min.js') }}"></script>

    <!-- page js -->
    <script src="{{ asset('public/backend/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/backend/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/pages/datatables.js') }}"></script>
    <script src="{{ asset('public/backend/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/pages/dashboard-default.js') }}"></script>
    <!-- Summer JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- Core JS -->
    <script src="{{ asset('public/backend/js/app.min.js') }}"></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Write Here',
            tabsize: 2,
            height: 100
        });
    </script>
</body>

</html>
