<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @auth()
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link text-white" >{{ __('Dashboard') }}</a>
                        </li>
                    @endauth
                        @role('admin')
                            <li class="nav-item">
                                <a href="{{route('data.siswa')}}" class="nav-link text-white">{{ __('Data Siswa') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('manage-kegiatan')}}" class="nav-link text-white">{{ __('Manage Kegiatan') }}</a>
                            </li>
                        @endrole
                        @role('bendahara')
                            <li class="nav-item">
                                <a href="{{route('verifikasi-pendaftaran')}}" class="nav-link text-white">{{ __('Verifikasi Pendaftaran ') }}</a>
                            </li>
                        @endrole
                        @role('student')
                            <li class="nav-item">
                                <a href="{{route('kegiatan.tampilkan')}}" class="nav-link text-white">{{ __('Cek Kegiatan') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('activity')}}" class="nav-link text-white">{{ __('KegiatanKu') }}</a>
                            </li>
                        @endrole
                    </ul>
