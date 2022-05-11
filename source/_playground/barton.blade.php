---
extends: _layouts.playground
section: content
image: assets/img/playground/barton/cpl-barton.jpg
title: Barton
---

@extends('_layouts.playground')

@section('content')
    <div class="bg-white py-16 min-h-screen/1">

        <div class="bg-white  bg-repeat-x" style="background-image: url(/assets/img/playground/barton/tile.jpg); background-size: 100% 100%">

        <div class=" container mx-auto flex justify-center text-white" >

            <img src="/assets/img/playground/barton/page.jpg" alt="{{ $page->title }}" class="mx-auto">

        </div>

    </div>

    </div>
@endsection
