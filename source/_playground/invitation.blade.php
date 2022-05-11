---
extends: _layouts.playground
section: playground
image: assets/img/invitation.png
title: Flyer - 70th Birthday Invitation
featured: true
description: The invitation was another excuse to have some fun in Illustrator and organise a short run of 100 flyers for my partners dads 70th Birthday Party
---

@extends('_layouts.playground')

@section('content')
    <div class="bg-[#373535]">
        <div class="container mx-auto lg:h-screen/1 lg:flex justify-center md:p-16 xl:p-32">
            <div><img src="/assets/img/playground/invitation/flyer-proof__front.jpg" alt="{{ $page->title }}"
                    class="h-full"></div>
            <div><img src="/assets/img/playground/invitation/flyer-proof__back.jpg" alt="{{ $page->title }}"
                    class=" h-full"></div>
        </div>
    </div>


    <div class="container mx-auto py-16">

        <div class="px-8 lg:w-1/2 mx-auto">

            <h1 class="font-extrabold uppercase text-4xl mb-8">{{ $page->title }}</h1>

            <p>The invitation was another excuse to have some fun in Illustrator and organise a short run of 100 flyers for
                my partners dads 70th Birthday Party.</p>

            <p>The brief was open, I only requested that I was sent over all the information they wanted on the invitation
                in a word document. It was requested that rather than gifts, a donation could be made via a <a href="https://www.justgiving.com/fundraising/johnchadwick70" target="_blank">JustGiving</a> page, which would go towards raising money for the British Heart Foundation.</p>

            <div style="width: 100vw; margin-left: calc(50% - 50vw);" class="bg-white lg:p-16 lg:my-8 px-8 py-4 ">
                <ul class="flex flex-wrap lg:flex-nowrap mb-4 justify-center -mx-4">

                    @foreach (range(1, 6) as $idx)
                        <li class="w-1/2 md:w-1/3 p-4">
                            <div class="border border-swiss-coffee-600 rounded p-4">
                                <img src="/assets/img/playground/invitation/other/__{{ $idx }}.jpg" alt="" loading="lazy"
                                    class="rounded">
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

            <p>We did run through several iterations of colour pallets before finalising on what was largely inspired by
                Johnny's supported Rugby Team, the <a href="https://www.northamptonsaints.co.uk/"
                    target="_blank">Northampton Saints.</a></p>

        </div>

    </div>
@endsection
