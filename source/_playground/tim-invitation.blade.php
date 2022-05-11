---
extends: _layouts.playground
section: content
image: assets/img/playground/tim-invitation/thumb.jpg
title: 60th Birthday Invitation
featured: 1
---

@extends('_layouts.playground')

@push('styles')
    <style>
        .group:before {
            content: '';
            background: #fff5cd;
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            width: 50vw;
            z-index: -1;
        }


        img {
            height: inherit;
            width: auto;
        }

        /*

        .print {
            position: relative;
            z-index: 0;
        }

        .print:before,
        .print:after {
            position: absolute;
            content: '';
            border: solid fff;
            z-index: -1;
        }

        .print:before {
            top: -32px;
            bottom: -32px;
            left: 16px;
            right: 16px;
            border-width: 0 1px;
        }

        .print:after {
            left: -32px;
            right: -32px;
            top: 16px;
            bottom: 16px;
            border-width: 1px 0;
        }
        */

    </style>
@endpush

@section('content')
    <div class="bg-[#59513e]">
        <div class="md:h-screen/1 container mx-auto justify-center p-8 md:gap-16 md:p-16 lg:flex">

            <div class="print">
                <img src="/assets/img/playground/tim-invitation/flyer-proof__front.jpg" alt="{{ $page->title }}" class="h-full w-full md:w-auto">
            </div>
            <div class="print hidden md:block">
                <img src="/assets/img/playground/tim-invitation/flyer-proof__back.jpg" alt="{{ $page->title }}" class="h-full w-full md:w-auto">
            </div>

        </div>
    </div>

    <div class="overflow-hidden bg-white">
        <div class="container mx-auto justify-center gap-8 lg:flex">
            <div class="group relative z-0 flex w-full items-center justify-center bg-[#fff5cd]">
                <img src="/assets/img/playground/tim-invitation/thumb.jpg" alt="" class="w-full">
            </div>
            <div class="w-full p-8 md:p-16">
                <h1 class="mb-8 text-4xl font-extrabold uppercase">{{ $page->title }}</h1>

                <p>A personal invitation for a family members 60th Birthday party.</p>

                <p>As a frequent visitor to the Levellers "Beautiful Days" festivals, and avid listener to folk rock, the theme was inspired around this, carnivals and generally outdoors in Devon.</p>

                <div class="my-6 flex gap-4">
                    <img src="/assets/img/playground/tim-invitation/focus-1.jpg" alt="" class="w-1/3 rounded">
                    <img src="/assets/img/playground/tim-invitation/focus-2.jpg" alt="" class="w-1/3 rounded">
                    <div class="w-1/3 border"></div>
                </div>

                <p>Within the design are included elements from the events, crowds, campers, big top tents, main stage, helter skelter, Escot House, rolling hills.</p>

                <p>Ray from <a href="https://www.partingtonprint.co.uk/" target="_blank">Partington Print</a> in Paignton will be printing a run of around 60-100 for the event.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia similique quisquam nesciunt quo soluta eum magnam eveniet ipsa illum earum! Accusantium laborum voluptate suscipit maiores tenetur. Est, consequuntur! Quis, officia.</p>

            </div>
        </div>
    </div>
@endsection
