<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IDEKO - Personal Blog TailwindCSS Template</title>
    <link rel="icon" href="{{ asset('user/imgs/template/favicon.svg') }}" type="image/svg+xml" />
    <script src="{{ asset('user/js/vendors/color-modes.js') }}"></script>
    <link rel="preconnect" href="https://fonts.bunny.net/">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user/css/vendors/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/vendors/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/vendors/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/vendors/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
</head>

<body class="bg-neutral-0 dark:bg-neutral-dark-0">
    @include('user.includes.header')

    <!--Hero 2 -->
    <div
        class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1760px] md:h-[1300px] lg:h-[900px] lg:max-h-[960px] overflow-hidden bg-neutral-950 block">
    </div>

    <section class="relative pt-20 lg:pt-24">
        <div class="container px-4">
            <h1 class="heading-2 text-neutral-dark-950 text-center">We are Ideko, <span class="font-light">where we
                    showcase our thoughts, stories, and ideas.</span></h1>
        </div>
    </section>

    <!-- Header section -->
    <section class="py-16">
        <div class="container px-4">
            <div class="swiper-container post-slider-1">
                <div class="swiper-wrapper pt-4">
                    <div class="swiper-slide">
                        <div class="flex flex-col md:grid md:grid-cols-2 md:col-spans-2 lg:grid-cols-4 gap-[30px]">
                            <div class="md:col-span-2">
                                <div
                                    class="grid md:grid-cols-2 justify-start items-center gap-4 rounded-3xl overflow-hidden border-2 bg-neutral-950 border-neutral-700 dark:border-neutral-dark-300 hover-up">
                                    <a class='rounded-2xl overflow-hidden' href='single.html'>
                                        <img class="md:min-h-[340px] w-auto"
                                            src="{{ asset('user/imgs/pages/img-18.png') }}" />
                                    </a>
                                    <div class="flex flex-col justify-start items-start gap-4 p-8">
                                        <div class="justify-start items-center gap-5 flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Lifestyle</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <a href="author.html" class="w-9 h-9"><img class="w-9 h-9 rounded-3xl"
                                                        src="{{ asset('user/imgs/avatar/avatar-01.png') }}" /></a>
                                                <div
                                                    class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-300">
                                                    <a href="author.html">Rose M.</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class='text-neutral-0 dark:text-neutral-dark-950 text-lg font-bold item-link'
                                                href='single.html'>Fashionable Bytes: Blending Style with Tech
                                                Savvy</a>
                                        </h4>
                                        <p
                                            class="text-neutral-700 text-sm font-medium leading-snug dark:text-neutral-dark-300">
                                            Fecessitatibus maiores aut quo repellat dolore dolor. Ipsam iusto sit illo
                                            enim officia soluta qui.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                <div class="justify-start items-center gap-4 flex flex-col">
                                    <a class='rounded-[18px] overflow-hidden max-h-[180px]' href='single.html'>
                                        <img src="{{ asset('user/imgs/pages/img-02.png') }}" />
                                    </a>
                                    <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                        <div class="justify-start items-center gap-2 inline-flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Technology</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <div
                                                    class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                    26 Jan 2024</div>
                                            </div>
                                        </div>
                                        <h3 class="text-center md:text-start mb-4 md-mb-0">
                                            <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                href='single.html'>Canvas and Keyboard: An Art-Tech Affair</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                <div class="justify-start items-center gap-4 flex flex-col">
                                    <a class='rounded-[18px] overflow-hidden max-h-[180px]' href='single.html'>
                                        <img src="{{ asset('user/imgs/pages/img-04.png') }}" />
                                    </a>
                                    <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                        <div class="justify-start items-center gap-2 inline-flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Technology</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <div
                                                    class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                    26 Jan 2024</div>
                                            </div>
                                        </div>
                                        <h3 class="text-center md:text-start mb-4 md-mb-0">
                                            <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                href='single.html'>Navigating Life's Tapestry: My Lifestyle
                                                Chronicle</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col md:grid md:grid-cols-2 md:col-spans-2 lg:grid-cols-4 gap-[30px]">
                            <div class="md:col-span-2">
                                <div
                                    class="grid md:grid-cols-2 justify-start items-center gap-4 rounded-3xl overflow-hidden bg-neutral-950 border-2 border-neutral-700 dark:border-neutral-dark-300 hover-up">
                                    <a class='rounded-2xl overflow-hidden' href='single.html'>
                                        <img class="md:min-h-[340px] w-auto"
                                            src="{{ asset('user/imgs/pages/img-19.png') }}" />
                                    </a>
                                    <div class="flex flex-col justify-start items-start gap-4 p-8">
                                        <div class="justify-start items-center gap-5 flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Lifestyle</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <a href="author.html" class="w-9 h-9"><img
                                                        class="w-9 h-9 rounded-3xl"
                                                        src="{{ asset('user/imgs/avatar/avatar-01.png') }}" /></a>
                                                <div
                                                    class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-300">
                                                    <a href="author.html">Rose M.</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4>
                                            <a class='text-neutral-0 dark:text-neutral-dark-950 text-lg font-bold item-link'
                                                href='single.html'>Innovation in Space Exploration: New Frontiers
                                                Await</a>
                                        </h4>
                                        <p
                                            class="text-neutral-700 text-sm font-medium leading-snug dark:text-neutral-dark-300">
                                            Fecessitatibus maiores aut quo repellat dolore dolor. Ipsam iusto sit illo
                                            enim officia soluta qui.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                <div class="justify-start items-center gap-4 flex flex-col">
                                    <a class='rounded-[18px] overflow-hidden max-h-[180px]' href='single.html'>
                                        <img src="{{ asset('user/imgs/pages/img-03.png') }}" />
                                    </a>
                                    <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                        <div class="justify-start items-center gap-2 inline-flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Technology</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <div
                                                    class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                    26 Jan 2024</div>
                                            </div>
                                        </div>
                                        <h3 class="text-center md:text-start mb-4 md-mb-0">
                                            <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                href='single.html'>The Impact of Social Media on Society</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                <div class="justify-start items-center gap-4 flex flex-col">
                                    <a class='rounded-[18px] overflow-hidden max-h-[180px]' href='single.html'>
                                        <img src="{{ asset('user/imgs/pages/img-05.png') }}" />
                                    </a>
                                    <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                        <div class="justify-start items-center gap-2 inline-flex">
                                            <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                href='category.html'>
                                                <div
                                                    class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                    Technology</div>
                                            </a>
                                            <div class="justify-start items-center gap-2 flex">
                                                <div
                                                    class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                    26 Jan 2024</div>
                                            </div>
                                        </div>
                                        <h3 class="text-center md:text-start mb-4 md-mb-0">
                                            <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                href='single.html'>Diversity in Cinema: Representations in Film</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-8 flex justify-center">
                <div class="swiper-pagination dark"></div>
            </div>
        </div>
    </section>


    <!--Home 3 Section 1 -->
    <section class="relative pt-20 py-10 lg:pt-28 lg:pb-12">
        <div class="container px-4">
            <div class="flex flex-col lg:flex-row justify-between mb-16">
                <h3 class="heading-2 text-left mb-4 lg:mb-0"><span class="font-light">Featured </span> Posts</h3>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-[58px]">
                <div class="flex flex-col gap-16">
                    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-x-[30px] gap-y-[65px] max-w-[850px]">
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-06.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Trending</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-01.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Wildlife Conservation: Preserving Biodiversity</a></h3>
                            </div>
                        </div>
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-07.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Fashion</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-05.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Fashion Beyond Borders: Cultural Influences on Style</a>
                                </h3>
                            </div>
                        </div>
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-08.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Business</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-06.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Health Tech Revolution: The Impact of Wearables</a></h3>
                            </div>
                        </div>
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-09.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Education</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-02.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Sustainable Living: Tips for a Greener Tomorrow</a></h3>
                            </div>
                        </div>
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-10.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Travel</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-03.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Globetrotting in Style: A Journey Through My Lens</a></h3>
                            </div>
                        </div>
                        <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                            <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                                <img src="{{ asset('user/imgs/pages/img-11.png') }}" />
                            </a>
                            <div class="flex-col justify-start items-start gap-3.5 flex">
                                <div class="justify-start items-center gap-5 inline-flex">
                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                        href='category.html'>
                                        <div
                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                            Science</div>
                                    </a>
                                    <div class="justify-start items-center gap-2 flex">
                                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                                src="{{ asset('user/imgs/avatar/avatar-04.png') }}" /></a>
                                        <div
                                            class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                            <a href="author.html">John Wick</a> - June 8, 2024
                                        </div>
                                    </div>
                                </div>
                                <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                                        href='single.html'>Trends to Watch: Fashion Forecast for the Next Season</a>
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="relative">
                        <!-- pagination -->
                        <div class="flex items-center justify-start">
                            <nav class="flex items-center gap-2" aria-label="Pagination">
                                <a href="#"
                                    class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15"
                                        viewBox="0 0 18 15" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                        <path
                                            d="M17.4922 7.49023C17.4922 8.19336 16.9453 8.74023 16.2812 8.74023H4.28906L8.39062 12.8809C8.89844 13.3496 8.89844 14.1699 8.39062 14.6387C8.15625 14.873 7.84375 14.9902 7.53125 14.9902C7.17969 14.9902 6.86719 14.873 6.63281 14.6387L0.382812 8.38867C-0.125 7.91992 -0.125 7.09961 0.382812 6.63086L6.63281 0.380859C7.10156 -0.126953 7.92188 -0.126953 8.39062 0.380859C8.89844 0.849609 8.89844 1.66992 8.39062 2.13867L4.28906 6.24023H16.2812C16.9453 6.24023 17.4922 6.82617 17.4922 7.49023Z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="active text-xl font-bold text-neutral-950 bg-primary-light-950 dark:text-neutral-dark-950 dark:bg-primary-dark-950 rounded-full w-12 h-12 flex items-center justify-center">1</a>
                                <a href="#"
                                    class="text-xl font-bold text-neutral-950 rounded-full bg-primary-light-200 hover:bg-primary-light-300 dark:text-neutral-dark-950 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 w-12 h-12 flex items-center justify-center">2</a>
                                <a href="#"
                                    class="text-xl font-bold text-neutral-950 rounded-full bg-primary-light-200 hover:bg-primary-light-300 dark:text-neutral-dark-950 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 w-12 h-12 flex items-center justify-center">3</a>
                                <a href="#"
                                    class="text-xl font-bold text-neutral-950 rounded-full bg-primary-light-200 hover:bg-primary-light-300 dark:text-neutral-dark-950 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 w-12 h-12 flex items-center justify-center">4</a>
                                <a href="#"
                                    class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300  flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15"
                                        viewBox="0 0 18 15" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                        <path
                                            d="M0 7.49023C0 8.19336 0.546875 8.74023 1.21094 8.74023H13.2031L9.10156 12.8809C8.59375 13.3496 8.59375 14.1699 9.10156 14.6387C9.33594 14.873 9.64844 14.9902 9.96094 14.9902C10.3125 14.9902 10.625 14.873 10.8594 14.6387L17.1094 8.38867C17.6172 7.91992 17.6172 7.09961 17.1094 6.63086L10.8594 0.380859C10.3906 -0.126953 9.57031 -0.126953 9.10156 0.380859C8.59375 0.849609 8.59375 1.66992 9.10156 2.13867L13.2031 6.24023H1.21094C0.546875 6.24023 0 6.82617 0 7.49023Z" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- SIDEVER -->
                <div class="sidebar flex flex-col gap-12 md:max-w-[380px]">
                    <!-- about box -->
                    <div class="about p-12 rounded-3xl bg-primary-light-300 dark:bg-primary-dark-300">
                        <h1 class="mb-8">
                            <a href='index.html'>
                                <img src="{{ asset('user/imgs/template/logo.svg') }}" alt="logo"
                                    class="flex-shrink-0 relative dark:hidden">
                                <img src="{{ asset('user/imgs/template/logo-white.svg') }}" alt="logo"
                                    class="flex-shrink-0 relative hidden dark:inline-block">
                            </a>
                        </h1>
                        <p class="font-medium text-neutral-950 dark:text-neutral-dark-950 mb-8 lg:mb-12 max-w-[350px]">
                            It involves entrepreneurship, management, marketing, finance, and many other aspects.
                            Businesses aim to generate
                        </p>
                        <div class="flex gap-2">
                            <div
                                class="w-12 h-12 rounded-[5px] flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-primary-light-200 dark:hover:bg-primary-dark-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16"
                                    viewBox="0 0 9 16" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                    <path
                                        d="M8.03125 9H5.6875V16H2.5625V9H0V6.125H2.5625V3.90625C2.5625 1.40625 4.0625 0 6.34375 0C7.4375 0 8.59375 0.21875 8.59375 0.21875V2.6875H7.3125C6.0625 2.6875 5.6875 3.4375 5.6875 4.25V6.125H8.46875L8.03125 9Z" />
                                </svg>
                            </div>
                            <div
                                class="w-12 h-12 rounded-[5px] flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-primary-light-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                    viewBox="0 0 17 16" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                    <g clip-path="url(#clip0_191_5465)">
                                        <path
                                            d="M10.083 6.77491L15.9113 0H14.5302L9.46951 5.88256L5.42755 0H0.765625L6.87786 8.89547L0.765625 16H2.14682L7.49104 9.78782L11.7596 16H16.4216L10.0827 6.77491H10.083ZM8.1913 8.97384L7.57201 8.08805L2.64448 1.03974H4.76591L8.74248 6.72795L9.36178 7.61374L14.5308 15.0075H12.4094L8.1913 8.97418V8.97384Z" />
                                    </g>
                                </svg>
                            </div>
                            <div
                                class="w-12 h-12 rounded-[5px] flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-primary-light-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                    viewBox="0 0 15 14" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                    <path
                                        d="M7.60938 3.39062C9.57812 3.39062 11.2031 5.01562 11.2031 6.98438C11.2031 8.98438 9.57812 10.5781 7.60938 10.5781C5.60938 10.5781 4.01562 8.98438 4.01562 6.98438C4.01562 5.01562 5.60938 3.39062 7.60938 3.39062ZM7.60938 9.32812C8.89062 9.32812 9.92188 8.29688 9.92188 6.98438C9.92188 5.70312 8.89062 4.67188 7.60938 4.67188C6.29688 4.67188 5.26562 5.70312 5.26562 6.98438C5.26562 8.29688 6.32812 9.32812 7.60938 9.32812ZM12.1719 3.26562C12.1719 2.79688 11.7969 2.42188 11.3281 2.42188C10.8594 2.42188 10.4844 2.79688 10.4844 3.26562C10.4844 3.73438 10.8594 4.10938 11.3281 4.10938C11.7969 4.10938 12.1719 3.73438 12.1719 3.26562ZM14.5469 4.10938C14.6094 5.26562 14.6094 8.73438 14.5469 9.89062C14.4844 11.0156 14.2344 11.9844 13.4219 12.8281C12.6094 13.6406 11.6094 13.8906 10.4844 13.9531C9.32812 14.0156 5.85938 14.0156 4.70312 13.9531C3.57812 13.8906 2.60938 13.6406 1.76562 12.8281C0.953125 11.9844 0.703125 11.0156 0.640625 9.89062C0.578125 8.73438 0.578125 5.26562 0.640625 4.10938C0.703125 2.98438 0.953125 1.98438 1.76562 1.17188C2.60938 0.359375 3.57812 0.109375 4.70312 0.046875C5.85938 -0.015625 9.32812 -0.015625 10.4844 0.046875C11.6094 0.109375 12.6094 0.359375 13.4219 1.17188C14.2344 1.98438 14.4844 2.98438 14.5469 4.10938ZM13.0469 11.1094C13.4219 10.2031 13.3281 8.01562 13.3281 6.98438C13.3281 5.98438 13.4219 3.79688 13.0469 2.85938C12.7969 2.26562 12.3281 1.76562 11.7344 1.54688C10.7969 1.17188 8.60938 1.26562 7.60938 1.26562C6.57812 1.26562 4.39062 1.17188 3.48438 1.54688C2.85938 1.79688 2.39062 2.26562 2.14062 2.85938C1.76562 3.79688 1.85938 5.98438 1.85938 6.98438C1.85938 8.01562 1.76562 10.2031 2.14062 11.1094C2.39062 11.7344 2.85938 12.2031 3.48438 12.4531C4.39062 12.8281 6.57812 12.7344 7.60938 12.7344C8.60938 12.7344 10.7969 12.8281 11.7344 12.4531C12.3281 12.2031 12.8281 11.7344 13.0469 11.1094Z" />
                                </svg>
                            </div>
                        </div>
                    </div>


                    <!-- Category box -->
                    <div class="flex flex-col gap-4">
                        <h4 class="text-2xl text-neutral-950 dark:text-neutral-dark-950 font-bold">Explore <span
                                class="font-light">Categories</span></h4>
                        <div class="justify-start items-start gap-2 inline-flex flex-wrap">
                            <a class='button-7 hover-up' href='category.html'>Art</a>
                            <a class='button-7 hover-up' href='category.html'>Fashion</a>
                            <a class='button-7 hover-up' href='category.html'>Health</a>
                            <a class='button-7 hover-up' href='category.html'>Food</a>
                            <a class='button-7 hover-up' href='category.html'>Travel</a>
                            <a class='button-7 hover-up' href='category.html'>Technology</a>
                            <a class='button-7 hover-up' href='category.html'>Sports</a>
                        </div>
                    </div>

                    <!-- Banner box -->
                    <div class="flex flex-col gap-4">
                        <h4 class="text-2xl text-neutral-950 font-bold dark:text-neutral-dark-950">Sponsored <span
                                class="font-light">Ads</span></h4>
                        <div class="w-72 h-96 relative rounded-2xl">
                            <img class="w-72 h-96 left-0 top-0 absolute rounded-2xl"
                                src="{{ asset('user/imgs/pages/banner1.png') }}" />
                            <div
                                class="w-72 h-96 left-0 bottom-0 absolute bg-gradient-to-t from-neutral-950/50 to-transparent rounded-2xl">
                            </div>
                            <div class="w-full px-8 bottom-12 absolute text-center">
                                <span class="text-xl text-neutral-0 font-bold">
                                    <span class="font-light">It seeks to inspire and</span> motivate individuals
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h4 class="text-2xl text-neutral-950 font-bold dark:text-neutral-dark-950">Sponsored <span
                                class="font-light">Ads</span></h4>
                        <div class="w-72 h-96 relative rounded-2xl">
                            <img class="w-72 h-96 left-0 top-0 absolute rounded-2xl"
                                src="{{ asset('user/imgs/pages/banner1.png') }}" />
                            <div
                                class="w-72 h-96 left-0 bottom-0 absolute bg-gradient-to-t from-neutral-950/50 to-transparent rounded-2xl">
                            </div>
                            <div class="w-full px-8 bottom-12 absolute text-center">
                                <span class="text-xl text-neutral-0 font-bold">
                                    <span class="font-light">It seeks to inspire and</span> motivate individuals
                                </span>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <!-- Home 3 Section 3-->
    <section class="relative md:pb-12 lg:pt-12 lg:pb-32">
        <div class="container px-4">


            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[65px]">
                <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                    <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                        <img src="{{ asset('user/imgs/pages/img-06.png') }}" />
                    </a>

                </div>
                <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                    <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                        <img src="{{ asset('user/imgs/pages/img-07.png') }}" />
                    </a>

                </div>
                <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                    <a class='rounded-3xl overflow-hidden max-h-[370px]' href='single.html'>
                        <img src="{{ asset('user/imgs/pages/img-08.png') }}" />
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('user.includes.footer')
    <!--Scripts-->
    @include('user.includes.script')
</body>

</html>