@extends('_layouts.main')

@section('body')
    <main class="w-full project bg-swiss-coffee relative">

        <h1 class="hidden">{{ $page->title }}</h1>

        @yield('content')

    </main>

    {{--
    <nav class=" text-sm md:text-base flex justify-center border-t bg-gray-200 py-6 gap-6">
        <div>
            @if ($previous = $page->getPrevious() )
                <a href="{{ $previous->getUrl() }}" title="{{ $previous->title }}"
                    class=" inline-flex bg-white items-center justify-center w-8 h-8 border border-gray-100 rounded ">
                    &leftarrow;
                </a>
                @else
                <a class="inline-flex bg-white items-center justify-center  w-8 h-8  border border-gray-100 rounded">&leftarrow;</a>
            @endif
        </div>

        <div>
            @if ($next = $page->getNext() )
                <a href="{{ $next->getUrl() }}" title="{{ $next->title }}"
                    class="inline-flex bg-white items-center justify-center  w-8 h-8 border border-gray-100 rounded  ">
                    &rightarrow;
                </a>
            @else
                <a class="inline-flex bg-white items-center justify-center  w-8 h-8   border border-gray-100  rounded ">&rightarrow;</a>
            @endif
        </div>
    </nav>
    --}}
@endsection
