---
extends: _layouts.playground
section: content
image: assets/img/playground/badgers/badgerlovers-7.png
url:
title: Badger Lovers
---

@extends('_layouts.playground')

@section('content')
    <div class="bg-black text-white">
        <div class="container mx-auto grid grid-cols-2">
            <div class="flex items-center ">
                <img src="/assets/img/playground/badgers/badgerlovers-7.png" alt="" loading="lazy" class="w-full rounded">
            </div>

            <div class="md:p-16">

                <div class="lg:w-3/4">
                    <h1 class="mb-8 text-4xl font-extrabold uppercase">{{ $page->title }}</h1>

                    <p class="text-xl"><b>"Badger Lovers" is something that originated within our circle of friends, which describes how we feel after over indulging on alcohol. The dry, grubby feeling in your mouth left after a nights heavy drinking. Embraced.</b></p>


                </div>

                <ul class="bg-red container mt-6 grid grid-cols-4 -mx-2">
                    @foreach (range(1, 6) as $idx)
                        <li class="bg-black">
                            <div class="border-swiss-coffee-600 border  p-2  -ml-px -mt-px">
                                <img src="/assets/img/playground/badgers/badgerlovers-0{{ $idx }}.png" alt="{{ $page->title }} {{ $idx }}" loading="lazy" class="rounded bg-white">
                            </div>
                        </li>
                    @endforeach
                </ul>


                <div class="lg:w-3/4 mt-6">

                    <p>We were travelling down to Newquay for the weekend for a firends stag party, the plan was for the group to get a tattoo on a "cheek". Prior to the visit I had dome some rough designs and booked the sessions with <a href="https://www.dnatattoo.co.uk" target="_blank">DNA Tattoo Studio</a>. </p>
                    <p>On the day there was only three of us that went ahead with the ink, the stag himself sadly declined.</p>

                </div>

            </div>
        </div>
    </div>
@endsection
