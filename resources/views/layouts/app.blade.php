<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>@yield('page-title')</title>
        @yield('meta-description')
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="navDesktop" class="z-40 fixed bg-gray-800 w-full lg:grid grid-cols-5 gap-3 shadow lg:px-24 px-8 py-7 flex justify-between items-center">
            <div class="flex justify-between w-full items-center">
                <div id="menu" class="lg:hidden cursor-pointer lg:ml-auto">
                    <svg class="w-7 h-7" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="">
                    <a href="#">
                        <div class="lg:col-span-1">
                            <img class="w-9 lg:w-12 lg:ml-0 rounded-full" src="{{ asset('images/bukarng.png') }}" alt="Bukar Ng logo">
                        </div>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-4 hidden lg:block">
                <nav class="lg:flex justify-between list-none uppercase font-medium text-white">
                    <li class="py-1 hover:text-blue-400"><a href="/">Home</a></li>
                    <li class="py-1 hover:text-blue-400"><a href="#about-us">About Us</a></li>
                    <li class="py-1 hover:text-blue-400"><a href="#information-technology">Information Technology</a></li>
                    <li class="py-1 hover:text-blue-400"><a href="#import-export">Import & Export</a></li>
                    <li class="py-1 hover:text-blue-400"><a href="#agri-business">AgriBusiness</a></li>
                    <li class="py-1 hover:text-blue-400"><a href="#contact-us">Contact Us</a></li>
                </nav>
            </div>
        </div>
        <!-- Mobile Nav -->
        <div id="navMobile" class="w-full fixed h-screen z-30 hidden bg-white py-8">
            <div class="list-none p-2 text-xl border-t bg-white pt-20">
                <li class="py-3 px-8">
                    <a href="#" class="flex justify-between items-center">
                        <span>Home</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-house text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#about-us" class="flex justify-between items-center">
                        <span>About Us</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-building text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#information-technology" class="flex justify-between items-center">
                        <span>Information Technology</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-person-circle-question text-2xl"></i></span>

                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#import-export" class="flex justify-between items-center">
                        <span>Import & Export</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-person-circle-question text-2xl"></i></span>

                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#agri-business" class="flex justify-between border-b-1 items-center">
                        <span>AgriBusiness</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-briefcase text-2xl"></i></span>
                    </a>
                </li>
                <hr>
                <li class="py-3 px-8">
                    <a href="#contact-us" class="flex justify-between items-center">
                        <span>Contact Us</span>
                        &nbsp;&nbsp;
                        <span><i class="fa-solid fa-headset text-2xl"></i></span>
                    </a>
                </li>
            </div>
        </div>
        <!-- End of Navigation Bar  -->
        <!-- Body Content  -->
        <div class="relative top-20">
            @yield('body-content')
        </div>
        <!-- End of Body Content  -->
        <!-- Footer  -->
        <div class="relative top-24">
            <div id="footer" class=" bg-gray-900 py-12 px-8 lg:px-24 lg:grid grid-cols-5 gap-8 text-white">
                <div class="col-span-2">
                    <div>
                        <img class="w-28 mx-auto lg:mx-0 mb-6 rounded" src="{{ asset('images/bukarng.png') }}" alt="Bukar Ng Ltd">
                        <h1 class="text-3xl font-bold mb-4">Office Address</h1>
                        <p class="py-1 text-left lg:w-2/3 w-full">
                            No. 33 Tukuntawa Quarters, Off Zoo Road, Kano State.
                        </p>
                    </div>
                    <div class="mt-4">
                        <h1 class="text-3xl font-bold mb-4">About Us</h1>
                        <p class="py-1 lg:w-2/3 w-full text-justify">
                            M Bukar Nig Ltd is a General merchandize company with vast knowledge in Information Technology, Contracts, Import and Export, AgricBusiness, etc
                        </p>
                    </div>
                </div>
                <div class="col-span-2">
                    <h1 class="text-3xl font-bold mb-4">Navigations</h1>
                    <nav class="list-none text-white">
                        <div class="lg:grid grid-cols-2 gap-3">
                            <div>
                                <li class="py-1 hover:text-blue-400">
                                <a class="flex items-center py-1" href="/">
                                    <span>Home</span>
                                </a>
                                </li>
                                <li class="py-1 hover:text-blue-400">
                                    <a class="flex items-center py-1" href="#about-us">
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <li class="py-1 hover:text-blue-400">
                                    <a class="flex items-center py-1" href="#information-technology">
                                        <span>Information Technology</span>
                                    </a>
                                </li>
                                <li class="py-1 hover:text-blue-400">
                                    <a class="flex items-center py-1" href="#import-export">
                                        <span>Import & Export</span>
                                    </a>
                                </li>
                            </div>
                            <div>
                                <li class="py-1 hover:text-blue-400">
                                    <a class="flex items-center py-1" href="#agri-business">
                                        <span>AgriBusiness</span>
                                    </a>
                                </li>
                                <li class="py-1 hover:text-blue-400">
                                    <a class="flex items-center py-1" href="#contact-us">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-span-1">    
                    <div>
                        <h1 class="text-3xl font-bold mb-4">Follow Us</h1>
                        <nav class="list-none text-white">
                            <li class="py-1 hover:text-blue-400">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-twitter text-xl"></i></span> &nbsp;&nbsp;
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-blue-400">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-facebook text-xl"></i></span> &nbsp;&nbsp;
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-blue-400">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-instagram text-xl"></i></span> &nbsp;&nbsp;
                                    <span>Instagram</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-blue-400">
                                <a class="flex items-center py-1" href="#">
                                    <span><i class="fa-brands fa-whatsapp text-xl"></i></span> &nbsp;&nbsp;
                                    <span>WhatsApp</span>
                                </a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="py-7 text-center sm:text-sm bg-gray-800 text-white">
                <footer class="text-sm">
                    Designed & Developed by Bitcags<br>
                    Bukar Ng Ltg Copyright © @php echo date('Y') @endphp All Rights Reserved 
                </footer>
            </div>
        </div>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
