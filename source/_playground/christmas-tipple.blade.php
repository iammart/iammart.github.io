---
extends: _layouts.playground
section: playground
title: Christmas Tipple
image: assets/img/xmas-tipple.png
url: christmas-tipple
featured: 06
---

@extends('_layouts.playground')

@section('content')
    <div class="bg-[#4db692]">
        <div class="lg:h-screen/1 container mx-auto justify-center lg:flex">
            <img src="/assets/img/playground/christmas-tipple/cover-alt.jpg" alt="{{ $page->title }}" class="mx-auto">
        </div>
    </div>

    <div class="container mx-auto gap-8 lg:flex lg:py-16">
        <div class="w-full px-4 py-8 lg:w-2/5">

            <h1 class="mb-8 text-2xl font-extrabold uppercase lg:mb-8 lg:text-4xl">{{ $page->title }}</h1>

            <p>My partners parents, John & Lesley had been experimenting with homebrewing. Specifically white wine. They had
                planned to distribute a batch of wines over Christmas to their friendship circle in Northampton as a gift.
            </p>

            <p>I took this an opportunity to have some fun creating graphics for a label suitable for applying to recycled
                bottles of wine.</p>

            <p>Ray from <a href="https://www.partingtonprint.co.uk/" target="_blank">Partington Print</a> in Paignton
                printed a short run of around 30 of both red and black colour ways onto a matte sticker ready for
                application.</p>

            <div>
                <ul class="my-6 grid grid-cols-2 gap-4">
                    <li><img src="/assets/img/playground/christmas-tipple/john-lesley.jpg" alt=""></li>
                    <li><img src="/assets/img/playground/christmas-tipple/corner-focal.jpg" alt=""></li>
                </ul>
            </div>

        </div>

        <div class="w-full lg:w-3/5">
            <div class="container mx-auto">
                <div class="lg:h-screen/2 flex gap-2">
                    <div class="inline-flex items-center justify-center bg-[#29292b] lg:w-1/2">
                        <img src="/assets/img/playground/christmas-tipple/XMAS_TIPPLE-1.jpg" alt="Christmas Tipple - Final Grey" class="h-4/5">
                    </div>
                    <div class="inline-flex items-center justify-center bg-[#d36b41] lg:w-1/2">
                        <img src="/assets/img/playground/christmas-tipple/XMAS_TIPPLE-2.jpg" alt="Christmas Tipple - Final Red" class="h-4/5">
                    </div>
                </div>

            </div>


            <div class="mt-2 flex gap-2">
                <div class="w-1/2 md:w-1/6"><img src="/assets/img/playground/christmas-tipple/others/beige-01.png" alt="Christmas Tipple - Beige"></div>
                <div class="w-1/2 md:w-1/6"><img src="/assets/img/playground/christmas-tipple/others/black-01.png" alt="Christmas Tipple - White"></div>
                <div class="w-1/2 md:w-1/6"><img src="/assets/img/playground/christmas-tipple/others/duck-01.png" alt="Christmas Tipple - Duckegg"></div>
                <div class="w-1/2 md:w-1/6"><img src="/assets/img/playground/christmas-tipple/others/duck_vanilla-01.png" alt="Christmas Tipple - Vanilla"></div>

                <div class="w-1/2 border bg-white opacity-30 md:w-1/6"></div>
                <div class="w-1/2 border bg-white opacity-30 md:w-1/6"></div>
            </div>

        </div>
    </div>
@endsection
