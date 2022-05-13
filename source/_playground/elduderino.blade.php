---
section: content
title: El Duderino
image: assets/img/playground/elduderino/thumb.jpg
featured: 10
description: Inspiration from the cult classic 'The Big Lebowski' with Jeff Bridges and his bowling opponent 'Jesus Quintana'
---

@extends('_layouts.playground')

@section('content')
    <div class="md:h-screen/1 flex items-center justify-center bg-[#5ccdcf]">
        <img src="/assets/img/playground/elduderino/poster.jpg" alt="{{ $page->title }}" class="max-h-full object-contain">
    </div>

    <div class="bg-white">
        <div class="container mx-auto py-16">
            <div>
                <div class="mx-auto px-8 lg:w-1/2">
                    <h1 class="mb-8 text-2xl font-extrabold uppercase lg:mb-8 lg:text-4xl">{{ $page->title }}</h1>
                    <p>This was a sketch I did for friend which borrows inspiration from the cult classic <b>'The Big Lebowski'</b> with Jeff Bridges and his bowling opponent <b>'Jesus Quintana'</b>.</p>
                    <p>Artwork is vector and digitised in Adobe Illustrator in 2022 from an A3 scan I originally sketched in 2004.</p>
                </div>
                <img src="/assets/img/playground/elduderino/poster__outline.jpg" alt="{{ $page->title }}" class="mx-auto mt-8 h-auto border-y md:max-w-4xl">
            </div>
        </div>
    </div>
@endsection
