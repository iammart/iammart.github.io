---
title: Home
---

@extends('_layouts.main')

@section('body')
    <div class="bg-swiss-coffee-500 flex flex-col items-center overflow-hidden md:min-h-[calc(75vh)]">
        <section class="container flex flex-grow flex-wrap items-end justify-center pt-4 pl-4 pr-4 xl:flex-nowrap xl:px-8">

            <div class="container mb-8 xl:mb-48 xl:w-1/5 xl:text-right">
                <h3 class="font-railway text-5xl font-extrabold">SINCE 2003</h3>
                <p class="text-[#38332d] xl:ml-16">I have close to 20 years experience building and designing in the web space, specialising in web applications utilising APIs using PHP, MySQL, HTML, CSS & JavaScript.</p>
            </div>

            <div class="order-2 w-full md:w-3/5 xl:order-none xl:w-2/5">
                <img src="/assets/img/profile.jpg" alt="" class="w-full">
            </div>

            <div class="mb-16 w-full md:w-2/5 xl:mb-48">

                <ul class="font-railway language-list flex flex-wrap gap-2 text-xs font-bold tracking-widest">
                    <li>PHP</li>
                    <li>MYSQL</li>
                    <li>JAVASCRIPT</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>

                <p class="mt-4 line-through opacity-60">Currently working as a Senior Developer at Createanet</p>
                <p class="mt-4">
                    Want to work with me? Have a project idea to discuss? <br>
                    Feel free to get in touch: <a href="mailto:hello@martdingley.co.uk">hello@martdingley.co.uk</a>
                </p>

                <hr class="full-width border-mojo my-6">

                <p>
                    Check out my
                    <a href="https://www.linkedin.com/in/mart-dingley-68b5831/" target="_blank" class="relative no-underline">
                        <svg viewBox="0 0 924 226" class="relative -top-[1px] inline w-20 align-middle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <g transform="matrix(1,0,0,1,-138.462,-287.425)">
                                <path d="M1048.57,498.296C1048.58,498.296 1048.59,498.296 1048.61,498.296C1050.88,498.296 1052.75,496.427 1052.75,494.156C1052.75,494.076 1052.75,493.997 1052.74,493.917C1052.74,490.812 1050.87,489.328 1047.02,489.328L1040.81,489.328L1040.81,505.588L1043.15,505.588L1043.15,498.5L1046.02,498.5L1046.08,498.586L1050.54,505.588L1053.04,505.588L1048.25,498.341L1048.57,498.296ZM1045.86,496.667L1043.15,496.667L1043.15,491.171L1046.59,491.171C1048.36,491.171 1050.38,491.46 1050.38,493.783C1050.38,496.454 1048.34,496.667 1045.85,496.667M138.462,320.509L172.944,320.509L172.944,446.115L236.783,446.115L236.783,477.937L138.462,477.937L138.462,320.509ZM252.028,371.196L285.155,371.196L285.155,477.878L252.028,477.878L252.028,371.196ZM268.591,318.159C279.132,318.161 287.805,326.835 287.805,337.376C287.805,347.918 279.13,356.593 268.588,356.593C258.046,356.593 249.371,347.918 249.371,337.376C249.371,326.834 258.046,318.159 268.588,318.159C268.589,318.159 268.59,318.159 268.591,318.159M423.728,320.485L456.855,320.485L456.855,414.568L494.399,371.148L535.014,371.148L491.535,420.538L534.099,477.923L492.463,477.923L457.297,425.189L456.862,425.189L456.862,477.916L423.735,477.916L423.728,320.485ZM303.523,371.207L335.335,371.207L335.335,385.786L335.787,385.786C342.252,374.709 354.337,368.07 367.154,368.553C400.747,368.553 406.93,390.655 406.93,419.368L406.93,477.871L373.803,477.871L373.803,426.004C373.803,413.623 373.576,397.708 356.55,397.708C339.331,397.708 336.674,411.19 336.674,425.103L336.674,477.858L303.547,477.858L303.523,371.207Z" style="fill:rgb(10,102,194);fill-rule:nonzero;" />
                                <path d="M604.777,412.129C604.78,411.973 604.782,411.816 604.782,411.66C604.782,400.764 595.816,391.798 584.92,391.798C584.759,391.798 584.599,391.8 584.438,391.804C572.473,391.059 561.971,400.177 561.029,412.129L604.777,412.129ZM632.838,459.403C621.697,472.913 605.047,480.714 587.537,480.629C554.41,480.629 527.888,458.516 527.888,424.275C527.888,390.034 554.407,367.932 587.537,367.932C618.5,367.932 637.917,390.016 637.917,424.275L637.917,434.662L561.029,434.662C562.999,446.786 573.714,455.7 585.994,455.432C595.565,455.372 604.478,450.457 609.635,442.395L632.838,459.403ZM706.966,396.983C690.403,396.983 680.465,408.043 680.465,424.158C680.465,440.273 690.399,451.342 706.966,451.342C723.533,451.342 733.492,440.3 733.492,424.158C733.492,408.015 723.55,396.983 706.966,396.983M763.989,477.858L733.492,477.858L733.492,463.71L733.04,463.71C725.29,474.133 713.094,480.354 700.106,480.508C668.277,480.508 647.31,457.536 647.31,425.051C647.31,395.217 665.865,367.821 696.365,367.821C710.075,367.821 722.881,371.572 730.393,381.969L730.828,381.969L730.828,320.474L763.985,320.474L763.989,477.858ZM987.626,477.92L954.499,477.92L954.499,426.042C954.499,413.671 954.278,397.746 937.27,397.746C920.016,397.746 917.376,411.224 917.376,425.141L917.376,477.916L884.25,477.916L884.25,371.234L916.051,371.234L916.051,385.813L916.497,385.813C922.972,374.742 935.056,368.105 947.874,368.581C981.449,368.581 987.64,390.665 987.64,419.396L987.626,477.92ZM846.872,356.651C846.87,356.651 846.869,356.651 846.868,356.651C836.322,356.651 827.644,347.974 827.644,337.428C827.644,326.882 836.322,318.204 846.868,318.204C857.413,318.204 866.09,326.88 866.092,337.424C866.092,337.425 866.092,337.426 866.092,337.428C866.092,347.972 857.416,356.65 846.872,356.651M863.435,477.92L830.274,477.92L830.274,371.234L863.435,371.234L863.435,477.92ZM1004.14,287.441L813.627,287.441C804.684,287.34 797.239,294.612 797.13,303.555L797.13,494.859C797.235,503.807 804.679,511.087 813.627,510.991L1004.14,510.991C1013.11,511.104 1020.58,503.825 1020.7,494.859L1020.7,303.542C1020.58,294.58 1013.1,287.309 1004.14,287.427M1046.15,482.085C1037.84,482.165 1031.05,489.021 1031.05,497.329C1031.05,505.693 1037.93,512.575 1046.29,512.575C1054.66,512.575 1061.54,505.693 1061.54,497.329C1061.54,489.021 1054.75,482.165 1046.44,482.085L1046.15,482.085M1046.15,510.829C1046.07,510.83 1046,510.831 1045.92,510.831C1038.59,510.831 1032.56,504.797 1032.56,497.463C1032.56,490.13 1038.59,484.095 1045.92,484.095C1053.17,484.095 1059.17,489.992 1059.29,497.24L1059.29,497.465C1059.44,504.638 1053.67,510.667 1046.5,510.822L1046.15,510.822" style="fill:rgb(10,102,194);fill-rule:nonzero;" />
                            </g>
                        </svg>
                    </a>
                    profile for further details.
                </p>

                @include('_partials/socials')

            </div>

        </section>
    </div>

    <section class="bg-mojo py-16 px-4 md:px-0">

        <div class="container mx-auto text-white">

            <h3 class="font-railway mb-8 text-2xl font-bold uppercase xl:text-5xl">Playground</h3>

            <div class="playground-list -m-2 flex flex-wrap items-stretch">
                @foreach ($playground->take(5) as $work)
                    <div class="w-1/2 p-2 md:w-2/6 lg:w-1/6">
                        <a href="{{ $work->getUrl() }}" title="{{ $work->name }}" class="block overflow-hidden rounded">
                            <img src="{{ url($work->image) }}" alt="{{ $work->name }}" class="transform rounded transition duration-150 ease-in-out hover:scale-110">
                        </a>
                    </div>
                @endforeach

                <div class="w-1/2 p-2 md:w-2/6 lg:w-1/6">
                    <a href="/playground" title="{{ $work->name }}" class=" overflow-hidden rounded flex justify-center text-white bg-mojo-600 hover:bg-mojo-700 h-full items-center" ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                          </svg>
                    </a>
                </div>

            </div>

            <!--div class="mt-6 lg:w-1/2">
                    <p>Visit my playground for more examples of print related media I have worked on...</p>
                    <p class="mt-6">
                        <a title=" Playground" href="/playground" class="text-mojo bg-swiss-coffee-400 font-railway inline-block rounded py-2 px-3 text-sm font-bold uppercase tracking-widest no-underline">
                            View More
                        </a>
                    </p>
                </div-->

        </div>
    </section>
@endsection
