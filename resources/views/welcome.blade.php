
@extends('layouts.app')

@section('top')
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
@endsection

@section('content')
    <body class="bg-gradient-primary">
        <div class="container" style="margin-top: 150px">
            <div class="text-center"  style="margin-bottom: 210px">
                <h1 class="text-white">{{ __('Selamat Datang di') }}<sup></sup></h1><br>
                <h2 class="text-white">{{ __('Sistem Informasi Perpustakaan') }}</h2>
            </div>
        </div>
    </body>

@endsection