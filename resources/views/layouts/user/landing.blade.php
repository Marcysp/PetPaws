@extends('layouts.user.main')
@section('title') Create @endsection
@section('content')
<div class="bg-purple-200">
    <div class="pt-20 items-center md:flex bg-purple-200">
        <div class="md:w-1/2 m-12 p-4 text-center md:text-left">
            <p class="text-purple-900 md:text-xl text-base leading-loose py-5">Welcome to PetPaws</p>
            <h3 class="font-bold md:text-5xl text-3xl text-black">Find the best</h3>
            <h3 class="font-bold md:text-5xl text-3xl text-black">pet service with us.</h3>
            <p class="py-5 text-black md:text-md">Tertarik menjadi member kami?</p>
        </div>
        <div class="grid justify-items-center m-10"><img class="w-3/5 md:w-4/5 justify-items-center" src="{{ asset("assets/img/logo-web/cat(1) 1.png") }}" alt="Cat(1)"></div>
    </div>
    <div class="pt-20 items-center md:flex bg-purple-200 h-screen">
        <div class="grid justify-items-center m-10">
            <img class="w-3/5 md:w-4/5 justify-items-center" src="{{ asset("assets/img/logo-web/5515846-removebg-preview 2.png") }}" alt="Cat(1)">
        </div>
        <div class="md:w-1/2 m-12 p-4 text-center md:text-left h-full">
            <div class="top-0">
                <h3 class="font-semibold md:text-6xl text-4xl text-black">Why Choose Us?</h3>
            </div>

            <p class="text-purple-900 md:text-xl text-base leading-loose py-5">Welcome to PetPaws</p>
        </div>
    </div>
</div>
@endsection
