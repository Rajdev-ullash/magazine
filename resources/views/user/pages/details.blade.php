<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ideko.netlify.app/single by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 16:20:13 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('user.includes.links')
</head>

<body class="bg-neutral-0 dark:bg-neutral-dark-0">
    @include('user.includes.details-header')
    <div
        class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden">
    </div>

    <!-- Single 1 Section 1 -->
    <section class="relative py-4 lg:py-12">
        <div class="container px-4">
            <div class="flex w-full justify-center item-center mb-16">
                <!-- breadcrumb -->
                <div
                    class="hidden md:flex gap-2.5  justify-start items-center h-12 px-7 py-3.5 bg-neutral-0 dark:bg-neutral-dark-0 rounded-3xl border border-neutral-300 dark:border-neutral-dark-300">
                    <a class='text-neutral-700 dark:text-neutral-dark-700 text-base font-medium  leading-normal'
                        href='index.html'>Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                        class="fill-neutral-700 dark:fill-neutral-dark-700">
                        <path
                            d="M1.52344 11.9961C1.24219 11.9961 0.992188 11.9023 0.804688 11.7148C0.398438 11.3398 0.398438 10.6836 0.804688 10.3086L5.08594 5.99609L0.804688 1.71484C0.398438 1.33984 0.398438 0.683594 0.804688 0.308594C1.17969 -0.0976562 1.83594 -0.0976562 2.21094 0.308594L7.21094 5.30859C7.61719 5.68359 7.61719 6.33984 7.21094 6.71484L2.21094 11.7148C2.02344 11.9023 1.77344 11.9961 1.52344 11.9961Z" />
                    </svg>
                    <a class='text-neutral-700 dark:text-neutral-dark-700 text-base font-medium leading-normal'
                        href='category.html'>Blog</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                        class="fill-neutral-700 dark:fill-neutral-dark-700">
                        <path
                            d="M1.52344 11.9961C1.24219 11.9961 0.992188 11.9023 0.804688 11.7148C0.398438 11.3398 0.398438 10.6836 0.804688 10.3086L5.08594 5.99609L0.804688 1.71484C0.398438 1.33984 0.398438 0.683594 0.804688 0.308594C1.17969 -0.0976562 1.83594 -0.0976562 2.21094 0.308594L7.21094 5.30859C7.61719 5.68359 7.61719 6.33984 7.21094 6.71484L2.21094 11.7148C2.02344 11.9023 1.77344 11.9961 1.52344 11.9961Z" />
                    </svg>
                    <span
                        class="text-neutral-900 dark:text-neutral-dark-950 text-base font-bold leading-snug">{{ $article->title }}
                    </span>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center justify-center text-center">
                <div class="justify-center items-center gap-4 flex flex-col md:flex-row">
                    <a class='inline-flex  px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-300 dark:border-neutral-dark-300 justify-center items-center gap-2.5'
                        href='category.html'>
                        <span
                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">{{ $article->category->name }}</span>
                    </a>
                    <div class="justify-start items-center gap-2 flex">
                        <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                src="{{ asset('user/imgs/avatar/avatar-10.png') }}" /></a>
                        <div class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700"><a
                                href="author.html">{{ $article->writer }}</a> - {{ $article->publish_date }}</div>
                    </div>
                </div>
                <h1
                    class="text-4xl lg:text-6xl font-bold text-neutral-950 dark:text-neutral-dark-950 max-w-5xl leading-snug">
                    {{ $article->title }}
                </h1>
                <p class="text-base md:text-lg font-medium text-neutral-950 dark:text-neutral-dark-950 max-w-3xl">
                    {{ $article->short_description }}</p>
            </div>
        </div>
    </section>
    <!-- Single 1 Section 2 -->
    <section class="relative py-12">
        <div class="container px-4">
            <div class="flex flex-col lg:flex-row justify-between gap-[58px]">
                <div class="post-content max-w-[850px]">
                    <!-- Single Conttent -->

                    <div
                        class="single-content text-base font-medium text-neutral-950 dark:text-neutral-dark-950 leading-relaxed max-w-[850px]">
                        <img src="{{ asset($article->main_image) }}" class="rounded-3xl mb-8" alt="">

                        @php
                            // Split the details content into two parts around the middle
                            $details = html_entity_decode($article->details);
                            $length = strlen($details);
                            $middle = intval($length / 2);

                            // Get the first half and second half of the content
                            $firstHalf = substr($details, 0, $middle);
                            $secondHalf = substr($details, $middle);

                            // Echo the first half of the content
                            echo $firstHalf;

                            // Prepare the image grid
                            $imageGrid = '<div class="grid md:grid-cols-2 gap-4 mt-8">';
                            foreach ($article->images as $image) {
                                $imageGrid .= '<div>';
                                $imageGrid .=
                                    '<img src="' . asset($image->image_path) . '" class="rounded-3xl mb-8" alt="">';
                                $imageGrid .=
                                    '<p class="text-center"><b>' . htmlspecialchars($image->caption) . '</b></p>';
                                $imageGrid .= '</div>';
                            }
                            $imageGrid .= '</div>';

                            // Echo the image grid
                            echo $imageGrid;

                            // Echo the second half of the content
                            echo $secondHalf;
                        @endphp

                    </div>
                    <!-- Single Conttent -->

                    <div
                        class="single-bottom mt-16 py-8 border-t border-neutral-300 dark:border-neutral-dark-300 text-lg font-bold text-neutral-950 dark:text-neutral-dark-950 leading-relaxed max-w-[850px]">
                        <div class="flex flex-col md:flex-row justify-between gap-8">
                            <div>
                                <h6 class="text-lg font-bold mb-4">Popular Tag</h6>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($categories as $category)
                                        <a class='hover-up px-5 py-2 rounded-full border border-neutral-300 dark:border-neutral-dark-300  text-base font-medium hover:bg-neutral-300  hover:dark:bg-neutral-dark-300 transition-all duration-300'
                                            href="{{ url('category/' . $category->id) }}">{{ $category->name }}</a>
                                    @endforeach

                                </div>
                            </div>
                            <div>
                                <h6 class="text-lg font-bold mb-4">Share:</h6>
                                <div class="flex gap-2">
                                    <div
                                        class="size-9 rounded-full flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-neutral-300 dark:hover:bg-neutral-dark-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16"
                                            viewBox="0 0 9 16" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                            <path
                                                d="M8.03125 9H5.6875V16H2.5625V9H0V6.125H2.5625V3.90625C2.5625 1.40625 4.0625 0 6.34375 0C7.4375 0 8.59375 0.21875 8.59375 0.21875V2.6875H7.3125C6.0625 2.6875 5.6875 3.4375 5.6875 4.25V6.125H8.46875L8.03125 9Z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="size-9 rounded-full flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-neutral-300 dark:hover:bg-neutral-dark-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                            viewBox="0 0 17 16" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                            <g clip-path="url(#clip0_191_5465)">
                                                <path
                                                    d="M10.083 6.77491L15.9113 0H14.5302L9.46951 5.88256L5.42755 0H0.765625L6.87786 8.89547L0.765625 16H2.14682L7.49104 9.78782L11.7596 16H16.4216L10.0827 6.77491H10.083ZM8.1913 8.97384L7.57201 8.08805L2.64448 1.03974H4.76591L8.74248 6.72795L9.36178 7.61374L14.5308 15.0075H12.4094L8.1913 8.97418V8.97384Z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div
                                        class="size-9 rounded-full flex justify-center items-center border border-neutral-300 dark:border-neutral-dark-300 cursor-pointer hover-up hover:bg-neutral-300 dark:hover:bg-neutral-dark-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                                            viewBox="0 0 15 14" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                            <path
                                                d="M7.60938 3.39062C9.57812 3.39062 11.2031 5.01562 11.2031 6.98438C11.2031 8.98438 9.57812 10.5781 7.60938 10.5781C5.60938 10.5781 4.01562 8.98438 4.01562 6.98438C4.01562 5.01562 5.60938 3.39062 7.60938 3.39062ZM7.60938 9.32812C8.89062 9.32812 9.92188 8.29688 9.92188 6.98438C9.92188 5.70312 8.89062 4.67188 7.60938 4.67188C6.29688 4.67188 5.26562 5.70312 5.26562 6.98438C5.26562 8.29688 6.32812 9.32812 7.60938 9.32812ZM12.1719 3.26562C12.1719 2.79688 11.7969 2.42188 11.3281 2.42188C10.8594 2.42188 10.4844 2.79688 10.4844 3.26562C10.4844 3.73438 10.8594 4.10938 11.3281 4.10938C11.7969 4.10938 12.1719 3.73438 12.1719 3.26562ZM14.5469 4.10938C14.6094 5.26562 14.6094 8.73438 14.5469 9.89062C14.4844 11.0156 14.2344 11.9844 13.4219 12.8281C12.6094 13.6406 11.6094 13.8906 10.4844 13.9531C9.32812 14.0156 5.85938 14.0156 4.70312 13.9531C3.57812 13.8906 2.60938 13.6406 1.76562 12.8281C0.953125 11.9844 0.703125 11.0156 0.640625 9.89062C0.578125 8.73438 0.578125 5.26562 0.640625 4.10938C0.703125 2.98438 0.953125 1.98438 1.76562 1.17188C2.60938 0.359375 3.57812 0.109375 4.70312 0.046875C5.85938 -0.015625 9.32812 -0.015625 10.4844 0.046875C11.6094 0.109375 12.6094 0.359375 13.4219 1.17188C14.2344 1.98438 14.4844 2.98438 14.5469 4.10938ZM13.0469 11.1094C13.4219 10.2031 13.3281 8.01562 13.3281 6.98438C13.3281 5.98438 13.4219 3.79688 13.0469 2.85938C12.7969 2.26562 12.3281 1.76562 11.7344 1.54688C10.7969 1.17188 8.60938 1.26562 7.60938 1.26562C6.57812 1.26562 4.39062 1.17188 3.48438 1.54688C2.85938 1.79688 2.39062 2.26562 2.14062 2.85938C1.76562 3.79688 1.85938 5.98438 1.85938 6.98438C1.85938 8.01562 1.76562 10.2031 2.14062 11.1094C2.39062 11.7344 2.85938 12.2031 3.48438 12.4531C4.39062 12.8281 6.57812 12.7344 7.60938 12.7344C8.60938 12.7344 10.7969 12.8281 11.7344 12.4531C12.3281 12.2031 12.8281 11.7344 13.0469 11.1094Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Single pagination -->
                    {{-- <div
                        class="relative single-pagination mt-16 p-8 border border-neutral-300 dark:border-neutral-dark-300 rounded-xl text-lg font-bold text-neutral-950 dark:text-neutral-dark-950 leading-relaxed max-w-[850px]">
                        <div class="flex flex-col md:flex-row justify-between gap-8">
                            <div class="prev flex gap-4  hover-up">
                                <a href="#"
                                    class="text-neutral-950 rounded-full w-12 h-12 min-w-12 bg-primary-light-950 dark:bg-primary-dark-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15"
                                        viewBox="0 0 18 15" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                        <path
                                            d="M17.4922 7.49023C17.4922 8.19336 16.9453 8.74023 16.2812 8.74023H4.28906L8.39062 12.8809C8.89844 13.3496 8.89844 14.1699 8.39062 14.6387C8.15625 14.873 7.84375 14.9902 7.53125 14.9902C7.17969 14.9902 6.86719 14.873 6.63281 14.6387L0.382812 8.38867C-0.125 7.91992 -0.125 7.09961 0.382812 6.63086L6.63281 0.380859C7.10156 -0.126953 7.92188 -0.126953 8.39062 0.380859C8.89844 0.849609 8.89844 1.66992 8.39062 2.13867L4.28906 6.24023H16.2812C16.9453 6.24023 17.4922 6.82617 17.4922 7.49023Z" />
                                    </svg>
                                </a>
                                <a href='single.html'>Fashionable Bytes: Blending Style with Tech Savvy</a>
                            </div>
                            <div class="next flex gap-4 text-end hover-up">
                                <a href='single.html'>Living the Art-Tech Dream: My Multifaceted Life</a>
                                <a href="#"
                                    class="text-neutral-950 rounded-full w-12 h-12 min-w-12 bg-primary-light-950  dark:bg-primary-dark-200 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15"
                                        viewBox="0 0 18 15" class="fill-neutral-950 dark:fill-neutral-dark-950">
                                        <path
                                            d="M0 7.49023C0 8.19336 0.546875 8.74023 1.21094 8.74023H13.2031L9.10156 12.8809C8.59375 13.3496 8.59375 14.1699 9.10156 14.6387C9.33594 14.873 9.64844 14.9902 9.96094 14.9902C10.3125 14.9902 10.625 14.873 10.8594 14.6387L17.1094 8.38867C17.6172 7.91992 17.6172 7.09961 17.1094 6.63086L10.8594 0.380859C10.3906 -0.126953 9.57031 -0.126953 9.10156 0.380859C8.59375 0.849609 8.59375 1.66992 9.10156 2.13867L13.2031 6.24023H1.21094C0.546875 6.24023 0 6.82617 0 7.49023Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div
                            class="v-divider w-64 h-[1px] md:h-12 md:w-[1px] bg-neutral-300 dark:bg-neutral-dark-300 absolute top-1/2 left-10 md:left-1/2 md:top-10">
                        </div>
                    </div> --}}
                    <!-- Single Comment form -->
                    <div class="relative single-comment-form mt-20 max-w-[850px]">
                        <h3 class="font-bold text-5xl mb-8 text-neutral-950 dark:text-neutral-dark-950">Leave <span
                                class="font-light"> a reply</span></h3>
                        <form action="#">
                            <div class="grid md:grid-cols-3 gap-4 mb-4 md:mb-0">
                                <input type="text" placeholder="Name" class="input-default">
                                <input type="email" placeholder="Email" class="input-default">
                                <input type="text" placeholder="Subject" class="input-default">
                            </div>
                            <textarea placeholder="Comment" class="textarea-default"></textarea>
                            <div class="flex items-center mb-8">
                                <input type="checkbox" id="save-info"
                                    class="w-4 h-4 accent-primary-light-950  bg-primary-light-950 text-neutral-0  rounded cursor-pointer mr-2">
                                <label for="save-info" class="text-sm text-neutral-950 dark:text-neutral-dark-950">Save
                                    my name, email,
                                    and website in this browser for the next time</label>
                            </div>
                            <button type="submit"
                                class="group btn bg-primary-light-950 dark:bg-primary-dark-950 rounded-full px-8 py-4 text-xl text-neutral-950 dark:text-neutral-dark-950 flex gap-2 items-center">
                                <span>Submit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24"
                                    class="fill-neutral-950 dark:fill-neutral-dark-950 group-hover:translate-x-1 transition-all duration-300">
                                    <g clip-path="url(#clip0_253_4238)">
                                        <path
                                            d="M23.6164 11.0663L14.9491 2.39884C14.7017 2.15143 14.372 2.01562 14.0204 2.01562C13.6684 2.01562 13.3388 2.15162 13.0914 2.39884L12.3045 3.18596C12.0573 3.43298 11.9211 3.76293 11.9211 4.11473C11.9211 4.46634 12.0573 4.80741 12.3045 5.05443L17.3608 10.1219H1.29657C0.572288 10.1219 0 10.6889 0 11.4134V12.5262C0 13.2507 0.572288 13.8748 1.29657 13.8748H17.4182L12.3047 18.9706C12.0575 19.218 11.9213 19.539 11.9213 19.8908C11.9213 20.2422 12.0575 20.5679 12.3047 20.8151L13.0916 21.5997C13.339 21.8471 13.6686 21.9819 14.0206 21.9819C14.3722 21.9819 14.7019 21.8453 14.9493 21.5979L23.6166 12.9307C23.8646 12.6825 24.001 12.3512 24 11.999C24.0008 11.6456 23.8646 11.3141 23.6164 11.0663Z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_253_4238">
                                            <rect width="24" height="24"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- SIDEVER 2 -->
                <div class="sidebar flex flex-col gap-12 md:max-w-[380px]">
                    <!-- Subscrible box -->
                    <div class="subscrible p-12 rounded-3xl bg-neutral-200 dark:bg-neutral-dark-200">
                        <h4 class="mb-4 text-2xl font-bold text-neutral-950 dark:text-neutral-dark-950 ">
                            Subscribe Us
                        </h4>
                        <p class="font-medium text-neutral-700 dark:text-neutral-dark-700 mb-4 lg:mb-8 max-w-[350px]">
                            Get the latest creative news from IDEKO magazine
                        </p>
                        <form class="max-w-full overflow-hidden" action="#">
                            <div
                                class="flex flex-col md:flex-row mb-4 md:bg-neutral-0 dark:bg-neutral-dark-200 border border-neutral-950 dark:border-neutral-700 rounded-xl overflow-hidden">
                                <input
                                    class="focus:outline-none transition duration-200 py-4 bg-neutral-0 dark:bg-neutral-dark-200 rounded-full pl-6 w-full mb-2 md:mb-0"
                                    type="text" placeholder="Your email address">
                                <button
                                    class="group w-full mr-[-3px] sm:w-auto h-14 py-4 px-6 rounded-xl bg-neutral-950 dark:bg-neutral-700 transition duration-200 flex items-center justify-center gap-2"
                                    type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                        viewBox="0 0 18 16" class="fill-primary-light-950 group-hover:fill-neutral-0">
                                        <path
                                            d="M17.6094 9.16992L11.3594 15.4199C11.125 15.6543 10.8125 15.7715 10.5 15.7715C10.1484 15.7715 9.83594 15.6543 9.60156 15.4199C9.09375 14.9512 9.09375 14.1309 9.60156 13.6621L13.7031 9.52148H1.75C1.04688 9.52148 0.5 8.97461 0.5 8.27148C0.5 7.60742 1.04688 7.02148 1.75 7.02148H13.7031L9.60156 2.91992C9.09375 2.45117 9.09375 1.63086 9.60156 1.16211C10.0703 0.654297 10.8906 0.654297 11.3594 1.16211L17.6094 7.41211C18.1172 7.88086 18.1172 8.70117 17.6094 9.16992Z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-neutral-700 text-sm pl-4">* Unsubscribe anytime</p>
                        </form>
                    </div>
                    <!-- Featured box -->
                    <div class="flex flex-col gap-4">
                        <h4 class="text-2xl text-neutral-950 font-bold dark:text-neutral-dark-950">Featured <span
                                class="font-light">Posts</span></h4>

                        <div class="flex flex-col gap-6">
                            @foreach ($featuredArticles as $features)
                                <div class="w-full flex items-center gap-2.5  hover-up">
                                    <div class="justify-start items-center gap-4 inline-flex">
                                        <a class='rounded-2xl overflow-hidden max-h-[90px] max-w-[106px]'
                                            href='single.html'>
                                            <img src="{{ asset($features->thumbnail_image) }}" />
                                        </a>
                                        <div class="flex-col justify-start items-start gap-4 inline-flex">
                                            <h4>
                                                <a class='text-neutral-950 dark:text-neutral-dark-950 text-base font-bold item-link'
                                                    href='{{ URL::to('article/' . $features->slug) }}'>{{ $features->title }}</a>
                                            </h4>
                                            <p
                                                class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                                {{ $features->publish_date }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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
                            @foreach ($categories as $category)
                                <a class='button-7 hover-up'
                                    href="{{ url('category/' . $category->id) }}">{{ $category->name }}</a>
                            @endforeach

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
                </div>
            </div>
        </div>
    </section>
    <!-- Single 1 Section 3 -->
    <section class="relative py-8 lg:py-12 lg:mb-16">
        <div class="container px-4">
            <h3 class="heading-3 text-left mb-8 lg:mb-12 leading-none"><span class="font-light">Related</span> Posts
            </h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[30px]">
                @foreach ($relatedArticles as $relatedArticles)
                    <div
                        class="flex-col justify-start items-start gap-5 inline-flex hover-up border-2 border-neutral-300 dark:border-neutral-dark-300 rounded-3xl overflow-hidden">
                        <a class='rounded-2xl overflow-hidden max-h-[180px]' href='single.html'>
                            <img src="{{ asset($relatedArticles->thumbnail_image) }}" />
                        </a>
                        <div class="flex-col justify-start items-start gap-3.5 flex px-4 pb-4">
                            <div class="justify-start items-center gap-5 inline-flex">
                                <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                    href='category.html'>
                                    <div
                                        class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                        {{ $relatedArticles->category->name }}</div>
                                </a>
                                <div class="justify-start items-center gap-2 flex">
                                    <div
                                        class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                        {{ $relatedArticles->publish_date }}</div>
                                </div>
                            </div>
                            <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-base font-bold leading-snug item-link'
                                    href='{{ URL::to('article/' . $relatedArticles->slug) }}'>{{ $relatedArticles->title }}</a>
                            </h3>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Footer -->

    @include('user.includes.footer')
    <!--Footer-->

    </footer>
    <!--Scripts-->
    @include('user.includes.script')
</body>


<!-- Mirrored from ideko.netlify.app/single by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 16:20:27 GMT -->

</html>
