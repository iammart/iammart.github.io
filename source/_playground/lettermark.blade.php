---
extends: _layouts.playground
title: Domain Lettermark
section: content
image: assets/img/playground/lettermark/martdingley.jpg
url:
featured: 1
---

@extends('_layouts.playground')

@section('content')
    <div class="bg-[#4db692]">

        <div class="h-screen/2 container mx-auto flex justify-center p-16 text-white">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-[400px]" viewBox="0 0 442.9 207.9" fill="currentColor">
                <circle class="cls-1" cx="25.99" cy="129.94" r="25.99"></circle>
                <path class="cls-1" d="M290.76 285.42A26 26 0 0 1 241.52 297l-.16-.35-23.75-47.47-32 95.9-.17.5a26 26 0 0 1-49.31 0l-.17-.5L84.2 189.69a25.7 25.7 0 0 1-1.34-8.22 26 26 0 0 1 50.65-8.22l.16.49 27.16 81.46L188 173.74l.16-.49a26 26 0 0 1 47.91-3.39l.17.34 51.7 103.4.11.21a25.81 25.81 0 0 1 2.71 11.61ZM268.73 193.29c0-.08-.07-.14-.1-.21a25.69 25.69 0 0 1-2.74-11.61 26 26 0 0 1 49.24-11.61l.17.34 40.18 80.34 24.58-12.29 30.4-15.2L436 210.29l.21-.1a22 22 0 0 1 2.38-1.05 26.08 26.08 0 0 1 17-.52l.5.17a26 26 0 0 1 3.38 47.91l-.34.16-103.4 51.71-.2.1A26 26 0 0 1 320.6 297c-.05-.12-.11-.23-.17-.35" transform="translate(-30.89 -155.48)"></path>
            </svg>

        </div>

    </div>

    <div class="bg-white">
        <div class="container mx-auto py-16">

            <div class="flex gap-8">

                <div class="mx-auto px-8 lg:w-1/2">

                    <h1 class="mb-8 text-4xl font-extrabold uppercase">Domain Lettermark</h1>

                    <p>A lettermark is a typography based logo that's comprised of a few letters, usually a company's initials, in my case its my own initials "MD".</p>
                    <p>The website was missing some general branding, some identity that can be used by browsers on desktop and mobile when viewing the website and/or bookmarking.</p>



                    <div class="my-6 flex items-stretch gap-8">
                        <div class="block flex-1 rounded border">
                            <img src="/assets/img/playground/lettermark/martdingley.jpg" alt="Lettermark Outline" class="w-full">
                        </div>

                        <div class="inline-flex h-full w-24 flex-1 items-center justify-between rounded border p-2 text-gray-800">
                            <div class="w-1/2"><img src="/android-chrome-192x192.png" alt=""></div>
                            <div class="flex w-1/2 justify-center align-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" class="my-4 w-16 md:w-24" viewBox="0 0 442.9 207.9" fill="currentColor">
                                    <circle class="cls-1" cx="25.99" cy="129.94" r="25.99"></circle>
                                    <path class="cls-1" d="M290.76 285.42A26 26 0 0 1 241.52 297l-.16-.35-23.75-47.47-32 95.9-.17.5a26 26 0 0 1-49.31 0l-.17-.5L84.2 189.69a25.7 25.7 0 0 1-1.34-8.22 26 26 0 0 1 50.65-8.22l.16.49 27.16 81.46L188 173.74l.16-.49a26 26 0 0 1 47.91-3.39l.17.34 51.7 103.4.11.21a25.81 25.81 0 0 1 2.71 11.61ZM268.73 193.29c0-.08-.07-.14-.1-.21a25.69 25.69 0 0 1-2.74-11.61 26 26 0 0 1 49.24-11.61l.17.34 40.18 80.34 24.58-12.29 30.4-15.2L436 210.29l.21-.1a22 22 0 0 1 2.38-1.05 26.08 26.08 0 0 1 17-.52l.5.17a26 26 0 0 1 3.38 47.91l-.34.16-103.4 51.71-.2.1A26 26 0 0 1 320.6 297c-.05-.12-.11-.23-.17-.35" transform="translate(-30.89 -155.48)"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
