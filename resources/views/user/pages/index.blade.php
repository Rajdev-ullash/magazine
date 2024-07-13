@extends('user.layouts.index')

@section('slider')
    @if ($articles_show_home_page->count())
        @php
            $displayed_articles = [];
        @endphp
        @foreach ($articles_show_home_page as $index => $article)
            @if (!in_array($article->id, $displayed_articles))
                @php
                    $displayed_articles[] = $article->id;
                @endphp
                <div class="swiper-slide">
                    <div class="flex flex-col md:grid md:grid-cols-2 md:col-spans-2 lg:grid-cols-4 gap-[30px]">
                        <div class="md:col-span-2">
                            <div
                                class="grid md:grid-cols-2 justify-start items-center gap-4 rounded-3xl overflow-hidden border-2 bg-neutral-950 border-neutral-700 dark:border-neutral-dark-300 hover-up">
                                <a class='rounded-2xl overflow-hidden' href='{{ URL::to('article/' . $article->slug) }}'>
                                    <img class="md:min-h-[340px] w-auto" src="{{ asset($article->thumbnail_image) }}" />
                                </a>
                                <div class="flex flex-col justify-start items-start gap-4 p-8">
                                    <div class="justify-start items-center gap-5 flex">
                                        <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                            href='{{ URL::to('category/' . $article->category->id) }}'>
                                            <div
                                                class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                {{ $article->category->name }}</div>
                                        </a>
                                        <div class="justify-start items-center gap-2 flex">
                                            <a href="author.html" class="w-9 h-9"><img class="w-9 h-9 rounded-3xl"
                                                    src="{{ asset('user/imgs/avatar/avatar-01.png') }}" /></a>
                                            <div
                                                class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-300">
                                                <a href="author.html">{{ $article->writer }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>
                                        <a class='text-neutral-0 dark:text-neutral-dark-950 text-lg font-bold item-link'
                                            href='{{ URL::to('article/' . $article->slug) }}'>{{ $article->title }}</a>
                                    </h4>
                                    <p class="text-neutral-700 text-sm font-medium leading-snug dark:text-neutral-dark-300">
                                        {{ $article->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @php
                            $extra_count = 0;
                        @endphp
                        @foreach ($articles_show_home_page as $extra_index => $extra_article)
                            @if ($extra_article->id != $article->id && !in_array($extra_article->id, $displayed_articles) && $extra_count < 2)
                                @php
                                    $displayed_articles[] = $extra_article->id;
                                    $extra_count++;
                                @endphp
                                <div
                                    class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                    <div class="justify-start items-center gap-4 flex flex-col">
                                        <a class='rounded-[18px] overflow-hidden max-h-[180px]'
                                            href='{{ URL::to('article/' . $extra_article->slug) }}'>
                                            <img src="{{ asset($extra_article->thumbnail_image) }}" />
                                        </a>
                                        <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                            <div class="justify-start items-center gap-2 inline-flex">
                                                <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                    href='{{ URL::to('category/' . $extra_article->category->id) }}'>
                                                    <div
                                                        class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                        {{ $extra_article->category->name }}</div>
                                                </a>
                                                <div class="justify-start items-center gap-2 flex">
                                                    <div
                                                        class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                        {{ $extra_article->publish_date }}</div>
                                                </div>
                                            </div>
                                            <h3 class="text-center md:text-start mb-4 md-mb-0">
                                                <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                    href='{{ URL::to('article/' . $extra_article->slug) }}'>{{ $extra_article->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        @if ($extra_count < 2)
                            @foreach ($articles_show_home_page as $extra_article)
                                @if (!in_array($extra_article->id, $displayed_articles) && $extra_count < 2)
                                    @php
                                        $displayed_articles[] = $extra_article->id;
                                        $extra_count++;
                                    @endphp
                                    <div
                                        class="rounded-3xl bg-neutral-950 border-2 border-neutral-dark-300 dark:border-neutral-dark-300 flex-col justify-start items-start inline-flex overflow-hidden hover-up">
                                        <div class="justify-start items-center gap-4 flex flex-col">
                                            <a class='rounded-[18px] overflow-hidden max-h-[180px]'
                                                href='{{ URL::to('article/' . $extra_article->slug) }}'>
                                                <img src="{{ asset($extra_article->thumbnail_image) }}" />
                                            </a>
                                            <div class="p-4 flex-col gap-4 inline-flex items-center md:items-start">
                                                <div class="justify-start items-center gap-2 inline-flex">
                                                    <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                                                        href='{{ URL::to('category/' . $extra_article->category->id) }}'>
                                                        <div
                                                            class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                                            {{ $extra_article->category->name }}</div>
                                                    </a>
                                                    <div class="justify-start items-center gap-2 flex">
                                                        <div
                                                            class="text-neutral-700 text-sm font-regular leading-none dark:text-neutral-dark-700">
                                                            {{ $extra_article->publish_date }}</div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center md:text-start mb-4 md-mb-0">
                                                    <a class='text-neutral-dark-950 dark:text-neutral-dark-950 text-lg font-bold leading-tight item-link'
                                                        href='{{ URL::to('article/' . $extra_article->slug) }}'>{{ $extra_article->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    @endif
@stop
