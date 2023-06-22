@extends('layouts.user.main')
@section('title') Create @endsection
@section('content')
<div>
    {{-- landingh --}}
    <div class="pt-20 items-center md:flex bg-fuchsia-200">
        <div class="md:w-1/2 m-12 p-4 text-center md:text-left">
            <p class="text-fuchsia-900 md:text-xl text-base leading-loose py-5">Welcome to PetPaws</p>
            <h3 class="font-bold md:text-5xl text-3xl text-black">Find the best</h3>
            <h3 class="font-bold md:text-5xl text-3xl text-black">pet service with us.</h3>
            <p class="py-5 text-black md:text-md">Tertarik menjadi member kami?</p>
        </div>
        <div class="grid justify-items-center m-10"><img class="w-3/5 md:w-4/5 justify-items-center" src="{{ asset("assets/img/logo-web/cat(1) 1.png") }}" alt="Cat(1)"></div>
    </div>
    {{-- profile --}}
    <div id="profile"></div>
    <div class="min-h-screen bg-fuchsia-200 pt-10 pb-6" >
        <div class="w-72 items-center mx-auto text-center border-b-2 pb-2 border-slate-900">
            <span class=" text-5xl font-bold uppercase text-slate-900">Profile</span>
        </div>
        <div class="flex mx-auto justify-center ">
            <div id="default-carousel" class="relative w-[80vh] h-[65vh]" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-[110vh] overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out mb-3" data-carousel-item>
                        <img src="{{asset("assets/img/logo-web/5515846-removebg-preview-1.png")}}" class="absolute block w-auto h-[55vh] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="img">
                        <span class="absolute text-md font-bold w-full -translate-x-1/2 -translate-y-1/2 top-[370px] left-[250px] text-center justify-center mt-1">Grooming Hewan</span>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out mb-3" data-carousel-item>
                        <img src="{{asset('assets/img/logo-web/5515846-removebg-preview-2.png')}}" class="absolute block w-auto h-[60vh] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="img">
                        <span class="absolute  text-md font-bold w-full -translate-x-1/2 -translate-y-1/2 top-[370px] left-[250px] text-center justify-center mt-1">Penitipan Hewan</span>
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
            <div class=" flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img class="w-16" src="{{asset("assets/img/logo-web/clock.png")}}" alt="">
                <div class="justify-center m-auto text-center">
                    <div class="font-bold text-sm"><span>Open:</span></div>
                    <div class="font-bold text-sm"><span>08.00 AM - 20.00 PM</span></div>
                    <div class="font-bold text-sm">EVERYDAY</div>
                </div>
            </div>
            <a href="https://goo.gl/maps/nYKq3Y9eX8FFLChe7">
                <div class="flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-16 " src="{{asset("assets/img/logo-web/placeholder.png")}}" alt="">
                    <div class="justify-center m-auto text-center">
                        <div class="font-bold text-sm"><span>Open:</span></div>
                        <div class="font-bold text-sm"><span>Jl. Soekarno Hatta No.9, Jatimulyo,</span></div>
                        <div class="font-bold text-sm">Malang</div>
                    </div>
                </div>
            </a>
            <div class="flex w-80 py-3 pl-3 bg-white border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img class="w-16" src="{{asset("assets/img/logo-web/phone-call.png")}}" alt="">
                <div class="justify-center m-auto text-center">
                    <div class="font-bold text-sm mb-2"><span>Contact Admin:</span></div>
                    <div class="font-bold m-auto text-sm"><span class="text-center">+62-876-908678</span></div>
                </div>
            </div>
        </div>
    </div>
        {{-- service --}}
    <div class="min-h-screen bg-gradient-to-b from-fuchsia-200 pt-10 pb-6 px-10" id="service">
        <div class="w-fit px-4 items-center mx-auto text-center border-b-2 pb-5 border-slate-900">
            <span class=" text-5xl font-bold uppercase text-slate-900">our service</span>
        </div>
        <div class="md:flex mx-auto my-10">
            <div class="mx-20">
                <a href="/grooming">
                    <div>
                        <img class="max-w-[385px]" src="{{ asset("assets/img/logo-web/beautiful-pet-portrait-small-dog-with-bubbles.jpg") }}" alt="">
                    </div>
                    <div class="bg-cyan-100 pt-4 px-7 max-w-[385px] pb-4">
                        <h3 class="text-center text-2xl font-bold text-slate-900 border-b-[1px] border-slate-900 pb-2">Grooming</h3>
                        <p class="py-3 text-slate-900 font-semibold">Menyediakan layanan seperti memandikan hewan peliharaan, memotong dan membersihkan bulu, memeriksa kuku, telinga serta sebagainya.</p>
                    </div>
                </a>
            </div>
            <div class="mx-20 md:mt-52">
                <div class=" bg-cyan-100 ">
                    <a href="/grooming">
                        <div>
                            <img class="max-w-[385px]" src="{{ asset("assets/img/logo-web/beautiful-pet-portrait-dog-with-juice.jpg") }}" alt="">
                        </div>
                        <div class="bg-cyan-100 pt-4 px-7 max-w-[385px] pb-4">
                            <h3 class="text-center text-2xl font-bold text-slate-900 border-b-[1px] border-slate-900 pb-2">Penitipan</h3>
                            <p class="py-3 text-slate-900 font-semibold">Menyediakan layanan untuk menitipkan hewan peliharaan serta merawatnya selama beberapa hari.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
