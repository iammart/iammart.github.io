---
section: content
title: Pickastar
image: assets/img/pickastar.png
featured: 08
---

@extends('_layouts.playground')

@section('content')
    <div class="md:h-screen/2 flex items-center justify-center bg-[#000112]">
        <img src="/assets/img/playground/pickastar/logo_3.png" alt="{{ $page->title }}" class="max-h-full object-contain">
    </div>

    <div class="p-8">

        <section class="contact-content container mx-auto">

            <div class="flex gap-8">

                <div class="bg-black text-center">
                    <img src="/assets/img/playground/pickastar/logo_1.png" alt="{{ $page->title }}">
                </div>

                <div class="bg-white text-center">
                    <img src="/assets/img/playground/pickastar/logo_2.png" alt="{{ $page->title }}">
                </div>

                <div class="bg-black text-center">
                    <img src="/assets/img/playground/pickastar/logo_3.png" alt="{{ $page->title }}" class="mx-auto">
                </div>


                <div class="bg-[#21b1d6] text-center">
                    <img src="/assets/img/playground/pickastar/logo_4.png" alt="{{ $page->title }}" class="mx-auto">
                </div>

                <div class="bg-[#f654a2] text-center">
                    <img src="/assets/img/playground/pickastar/logo_5.png" alt="{{ $page->title }}" class="mx-auto">
                </div>

            </div>

        </section>





    </div>

    <div class="bg-white">
        <div class="container mx-auto py-16">
            <div class="">
                <div class="px-8 lg:w-1/2 mx-auto">
                    <h1 class="mb-8 text-2xl font-extrabold uppercase lg:mb-8 lg:text-4xl">{{ $page->title }}</h1>

                    <p>I was contracted to develop an identify for a new startup which was to provide a platform for mobile masseuses to easily connect and facilitate appointments.</p>
                    <p>The initial design brief was described as wanting a GTA Vice City vibe, there were further developments moving away from this theme explored below.</p>
                    {{-- <p>The solution will consist of two main elements, firstly a web administration area which will enable the business to approve masseuses and manage their online profile. Secondly, the solution will provide a mobile platform for anyone seeking a massage to easily connect to masseuses in their immediate area.</p> --}}

                </div>
            </div>

            <div class="flex flex-wrap  mt-8">

                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-01.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>

                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-02.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>

                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-03.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>


                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-04.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>

                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-05.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>

                <div class="bg-black text-center w-2/6">
                    <img src="/assets/img/playground/pickastar/variants/pickastar-logo-06.jpg" alt="{{ $page->title }} Variation" class="border rounded">
                </div>

            </div>

        </div>


    </div>
@endsection
