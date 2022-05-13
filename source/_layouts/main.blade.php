<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() ?? url() }}"/>
    <meta property="og:image " content="{{ $page->getImage() }}"/>
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    @stack('styles')

</head>

<body class="text-[#38332d] font-sans antialiased bg-white">

    <div class="flex flex-col min-h-screen">

        <nav
            class="lg:flex items-center border-b border-swiss-coffee-600 justify-between bg-[#4db692] md:bg-swiss-coffee-500 ">

            <ul
                class="flex container gap-1 mx-auto items-center justify-between md:justify-start text-sm tracking-widest font-railway font-bold uppercase relative">

                <li class="mr-8 ml-4">
                    <a href="/"
                        class=" text-white rounded-md relative block z-10
                        md:before:absolute md:before:-inset-x-4 md:before:-inset-y-4
                        md:before:z-[-10] md:before:block
                        md:before:w-30 md:before:h-28
                        md:before:rounded-b
                        md:before:bg-[#4db692]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 md:w-24 my-4" viewBox="0 0 442.9 207.9"
                            fill="currentColor">
                            <circle class="cls-1" cx="25.99" cy="129.94" r="25.99" />
                            <path class="cls-1"
                                d="M290.76 285.42A26 26 0 0 1 241.52 297l-.16-.35-23.75-47.47-32 95.9-.17.5a26 26 0 0 1-49.31 0l-.17-.5L84.2 189.69a25.7 25.7 0 0 1-1.34-8.22 26 26 0 0 1 50.65-8.22l.16.49 27.16 81.46L188 173.74l.16-.49a26 26 0 0 1 47.91-3.39l.17.34 51.7 103.4.11.21a25.81 25.81 0 0 1 2.71 11.61ZM268.73 193.29c0-.08-.07-.14-.1-.21a25.69 25.69 0 0 1-2.74-11.61 26 26 0 0 1 49.24-11.61l.17.34 40.18 80.34 24.58-12.29 30.4-15.2L436 210.29l.21-.1a22 22 0 0 1 2.38-1.05 26.08 26.08 0 0 1 17-.52l.5.17a26 26 0 0 1 3.38 47.91l-.34.16-103.4 51.71-.2.1A26 26 0 0 1 320.6 297c-.05-.12-.11-.23-.17-.35"
                                transform="translate(-30.89 -155.48)" />
                        </svg>
                    </a>
                </li>


                <li class="hidden md:block" id="js-nav-menu">
                    <ul
                        class="container flex gap-1 mx-auto items-center text-sm tracking-widest font-railway font-bold uppercase ">
                        <li>
                            <a title="{{ $page->siteName }} About" href="/about"
                                class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/about') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                                About
                            </a>
                        </li>
                        <li>
                            <a title="{{ $page->siteName }} Playground" href="/playground"
                                class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/playground') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                                Playground
                            </a>
                        </li>
                        <li>
                            <a title="{{ $page->siteName }} Bakery" href="/bakery"
                                class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/bakery') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                                Bakery
                            </a>
                        </li>
                        <li>
                            <a title="{{ $page->siteName }} Curriculum Vitae" href="/assets/pdf/martdingley.cv[2022].pdf" target="_blank"
                                class="block text-gray-700 rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 relative">
                                Curriculum Vitae
                            </a>
                        </li>
                        <li>
                            <a title="{{ $page->siteName }} Contact" href="mailto:dingley@gmail.com"
                                class="block text-gray-700 rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400">
                                Contact
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="md:hidden px-4">

                    <button type="button" onclick="navMenu.toggle()"
                        class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">

                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </li>


            </ul>

            <div class="hidden" id="mobile-menu">
                <div class="px-4 pt-2 pb-3 space-y-1">

                        <a title="{{ $page->siteName }} About" href="/about"
                            class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/about') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                            About
                        </a>

                        <a title="{{ $page->siteName }} Playground" href="/playground"
                            class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/playground') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                            Playground
                        </a>

                        <a title="{{ $page->siteName }} Bakery" href="/bakery"
                            class="block rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 {{ $page->isActive('/bakery') ? 'active text-white bg-[#4db692]' : 'text-gray-700' }}">
                            Bakery
                        </a>

                        <a title="{{ $page->siteName }} Curriculum Vitae" href="/assets/pdf/martdingley.cv[2022].pdf" target="_blank"
                            class="block text-gray-700 rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400 relative">
                            Curriculum Vitae
                        </a>

                        <a title="{{ $page->siteName }} Contact" href="mailto:dingley@gmail.com"
                            class="block text-gray-700 rounded py-2 px-3 hover:text-mojo hover:bg-swiss-coffee-400">
                            Contact
                        </a>

                </div>
            </div>


        </nav>

        @yield('body')
        <footer class="border-t ">

            {{-- <div class=" bg-gray-100 border-b">
                <div class="container mx-auto py-8 px-4 md:px-0 text-gray-400 ">
                    <p>Get in touch if we seem like a good fit</p>
                </div>
            </div> --}}

            <ul class="container mx-auto py-8 px-4 md:px-0 items-center gap-2 text-gray-400 text-sm flex relative">

                <li>
                    <a href="/" class="text-gray-200 hover:text-[#4db692]">

                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="w-6 inline"
                            viewBox="0 0 401 401" fill="currentColor">
                            <path
                                d="m450 250.8-96.67 48.34-.2.1a26 26 0 0 1-34.87-11.64 3.59 3.59 0 0 0-.17-.34l-51.7-103.4c0-.08-.07-.14-.1-.21a25.69 25.69 0 0 1-2.74-11.65 26 26 0 0 1 49.24-11.61c.06.11.12.23.17.34l40.18 80.34 24.58-12.28 30.4-15.21 25.52-12.76.21-.1a22 22 0 0 1 2.38-1 25.89 25.89 0 0 1 9.23-1.68 27.09 27.09 0 0 1 4.54.4V75a25 25 0 0 0-20-24.5V50H75a25 25 0 0 0-25 25v175.4a26 26 0 1 1 0 51.17V420h.5A25 25 0 0 0 75 450h345v-.5a25 25 0 0 0 29.5-29.5h.5ZM262.43 302a26 26 0 0 1-23.25-14.37l-.17-.34-23.74-47.48-32 95.9-.17.5a26 26 0 0 1-49.31 0l-.17-.5-51.77-155.45a26 26 0 0 1 49.32-16.44l.16.5 27.16 81.45 27.15-81.45.16-.5a26 26 0 0 1 47.91-3.39l.17.34 51.7 103.4.11.21A26 26 0 0 1 262.43 302Z"
                                transform="translate(-49.5 -49.5)" />
                        </svg>

                    </a>
                </li>

                <li>

                        &copy; Mart Dingley {{ date('Y') }} &bull; Published using
                        <a href="https://jigsaw.tighten.com/" class="underline hover:no-underline">Jigsaw</a> &amp;
                        <a href="https://tailwindcss.com/" class="underline hover:no-underline">Tailwind CSS</a>

                </li>
            </ul>
        </footer>

    </div>

    <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script>

    <script>
        const navMenu = {
            toggle() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
                menu.classList.toggle('lg:block');
            },
        }
    </script>

    @stack('scripts')

</body>

</html>
