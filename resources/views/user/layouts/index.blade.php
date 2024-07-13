<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('user.includes.links')
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
                    @yield('slider')
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
                @include('user.includes.feature')
                <!-- SIDEVER -->
                @include('user.includes.sidebar')


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
