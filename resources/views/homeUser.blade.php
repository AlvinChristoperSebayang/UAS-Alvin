<x-app-layout>
    <div class="container mx-auto pt-20 flex lg:justify-center justify-center">
        <div>
            <h2 class="text-center lg:text-base text-sm pb-5">Company Partner</h2>
            <img class="" src="{{ asset('file/partner.svg') }}" alt="">
        </div>
    </div>
    
    <div class="container mx-auto  pt-[140px]">
        <div class="grid lg:grid-cols-2 lg:grid-rows-1 grid-cols-1 grid-rows-2">
            <div class="makan flex bg-[#EAF9CE] w-[375px] h-[200px] lg:w-[620px] lg:h-[230px] items-center">
                <img class="w-[137px] h-[100px] lg:w-[252px] lg:h-[215px]" src="{{ asset('file/fastfood.svg') }}" alt="">
                <div class="pl-2 text-left">
                    <h2 class="font-bold lg:text-xl text-sm">Fast Food</h2>
                    <p class="lg:text-base text-xs">Lörem ipsum nyn fahasm. Jyr epiception tavis. Berade pubel. Nysm anasilår dera jerat. </p>
                    <button class="w-[120px] h-[39px] lg:w-[133px] lg:h-[49px] bg-[#74A512] text-white mt-[45px]">Shop Now</button>
                </div>
            </div>
            <div class="makan flex bg-[#FFF7E2] w-[375px] h-[200px] lg:w-[620px] lg:h-[230px] items-center">
                <img class="w-[200px] h-[100px] lg:w-[252px] lg:h-[215px]" src="{{ asset('file/organicfood.svg') }}" alt="">
                <div class="pl-2 text-left">
                    <h2 class="font-bold lg:text-xl text-sm">Organic Food</h2>
                    <p class="text-xl ">Lörem ipsum nyn fahasm. Jyr epiception tavis. Berade pubel. Nysm anasilår dera jerat. </p>
                    <button class="w-[120px] h-[39px] lg:w-[133px] lg:h-[49px] bg-[#74A512] text-white mt-[45px] ">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto pt-28">
        <div class="flex justify-between">
            <div>
                <p class="text-[#FF9900] lg:text-lg text-sm">About Us</p>
                <h2 class="font-bold lg:text-4xl text-2xl pt-5">MangResto</h2>
                <p class="lg:w-[590px] w-[150px] pt-7 lg:text-base text-xs">we are a fast food company and we make everyone enjoy any food we serve them because we serve the best for them all.</p>
                <button class="w-[120px] h-[39px] lg:w-[133px] lg:h-[49px] bg-[#74A512] text-white mt-[45px] ">Shop Now</button>
            </div>
            <img class="max-sm:w-[205px]" src="{{ asset('file/burger2.svg') }}" alt="">
        </div>
    </div>
    <div class="container mx-auto pt-28">
        <div class="flex justify-between">
            <div>
                <h2 class="font-bold lg:text-3xl text-xl ">Food MangResto</h2>
                <p class="text-[#74A512] lg:text-base text-sm pt-[16px]">Best Food</p>
            </div>
            <div class="items-center lg:w-[400px] w-[150px]">
                <p class="lg:text-base text-xs">This is the most popular food that is often bought by some people, cheap and very healthy for you</p>
            </div>
        </div>
        <div>
            <div class="flex justify-center gap-5 pt-10 text-base">
                <button class="hover:text-[#74A512] hover:border-b-2 hover:border-[#74A512] lg:text-base text-sm">All Product</button>
                <button class="hover:text-[#74A512] hover:border-b-2 hover:border-[#74A512] lg:text-base text-sm " >Fast Food</button>
                <button class="hover:text-[#74A512] hover:border-b-2 hover:border-[#74A512] lg:text-base text-sm">Healthy Food</button>
            </div>
            <div id="jualan" class="grid lg:grid-cols-4 lg:grid-row-2 grid-cols-2 pt-16 gap-5">
                <div class="makan">
                    <img class="w-full" src="{{ asset('file/produk1.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Cucumber</h2>
                        </div>
                        <div class="flex">
                            <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                                  
                            </div>

                            <p class="font-bold">$ 25</p>
                        </div>
                </div>


                <div class="makan" >
                    <img class="w-full" src="{{ asset('file/produk2.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Swede</h2>
                        </div>
                        <div class="flex">
                            <img class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 32</p>
                        </div>
                </div>

                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk3.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Chinese cinnamon</h2>
                        </div>
                        <div class="flex">
                            <img class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 35</p>
                        </div>
                </div>

                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk4.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Pepper (C. annuum)</h2>
                        </div>
                        <div class="flex">
                            <img class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 35</p>
                        </div>
                </div>



                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk1.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Cucumber</h2>
                        </div>
                        <div class="flex">
                            <img class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 38</p>
                        </div>
                </div>


                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk2.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Swede</h2>
                        </div>
                        <div class="flex">
                            <img class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 40</p>
                        </div>
                </div>

                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk3.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Chinese cinnamon</h2>
                        </div>
                        <div class="flex">
                            <img  class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 30</p>
                        </div>
                </div>


                <div  class="makan">
                    <img class="w-full" src="{{ asset('file/produk4.svg') }}" alt="">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl">Pepper (C. annuum)</h2>
                        </div>
                        <div class="flex">
                            <img  class="w-4" src="{{ asset('file/star.svg') }}" alt="">
                            <p>(2.1)</p>
                        </div>
                    </div>
                        <p>Lörem ipsum nyn fahasm. Jyr epiception tavis.</p>
                        <div class="flex justify-between pt-7">
                            <div class="flex">
                                <img src="{{ asset('file/add.svg') }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 pl-2 cursor-pointer hover:fill-red-700 hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                            </div>
                            <p class="font-bold">$ 25</p>
                        </div>
                       
                </div>
            </div>
            <div class="flex justify-center pt-10">
                <button class="w-[133px] h-[49px] bg-[#74A512] text-white">View More</button>
            </div>
        </div>

    </div>
    <div class="container mx-auto lg:pt-28 lg:p-10 p-5 bg-[#FFF7E2] relative mt-36 ">
        <div class="flex justify-between lg:pl-20 pl-0">
            <div>
                <p class="text-[#FF9900] lg:text-base text-sm">Healty Food</p>
                <h2 class="font-bold lg:text-4xl pt-5 lg:w-[400px] w-[120px] ">Healthy And you Can Enjoy in The Morning</h2>
                <p class="lg:w-[400px] w-[150px] pt-7 lg:text-base text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam. </p>
                <button class="lg:w-[133px] lg:h-[49px]  w-[100px] h-[39px] bg-[#74A512] text-white mt-[45px] ">Shop Now</button>
            </div>
            <img src="{{ asset('file/kentang.svg') }}" alt="" class=" lg:w-[680px] w-[230px] absolute lg:right-10 right-0 top-20 ">
        </div>
    </div>

    <footer class=" p-16 max-sm:p-10 mt-36 bg-[#1F2F00] w-full">

        <div class="grid grid-cols-1 grid-rows-1">
            <div class="flex flex-col lg:flex-row justify-center gap-6 text-white h-30">

                <div>
                    <div class="flex gap-3 align-center items-center mb-10">
                        <img src="{{ asset('file/Logo.svg') }}" alt="">
                        <h1 class="font-bold lg:text-xl text-lg">MangResto</h1>
                    </div>
                    <p class="font-normal text-sm max-sm:text-xm text-white w-72">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam. 
                    </p>
                    <div class="pt-20">
                       <p class="text-sm">Mangcoding. All Rights Reserved</p> 
                    </div>
                </div>

                <div>
                    <h1 class="font-bold text-sm max-sm:text-lg mb-6 ">Navigation</h1>
                    <ul class="max-sm:flex max-sm:gap-3 max-sm:w-5 text-white list-none max-sm:text-xs">
                        <li class=""><a href="">Homee</a></li>
                        <li><a href="">About</a></li>   
                        <li><a href="">Shop</a></li>   
                        <li><a href="">Contact</a></li>
                        <li><a href="">Blog</a></li> 
                    </ul>
                    <!-- <p class="w-5 text-neutral-600">Home About Services Blog Work Resource Contact</p> -->

                </div>

                <div class=" text-white">
                    <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white ">Our Product</h1>
                    <p class="w-36 text-white">Healty Food <br> Fast Food 
                      </p>
                    </div>

                <div class="">
                    <h1 class="font-bold text-sm max-sm:text-lg mb-6 text-white ">Form Member</h1>
                    <p class="w-36 text-white"> Sign in <br> Support
                      </p>
                    </div>
                <div>
                    <h1 class="font-bold text-sm max-sm:text-lg mb-6 ">Address</h1>
                    <div class="flex gap-4 items-center mb-4">
                        <img class="" src="{{ asset('file/lokasi.svg') }}" alt="">
                        <p class="text-white w-72">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>

                    <div class="flex gap-4 items-center mb-4">
                        <img src="{{ asset('file/email.svg') }}" alt="">
                        <p class="w-40 text-white">hallo@mangresto123@gmail.com</p>
                    </div>
                    <div class="flex text-white mt-20 font-normal text-sm justify-around gap-5"  >
                        <h1 class="lg:block hidden">(021) 678-9102</h1>
                        <h1 class="lg:block hidden">Privacy Policy</h1>
                        <h1 class="lg:block hidden">Merchan Agreement</h1>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center lg:hidden block pb-20">
            <div>
                <h3 class="text-white text-xs">© 2022 Mangcoding. All rights
                    reserved.</h3>
            </div>
            </div>
        </div>
    </footer>
</x-app-layout>