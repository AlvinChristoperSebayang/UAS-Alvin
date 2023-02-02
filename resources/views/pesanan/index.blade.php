<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-fixed bg-no-repeat w-full z-10" style="background-image:url('file/bg_regis.jpg')">
    <header class="sticky top-0 z-20">
        <nav class="container mx-auto">
            <div class="flex pt-1/2 h-20 justify-between">
                <div class="flex items-center">
                        <img src="{{ asset('file/Logo.svg') }}" alt="">
                        <h2 class="font-bold text-base pl-2">MangResto</h2>        
                        <div  id="menu" class=" font-bold flex gap-5 flex-col lg:flex-row justify-between lg:w-full lg:items-center w-full h-full max-sm:fixed z- max-sm:right-0 lg:top-0 top-16 max-sm:hidden max-sm:bg-white max-sm:pb-14 max-sm:pt-10 relative">     
                            <ul class="menu1 text-primary gap-5 pl-10 flex flex-col lg:flex-row  inline-block">
                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="active" href="/dashboard">Home</a></li>
                                <li class="hover:text-[#74A512]"><a href="#">About Us</a></li>
                                <li class="haschild hover:text-[#74A512]">
                                    <div class="mobilecaret flex">
                                        <a href="#"> Shop</a>
                                        <button onclick="dropdownshop() " class="w-5 pl-2 max-sm:right-4 max-sm:absolute">
                                            <img src="{{ asset('file/caret.png') }} " alt="">
                                        </button>
                                    </div>
                                    <ul id="shop" class="hidden bg-white text-primary absolute max-sm:w-full max-sm:relative">
                                        <li><a  class="block" href="#">Fast Food</a></li>
                                        <li><a  class="block" href="#">Vegetable Menu</a></li>
                                        <li><a  class="block" href="#">Healthy Food</a></li>
                                    </ul>
                                </li>   
                                <li class="hover:text-[#74A512]"><a href="#">Contact</a></li>
                                <li class="hover:text-[#74A512] {{ request()->is('pesanAdmin') ? 'active' : '' }}"><a class="active" href="/pesanAdmin">Blog</a></li>
                            </ul>     
                            <div class="flex justify-center">
                                <button class="lg:hidden block mt-20 rounded-lg w-[100px] h-[39px] bg-[#74A512] text-white "><a href="./daftar.html">Register</a></button>        
                            </div>
                        </div>
                </div>
              

                <section class="flex gap-7 max-sm:gap-2 items-center">
                    <button onclick="fav()">
                        <img class="max-sm:w-5" src="{{ asset('file/Favorite.svg') }}" alt="">
                    </button>
                    <button onclick="belanja()">
                        <img class="max-sm:w-5" src="{{ asset('file/keranjang.svg') }}" alt="">
                    </button>
                    <button class="relative z-0" onclick="search()">
                        <img class="w-5 max-sm:w-4 " src="{{ asset('file/search.svg') }}" alt="">
                    </button>
                    <form id="search1" class="search1 hidden absolute bg-white items-center flex top-[110%] lg:w-[19rem] w-[10rem] lg:h-[3rem] h-[2rem] rounded-lg">
                            <input class="lg:w-[17rem] w-[8rem] lg:h-full h-[2rem] normal-case rounded-lg outline-0" type="search" id="search-box" placeholder=" Search Here...">
                            <button>
                                <img class="" src="{{ asset('file/search.svg') }}" alt="">
                            </button>
                        <script src="{{ asset('file/search.js') }}" type="application/javascript"></script>
                        <script src="{{ asset('file/navbarmenu.js') }}" type="application/javascript"></script>
                        <script src="{{ asset('app.js') }}" type="application/javascript"></script>
                        <script src="{{ asset('file/slider.js') }}" type="application/javascript"></script>
                    </form>

                    {{-- <form id="login" class="absolute hidden bg-white top-[110%] right-[3%] w-[20rem] rounded-lg text-center p-[2rem] right-[2rem]">
                        <h3 class="font-bold text-xl">LOGIN NOW</h3>
                        <input type="email" placeholder=" your email" class="box">
                        <input type="password" placeholder=" your password" class="box">
                        <p class="text-base">don't have an account? <a href="./daftar.html" class="underline underline-offset-1 text-[#74A512]">Create Now</a></p>
                       <div class="flex justify-center">
                           <button id="btnpr" class="border-2 border-black w-[18rem] h-[3rem] rounded-md hover:bg-[#74A512] hover:text-white mt-3">
                               Login
                           </button>
                       </div>
                        <script src="{{ asset('file/login.js') }}" type="application/javascript"></script>
                    </form> --}}

                    <form id="cart" class="cart absolute hidden top-[110%] right-[13%] rounded-lg lg:w-[20rem] w-[15rem] h-[23rem] lg:h-[26rem] bg-white">
                        <div class="cart flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>      
                            </button>    
                            <img class="lg:w-20 w-16 lg:pl-5 pl-3 lg:pr-3 pr-0" src="{{ asset('file/ramen.png') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-sm font-bold">Ramen </h2>
                                <div>
                                    <span class="lg:text-base text-xs">Rp.45.000</span>
                                    <span class="lg:text-base text-xs">Jumlah : 1</span>
                                </div>
                            </div>
                        </div>

                        <div class="cart flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>      
                            </button>    
                            <img class="lg:w-20 w-16 lg:pl-5 pl-3 lg:pr-3 pr-0" src="{{ asset('file/salad.png') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-sm font-bold">Salad </h2>
                                <div>
                                    <span class="lg:text-base text-xs">Rp.35.000</span>
                                    <span class="lg:text-base text-xs">Jumlah : 2</span>
                                </div>
                            </div>
                        </div>

                        <div class="cart flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>      
                            </button>    
                            <img class="lg:w-20 w-16 lg:pl-5 pl-3 lg:pr-3 pr-0" src="{{ asset('file/sate.png') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-sm font-bold">Sate</h2>
                                <div>
                                    <span class="lg:text-base text-xs" >Rp.50.000</span>
                                    <span class="lg:text-base text-xs">Jumlah : 2</span>
                                </div>
                            </div>
                        </div>

                        <div class="cart flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>      
                            </button>    
                            <img class="lg:w-20 w-16 lg:pl-5 pl-3 lg:pr-3 pr-0" src="{{ asset('file/Hot Dog.png') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-sm font-bold">Hot Dog</h2>
                                <div>
                                    <span class="lg:text-base text-xs" >Rp.30.000</span>
                                    <span class="lg:text-base text-xs">Jumlah : 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="lg:text-xl text-base text-center pt-5">
                            <h2 class="lg:text-base text-sm">Total : Rp 160.000 </h2>
                            <button class="border-2 border-black lg:w-[18rem] lg:h-[3rem] w-[13rem] h-[2rem] rounded-md hover:bg-[#74A512] hover:text-white mt-3">
                                Checkout
                            </button>
                            <script src="{{ asset('file/belajar.js') }}" type="application/javascript"></script>
                        </div>
                    </form>

                    <!-- favorite -->
                    <form id="fav" class="favorite absolute hidden lg:top-[110%] lg:right-[18%] top-[110%] right-[15%] rounded-lg lg:w-[20rem] lg:h-[20rem] w-[13rem] h-[18rem] bg-white">
                        <div class="fav flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>      
                            </button>    
                            <img class="lg:w-20 w-16 pl-5 pr-3" src="{{ asset('file/seblak.jpe') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-base font-bold">Seblak</h2>
                                <div>
                                    <span class="lg:text-base text-sm"  >Rp.20.000</span>
                                </div>
                            </div>
                        </div>

                        <div class="fav flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>    
                            </button>    
                            <img class="lg:w-20 w-16 pl-5 pr-3" src="{{ asset('file/friedchckn.jpg') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-base font-bold">Chicken</h2>
                                <div>
                                    <span class="lg:text-base text-sm"  >Rp.75.000</span>
                                </div>
                            </div>
                        </div>

                        <div class="fav flex items-center gap-[1rem] relative pt-5">
                            <button class="absolute right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>   
                            </button>    
                            <img class="lg:w-20 w-16 pl-5 pr-3" src="{{ asset('file/gyoza.png') }}" alt="">
                            <div class="">
                                <h2 class="lg:text-lg text-base font-bold">Gyoza</h2>
                                <div>
                                    <span class="lg:text-base text-sm"  >Rp.40.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-xl text-center pt-5">
                            <button class="border-2 border-black lg:w-[18rem] lg:h-[3rem] w-[10rem] h[2rem] rounded-md hover:bg-[#74A512] hover:text-white mt-3">
                                Checkout Now!
                            </button>
                            <script src="{{ asset('file/belanja.js') }}" type="application/javascript"></script>
                        </div>
                        <script src="{{ asset('file/fav.js') }}" type="application/javascript"></script>
                    </form>
                        <div class="dropdown relative fixed flex items-center justify-between lg:w-[80px] w-[60px]">
                            <div class="wrapper flex gap-[0.5rem] items-center">
                                <img src="{{ asset('file/inggris.png') }}" alt="" class="selectedImg lg:w-5 w-3">
                                <div class="selected lg:text-base text-sm">EN</div>
                                <button class="w-4" ><img src="{{ asset('file/caret.png') }}" alt=""></button>
                            </div>
                              
                           
                            <div class="list hidden bg-white absolute top-[45px] right-2 pointer w-full max-h-[250px] cursor-pointer rounded-xl">
                                <div class="item flex items-center gap-[0.5rem] px-[0.5rem] py-[1rem] hover:bg-slate-200">
                                    <img  src="{{ asset('file/indonesia.png') }}" alt="" class="w-5">
                                    <div class="text lg:text-base text-sm">ID</div>
                                </div>
                                <div class="item flex items-center gap-[0.5rem] px-[0.5rem] py-[1rem] hover:bg-slate-200">
                                    <img  src="{{ asset('file/inggris.png') }}" alt="" class="w-5">
                                    <div class="text lg:text-base text-sm">EN</div>
                                </div>
                                <div class="item flex items-center gap-[0.5rem] px-[0.5rem] py-[1rem] hover:bg-slate-200">
                                    <img  src="{{ asset('file/china.png') }}" alt="" class="w-5">
                                    <div class="text lg:text-base text-sm">CH</div>
                                </div>
                                <div class="item flex items-center gap-[0.5rem] px-[0.5rem] py-[1rem] hover:bg-slate-200">
                                    <img  src="{{ asset('file/japan.png') }}" alt="" class="w-5">
                                    <div class="text lg:text-base text-sm">JP</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:flex md:items-center -z-10 lg:z-20 ml-4 lg:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border  text-sm leading-4 font-medium rounded-md text-black  dark:bg-gray-800 hover:text-secondary dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                   
                                    <x-dropdown-link :href="url('profile.edit2')">
                                        {{ __('Order Control') }}
                                    </x-dropdown-link>
                                   
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    <div class="relative items-center">
                        {{-- <button onclick="login()" class="bg-[#74A512] w-[147px] h-[49px] text-white text-sm max-sm:hidden hover:bg-[#32CD32]">Login</button> --}}
                        <button onclick="menunav()" class="hamburger hidden top-0 float-right w-5 max-sm:block"> <img src="{{ asset('file/hamburger.png') }}" alt=""></button>
                    </div>
                    <script src="{{ asset('file/hamburger.js') }}" type="application/javascript"></script>
                    <script src="{{ asset('file/bahasa.js') }}" type="application/javascript"></script>
                    <script src="{{ asset('file/dropdown.js') }}" type="application/javascript"></script>
                </section>
            </div>
        </nav>
    </header>    


    <x-success-status class="font-bold mb-4 z-50" :status="session('message')" />
        <table class="border-solid border-2 border-black w-full text-center">
            <thead>
                <tr>
                
                    <th class="border-solid border-2 border-black">id</th>
                    <th class="border-solid border-2 border-black">Nama</th>
                    <th class="border-solid border-2 border-black">Nama Makanan</th>
                    <th class="border-solid border-2 border-black">Porsi</th>
                    <th class="border-solid border-2 border-black">Alamat</th>
                    <th class="border-solid border-2 border-black">Jenis Pembayaran</th>
                    <th class="border-solid border-2 border-black">Keterangan</th>
                    <th colspan="2" class="border-solid border-2 border-black text-center">Control</th>

                    
                </tr>
            </thead>
            <tbody class="w-full">
                @forelse ($pesanans as $pesanan)
                <tr>
                    <td class="border-solid border-2 border-black">{{$pesanan->id}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->nama}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->namaMakanan}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->porsi}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->alamat}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->jenisPembayaran}}</td>
                    <td class="border-solid border-2 border-black">{{$pesanan->keterangan}}</td>
                    <td class="text-center">
                        <a href="{{url('/edit-pesanan/'.$pesanan->id)}}" class="bg-green-500 hover:bg-green-400 text-white px-6 rounded-lg">Edit</a>
                    </td>
                    <td class="text-center">
                        {{-- <a href="{{url('/')}}" class="bg-red-500 hover:bg-red-400 text-white px-6 rounded-lg">Delete</a> --}}
                        <form action="{{url('delete-pesanan/'.$pesanan->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="bg-red-500 hover:bg-red-400 text-white px-6 rounded-lg">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No Record Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        

</body>
</html>