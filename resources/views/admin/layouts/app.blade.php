<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Prestasi Warga') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Prestasi Warga</title>

    @yield('css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito', sans-serif !important;
        }
        body{
            background-color: #2D3142 !important;
        }
        .loader-dots div {
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .loader-dots div:nth-child(1) {
            left: 8px;
            animation: loader-dots1 0.6s infinite;
        }
        .loader-dots div:nth-child(2) {
            left: 8px;
            animation: loader-dots2 0.6s infinite;
        }
        .loader-dots div:nth-child(3) {
            left: 32px;
            animation: loader-dots2 0.6s infinite;
        }
        .loader-dots div:nth-child(4) {
            left: 56px;
            animation: loader-dots3 0.6s infinite;
        }
        @keyframes loader-dots1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes loader-dots3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }
        @keyframes loader-dots2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(24px, 0);
            }
        }
    </style>
</head>
<body>
    <div id="app" data-app>
        @yield('loader')
        <div class="leading-normal tracking-normal">
            <div class="flex flex-wrap">
                <div id="overlay-nav" class="inset-0 bg-black opacity-50 z-30" onclick="onClickButton()"></div>
                {{-- {/* start of navigation drawer */} --}}
                <div id="main-nav" class="w-1/2 md:w-1/3 lg:w-64 fixed mt-20 md:mt-0 md:top-0 md:left-0 h-screen bg-gray-50 z-30 overlay transform transition duration-500 -translate-x-full">
                    <div class="w-full h-20 flex px-4 items-center mb-8">
                        <p class="font-semibold text-xl text-blue-500 pl-4">PrestasiWarga</p>
                    </div>
                    <div class="flex flex-col mb-8 px-4 gap-y-2">
                        <a href="/home" class="w-full flex items-center text-blue-500 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer {{ Request::is('home') ? 'bg-gray-200' : '' }}">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="">Dashboard</span>
                        </a>
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('admin.kelurahan') }}" class="w-full flex items-center text-blue-500 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                 <span class="text-gray-700">Kelurahan</span>
                            </a>
                             <a href="{{ route('admin.kategori') }}" class="w-full flex items-center text-blue-500 h-10 pl-4 ">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                 <span class="text-gray-700">Kategori</span>
                            </a>
                            <a href="{{ route('datawarga.index')}}" class="w-full flex items-center text-blue-500 h-10 pl-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                 <span class="text-gray-700">Biodata</span>
                            </a>
                            <a href="{{ route('pengguna.index')}}" class="w-full flex items-center text-blue-500 h-10 pl-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                 <span class="text-gray-700">User</span>
                            </a>
                            <a href="{{ route('prestasi.index')}}" class="w-full flex items-center text-blue-500 h-10 pl-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-award" viewBox="0 0 24 24">
                                  <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                 <span class="text-gray-700">Prestasi</span>
                            </a>
                        @else
                            <a href="/member/report" class="w-full flex items-center text-green-500 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer {{ Request::is('report') ? 'bg-gray-200' : '' }}">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span class="text-gray-700">Reports</span>
                            </a>
                        @endif
                    </div>
                    <div class="mb-4 px-4">
                        <div class="w-full flex items-center text-blue-500 h-10 pl-4 hover:bg-gray-200 rounded-lg cursor-pointer">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                <button type="submit" class="text-gray-700 no-underline">
                                    Logout
                                </button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                {{-- {/* end of navigation drawer */} --}}

                {{-- {/* start of app bar */} --}}
                <div id="app-bar" class="w-full bg-gray-50 min-h-screen">
                    <div class="sticky top-0 z-40">
                        <div class="w-full h-20 px-6 bg-gray-50 flex items-center justify-between">
                            <div class="flex flex-row justify-between w-full">
                                <div class="inline-block flex items-center mr-4 cursor-pointer" onclick="onClickButton()">
                                    <svg class="w-6 h-6 stroke-current text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                                </div>
                                <div class="flex flex-row items-center justif-center text-blue-500 gap-x-2">
                                    <svg class="w-5 h-5 stroke-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <p class="font-semibold capitalize">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-gray-50 mb-20">
                        @yield('content')
                    </div>
                </div>

                {{-- {/* end of app bar */} --}}

            </div>
        </div>
        @yield('bottom-app')
    </div>
    @yield('js')
    <script>
        var navOpen = false;
        function onClickButton(){
            if(navOpen){
                navOpen = false;
                document.getElementById("overlay-nav").classList.remove("absolute");
                document.getElementById("overlay-nav").classList.remove("md:hidden");
                document.getElementById("main-nav").classList.remove("transition");
                document.getElementById("main-nav").classList.remove("duration-1000");
                document.getElementById("main-nav").classList.remove("translate-x-0");
                document.getElementById("main-nav").classList.remove("lg:block");
                document.getElementById("main-nav").classList.add("transition");
                document.getElementById("main-nav").classList.add("duration-500");
                document.getElementById("main-nav").classList.add("-translate-x-full");
            } else {
                navOpen = true;
                document.getElementById("overlay-nav").classList.add("absolute");
                document.getElementById("overlay-nav").classList.add("md:hidden");
                document.getElementById("main-nav").classList.remove("transition");
                document.getElementById("main-nav").classList.remove("duration-500");
                document.getElementById("main-nav").classList.remove("-translate-x-full");
                document.getElementById("main-nav").classList.add("transition");
                document.getElementById("main-nav").classList.add("duration-1000");
                document.getElementById("main-nav").classList.add("translate-x-0");
                document.getElementById("main-nav").classList.add("lg:block");
            }
            document.getElementById("app-bar").classList.toggle("md:pl-64");
        }
    </script>
</body>
</html>
