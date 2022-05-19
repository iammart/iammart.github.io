---
extends: _layouts.playground
section: content
image: assets/img/playground/bumble/bubble.jpg
title: Bumble Bee
---

@extends('_layouts.playground')

@section('content')

<div class="bg-white">
    <div class="flex items-center bg-[#f5c833] h-screen/1">
        <img src="/assets/img/playground/bumble/poster.jpg" alt="{{ $page->title }}" class="mx-auto">
    </div>

    {{-- <div class="container mx-auto">
        <div class="lg:flex w-full ">
            <div class="lg:w-1/2 text-right p-8">
                <img src="/assets/img/playground/bumble/process.gif" alt="" class="inline">
            </div>
            <div class="lg:w-1/2 p-8">
                <h2>{{ $page->title }}</h2>
                <p class="mb-4">What started out as a sketch on scrap bit of paper become a fun exetrsise </p>
            </div>

        </div>
    </div> --}}
</div>

@endsection