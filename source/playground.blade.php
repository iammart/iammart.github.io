---
title: Playground
description: A little bit about the site
---
@extends('_layouts.main')

@push('styles')
    <style>
        .group:before {
            content: '';
            background: #fff;
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 50vw;
            z-index: -1;
        }

    </style>
@endpush

@section('body')
    <div class="bg-gray-900 text-gray-100">
        <div class="container mx-auto">

            <div class="gap-8">

                <div class="items-start align-bottom lg:flex">


                    <div class="p-6 lg:w-1/2 lg:p-0 lg:pt-16">

                        <div class="w-3/4">

                            <h1 class="mb-6 lg:mb-16 text-4xl font-extrabold uppercase">{{ $page->title }}</h1>

                        </div>

                        <div class="-mx-2 flex flex-wrap lg:pb-16 pl-0 before:rounded-br lg:pr-16">

                            @foreach ($playground->take(6) as $work)
                                <div class="w-full p-2 lg:w-1/3">
                                    <a href="{{ $work->getUrl() }}" title="{{ $work->name }}" class="block overflow-hidden rounded">
                                        <img src="{{ url($work->image) }}" alt="{{ $work->name }}" class="transform rounded transition duration-150 ease-in-out hover:scale-110">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="group min-h-screen/1 relative z-0 bg-white p-6 lg:pt-16 lg:w-1/2">

                        <div class="mb-6 lg:w-3/4 text-gray-900">
                            <p class="text-lg"><b>Early in my career I spent a lot of time working in Photoshop and Illustrator iterating on designs for company websites, logos, brochures and branding.</b></p>
                            <p>When opportunities today present themselves for me to roll my sleeves up and get bit creative I always jump at the opportunity. Print as medium is great, at the end of the process you generally have something you can touch and feel as result your hard work.</p>
                        </div>

                        <div class="-mx-2 mb-6 flex flex-wrap items-stretch align-top">
                            @foreach ($playground->skip(6) as $work)
                                <div class="-ml-px -mt-px w-1/2 border p-2 lg:w-1/4">
                                    <a href="{{ $work->getUrl() }}" title="{{ $work->name }}" class="block overflow-hidden rounded">
                                        <img src="{{ url($work->image) }}" alt="{{ $work->name }}" class="transform w-full rounded transition duration-150 ease-in-out hover:scale-110">
                                    </a>
                                </div>
                            @endforeach

                            @foreach (range(0, 3 ) as $work)
                                <div class="-ml-px -mt-px flex w-1/2 items-stretch border p-2 lg:w-1/4">
                                    <div class="h-full w-full rounded bg-gray-50">
                                        <img src="/assets/img/placeholder-1x1.png" alt="Placeholder" class="transform w-full rounded transition duration-150 ease-in-out hover:scale-110">
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="mb-6 lg:w-3/4 text-gray-900">

                            <p>These are some examples of bespoke invitations, logos, flyers, posters, cards, stickers and tattoos I have created over the years.</p>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
