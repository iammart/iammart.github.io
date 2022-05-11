---
section: content
image: assets/img/1_QLOJOWLgMLReWWEvVEm0iA.jpg
title: Future Publishing
description: Four page tutorial for .netmag (Issue 185) giving details to developers on how they may design and build an interactive map programmed with ActionScript
---

@extends('_layouts.playground')

@push('styles')
    <style>
        .group:before {
            content: '';
            background: #007E90;
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 50vw;
            z-index: -1;
        }


        img {
            height: inherit;
            width: auto;
        }

    </style>
@endpush

@section('content')
    <div class="bg-white">
        <div class="min-h-screen/2 container container mx-auto lg:flex justify-center">
            <div class="group z-0 lg:w-1/2 xl:w-35 bg-[#007E90]">
                <img src="/assets/img/playground/netmag/magazine-fold.jpg" alt="Netmag" class="mx-auto h-full object-contain">
            </div>
            <div class="lg:w-1/2 xl:w-2/5 p-8 lg:p-16">
                <h1 class="mb-8 text-4xl font-extrabold uppercase">{{ $page->title }}</h1>
                <p>Future publishing offered me the opportunity to contribute a four page tutorial to .netmag (Issue 185) giving details to developers on how they may design and build an interactive map programmed with ActionScript.</p>
                <blockquote class="my-6 border-[#007E90]">
                    <p>Show off all the places you've visited with an interactive Flash-enabled map. Designer Martin Dingley (www.soapslurp.co.uk) explains how to go about it</p>
                    <cite>
                        <b>.net</b>/technique/flash
                    </cite>
                </blockquote>
                <p>The article attempts to cover subjects such as dynamically loading data through external XML files, listening and attaching events, iterating over data array objects.</p>
                <p>I stopped developing applications and portfolios using ActionScript in 2014. Inevitably, Adobe blocked Flash content from running in Flash Player beginning January 12, 2021.</p>
            </div>
        </div>
    </div>
@endsection
