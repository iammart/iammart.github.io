---
extends: _layouts.playground
section: playground
title: Olly Murs
image: assets/img/olly.jpg
---


@extends('_layouts.playground')

@section('content')

    <div class="bg-white">
        <div class="container mx-auto lg:h-screen/1 py-16 gap-8 lg:flex justify-center">
            <div class="border w-1/2 bg-white inline-flex py-16 justify-center">
                <img src="/assets/img/playground/savethedate/willyoung-main.jpg" alt="Will Young" class="">
            </div>
            <div class="border w-1/2 bg-white inline-flex py-16 justify-center">
                <img src="/assets/img/playground/olly/olly.master-0.jpg" alt="Olly Murs" class="">
            </div>
        </div>
    </div>

    {{-- <div class="lg:flex container mx-auto gap-8 lg:py-16">
        <div class="w-full lg:w-2/5 px-4 py-8 ">

            <h1 class="font-extrabold uppercase text-2xl mb-8 lg:text-4xl lg:mb-8">{{ $page->title }}</h1>

            <p>My partners parents, John & Lesley had been experimenting with homebrewing. Specifically white wine. They had
                planned to distribute a batch of wines over Christmas to their friendship circle in Northampton as a gift.
            </p>

        </div>

        <div class="w-full lg:w-3/5">
            <div class="container mx-auto">
                <div class="lg:h-screen/2 flex gap-2 ">
                    <div class="lg:w-1/2 bg-[#29292b] inline-flex items-center  justify-center">
                        <img src="/assets/img/playground/tipple/XMAS_TIPPLE-1.jpg" alt="Christmas Tipple - Final Grey"
                            class="h-4/5">
                    </div>
                    <div class="lg:w-1/2 bg-[#d36b41] inline-flex items-center justify-center">
                        <img src="/assets/img/playground/tipple/XMAS_TIPPLE-2.jpg" alt="Christmas Tipple - Final Red"
                            class="h-4/5">
                    </div>
                </div>

        </div>
    </div> --}}
@endsection