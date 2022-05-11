---
title: About
type: profile
---
@extends('_layouts.main')

@section('body')
    <div class="bg-swiss-coffee overflow-hidden pb-16">

        <div class="container mx-auto">

            <div class="max-w-screen-lg">

                <h1 class="my-8 mx-6 md:mx-0 md:my-16 text-4xl font-extrabold uppercase">About Me</h1>

                <div class="gap-6 md:flex">

                    <div class="w-full md:w-1/2">

                        <img src="/assets/img/IMG_5425.jpg" alt="Mart Dingley" class="md:border-r-1 md:border-l-1 mb-6 w-full lg:rounded ">

                    </div>

                    <div class="mx-6 md:mx-0 md:w-1/2">

                        <p class="font-bold text-lg">I worked for almost 17 years for a web marketing company which involved me wearing many boots. I started off in design, then leading the design and finally into a shoe that fit which for me was development.</p>

                        <p>Much of my time was spent creating behind the scene systems to support customers iOS/Android applications. This generally involved the development of both private and public APIs, along with a bespoke content managed systems.</p>

                        <p>Ive been an adopter of Laravel since 5.0 having migrated across from Slim PHP 2.* which we used primarily for lightweight APIs.</p>

                        <p>Its also been fortunate for me to have had experience directly in control of designing for retail shop windows, retail photography, stationary, branding, logos, brochures, websites, games -  My experiences haven't just been limited to just digital.</p>

                        <p>Prior to this I got my foot through the door working a few years for a digital agency in London, partners to the best restaurants in the UK, international hotels &amp; prestigious members clubs, creating online presense.</p>

                        <hr class="full-width border-mojo my-6">

                    </div>

                </div>

                <div class="mt-16 gap-6 md:flex">
                    <div class="mx-6 md:mx-0 md:w-1/2">
                        <h3 class="mb-6 font-sans font-bold uppercase tracking-widest">The Website</h3>
                        <p class="mb-6">This website built primarily in HTML and Markdown. Preprocessed by <a href="https://jigsaw.tighten.com" class="underline">Jigsaw</a> and hosted by <a href="https://github.com" class="underline">Github</a>.</p>
                        <p class="mb-6"><a href="https://jekyllrb.com" class="underline">Jekyll</a> was first choice, but I found often I was having to reach for plugins to fill the gaps that the framework or liquid did not support, im a total noob to Ruby, so it made sense to switch to something im more famililar with that can build static files.</p>
                    </div>

                    <div class="mx-6 md:mx-0 md:w-1/2">

                        {{--
                            <h3 class="mb-6 font-sans font-bold uppercase tracking-widest">Other things...</h3>

                        <p>
                            When im not on a computer I can be found trying to recover years of neglect in the garden. Shredding the tarmac of Torbay running at dawn,
                            walking alone in the woods with a lead but no dog, fighting to be noticed by other vehicles cycling on my bike, chasing the next big ear in my sourdough bread adventures,
                            playing the barista with my sage express, drowning the neighbours in smoke from by wannabee BBQ pit, singing Dean Martin's "That's Amore" while cooking pizza pies on my original 'uuni' oven and last but not least enjoying getting wet in the sea!</p>
                        </p>

                        --}}

                        @include('_partials/socials')

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
