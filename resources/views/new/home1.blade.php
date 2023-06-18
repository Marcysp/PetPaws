@extends('new.template2')
@section('content')
<div class="min-h-screen bg-fuchsia-300 pt-10">
    <div class="w-52 items-center mx-auto text-center">
        <span class=" text-4xl font-bold">Profile</span>
        <hr class="mt-2 border-black">
    </div>
    <div class="flex mx-auto justify-center ">
        <div id="default-carousel" class="relative w-[50vh] " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[100vh] overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('img/other/kucing1.png')}}" class="absolute block h-[45vh] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <span class="absolute text-md font-bold w-full -translate-x-1/2 -translate-y-1/2 top-[370px] left-[280px]">Grooming Hewan</span>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('img/other/kucing2.png')}}" class="absolute block w-full h-[45vh] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <span class="absolute  text-md font-bold w-full -translate-x-1/2 -translate-y-1/2 top-[370px] left-[290px]">Penitipan Hewan</span>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-[350px] left-0 z-30 flex items-center justify-center h-fit px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-[350px] right-0 z-30 flex items-center justify-center h-fit px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="text-md mt-16 w-[500px] font-semibold text-center ">
            <p>PetPaws merupakan salah satu e-commerce yang menyediakan beberapa layanan seperti layanan penitipan hewan peliharaan, layanan grooming dan menjual berbagai produkmakanan hewan. Layanan yang kami berikan kepada hewan peliharaan anda sudah terjamin higenis. Anda juga dapat melihat dan mengawal bagaimana cara kerja kami, sehingga tidak perlu khawatir. Jika tertarik dengan pelayanan kami anda bisa menghubuingi kami pada kontak yang tersedia dan membuat janji, anda tidak perlu repot repot menngatri pada store office kami jarena jadwal pasti teratur</p>
        </div>
    </div>
    <div class="flex flex-cols mb-20 gap-5 my-20 justify-center mx-auto">
        <div class="block flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img class="w-20" src="{{asset('img/other/timer.png')}}" alt="">
            <div class="justify-center m-auto text-center">
                <div class="font-bold text-sm"><span>Open:</span></div>
                <div class="font-bold text-sm"><span>08.00 AM - 20.00 PM</span></div>
                <div class="font-bold text-sm">EVERYDAY</div>
            </div>
        </div>
        <div class="block flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img class="w-20" src="{{asset('img/other/location.png')}}" alt="">
            <div class="justify-center m-auto text-center">
                <div class="font-bold text-sm"><span>Open:</span></div>
                <div class="font-bold text-sm"><span>Jl. Soekarno Hatta No. 18,</span></div>
                <div class="font-bold text-sm">Malang</div>
            </div>
        </div>
        <div class="block flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img class="w-20" src="{{asset('img/other/call.png')}}" alt="">
                <div class="font-bold m-auto text-sm"><span class="text-center">+62-876-908678</span></div>
        </div>
    </div>
</div>
@endsection
