---
title: The Bakery
description: The journey into bread making started at the Riverford Field Kitchen, May 2019.
---
@extends('_layouts.main')

@section('body')
    <div class="bg-swiss-coffee text-gray-100">

        <div class="container mx-auto">

            <div class="gap-8">

                <div class="items-stretch align-bottom lg:flex">

                    <div class="min-h-screen/2 pt-8 md:pt-16 bakery__jumbo relative z-0 p-6 bg-cover bg-center bg-no-repeat lg:w-1/2 lg:p-0 lg:pt-16">
                        <div class="w-3/4">
                            <h1 class="mb-6 text-4xl font-extrabold uppercase lg:mb-16">{{ $page->title }}</h1>
                        </div>
                    </div>

                    <div class="p-8 text-gray-900 lg:w-1/2 lg:p-16">

                        <div class="mb-6 lg:w-3/4">
                            <p class="text-lg"><b>I started my journey into bread making at the <a href="https://fieldkitchen.riverford.co.uk/mevents/advanced-sourdough-baking-workshop" class="underline hover:no-underline">Riverford Field Kitchen</a>, May 2019.</b></p>
                            <p>After taking the course I was sent home with a pot of Peggy, which was to be my own sourdough starter culture to continue baking at home...I managed to kill her within a few months. Riverford were kind enough to supply with another starter, and this one ive been feeding for 3 years and has been the starter for some of my best bakes.</p>
                        </div>

                        <div class="-mx-2 mb-6 flex flex-wrap items-stretch align-top">
                            @foreach ($bakery as $bread)
                                <div class="-ml-px -mt-px w-1/3 border border-transparent lg:w-1/6">
                                    <a href="/assets/img/bakery{{ url($page->bakeryImageFromFile($bread->thumb)) }}" target="_blank" title="{{ $bread->thumb }}" class="block overflow-hidden rounded">
                                        <img src="{{ url("/assets/img/bakery/thumbs/{$bread->thumb}") }}" alt="{{ $bread->thumb }}" class="transform w-full rounded transition duration-150 ease-in-out hover:scale-110">
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="mb-6 text-gray-900 lg:w-3/4">
                            <p>I play with all kinds inclusions, some of which are rolled and others are incorporated through lamination. oats, poppy seeds, sweetcorn, seaseame, chia, cheese, garlic and onion.</p>
                            <p>I've now been consistently baking on average 1-2 loafs a week for myself, friends and family.</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
