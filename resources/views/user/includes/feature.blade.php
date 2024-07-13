<div class="flex flex-col gap-16">
    <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-x-[30px] gap-y-[65px] max-w-[850px]">
        @foreach ($featuredArticles as $article)
            <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
                <a class='rounded-3xl overflow-hidden max-h-[370px]' href='{{ URL::to('article/' . $article->slug) }}'>
                    <img src="{{ asset($article->thumbnail_image) }}" />
                </a>
                <div class="flex-col justify-start items-start gap-3.5 flex">
                    <div class="justify-start items-center gap-5 inline-flex">
                        <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex'
                            href='{{ URL::to('category/' . $article->category->id) }}'>
                            <div class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">
                                {{ $article->category->name }}</div>
                        </a>
                        <div class="justify-start items-center gap-2 flex">
                            <a href="author.html"><img class="w-9 h-9 rounded-3xl"
                                    src="{{ asset('user/imgs/avatar/avatar-01.png') }}" /></a>
                            <div class="text-neutral-700 text-sm font-medium leading-none dark:text-neutral-dark-700">
                                <a href="author.html">{{ $article->writer }}</a> - {{ $article->publish_date }}
                            </div>
                        </div>
                    </div>
                    <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link'
                            href='{{ URL::to('article/' . $article->slug) }}'>{{ $article->short_description }}</a></h3>
                </div>
            </div>
        @endforeach


    </div>
    <div class="relative">
        <!-- Pagination -->
        <div class="flex items-center justify-start">
            <nav class="flex items-center gap-2" aria-label="Pagination">
                <!-- Previous Page Link -->
                @if ($featuredArticles->onFirstPage())
                    <span
                        class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                            class="fill-neutral-950 dark:fill-neutral-dark-950">
                            <path
                                d="M17.4922 7.49023C17.4922 8.19336 16.9453 8.74023 16.2812 8.74023H4.28906L8.39062 12.8809C8.89844 13.3496 8.89844 14.1699 8.39062 14.6387C8.15625 14.873 7.84375 14.9902 7.53125 14.9902C7.17969 14.9902 6.86719 14.873 6.63281 14.6387L0.382812 8.38867C-0.125 7.91992 -0.125 7.09961 0.382812 6.63086L6.63281 0.380859C7.10156 -0.126953 7.92188 -0.126953 8.39062 0.380859C8.89844 0.849609 8.89844 1.66992 8.39062 2.13867L4.28906 6.24023H16.2812C16.9453 6.24023 17.4922 6.82617 17.4922 7.49023Z" />
                        </svg>
                    </span>
                @else
                    <a href="{{ $featuredArticles->previousPageUrl() }}"
                        class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                            class="fill-neutral-950 dark:fill-neutral-dark-950">
                            <path
                                d="M17.4922 7.49023C17.4922 8.19336 16.9453 8.74023 16.2812 8.74023H4.28906L8.39062 12.8809C8.89844 13.3496 8.89844 14.1699 8.39062 14.6387C8.15625 14.873 7.84375 14.9902 7.53125 14.9902C7.17969 14.9902 6.86719 14.873 6.63281 14.6387L0.382812 8.38867C-0.125 7.91992 -0.125 7.09961 0.382812 6.63086L6.63281 0.380859C7.10156 -0.126953 7.92188 -0.126953 8.39062 0.380859C8.89844 0.849609 8.89844 1.66992 8.39062 2.13867L4.28906 6.24023H16.2812C16.9453 6.24023 17.4922 6.82617 17.4922 7.49023Z" />
                        </svg>
                    </a>
                @endif

                <!-- Pagination Links -->
                @for ($i = 1; $i <= $featuredArticles->lastPage(); $i++)
                    <a href="{{ $featuredArticles->url($i) }}"
                        class="text-xl font-bold 
                    {{ $featuredArticles->currentPage() == $i ? 'text-neutral-950 bg-primary-light-200 hover:bg-primary-light-300 dark:text-neutral-dark-950 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300' : 'text-gray-500' }}
                    rounded-full w-12 h-12 flex items-center justify-center">
                        {{ $i }}
                    </a>
                @endfor

                <!-- Next Page Link -->
                @if ($featuredArticles->hasMorePages())
                    <a href="{{ $featuredArticles->nextPageUrl() }}"
                        class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                            class="fill-neutral-950 dark:fill-neutral-dark-950">
                            <path
                                d="M0 7.49023C0 8.19336 0.546875 8.74023 1.21094 8.74023H13.2031L9.10156 12.8809C8.59375 13.3496 8.59375 14.1699 9.10156 14.6387C9.33594 14.873 9.64844 14.9902 9.96094 14.9902C10.3125 14.9902 10.625 14.873 10.8594 14.6387L17.1094 8.38867C17.6172 7.91992 17.6172 7.09961 17.1094 6.63086L10.8594 0.380859C10.3906 -0.126953 9.57031 -0.126953 9.10156 0.380859C8.59375 0.849609 8.59375 1.66992 9.10156 2.13867L13.2031 6.24023H1.21094C0.546875 6.24023 0 6.82617 0 7.49023Z" />
                        </svg>
                    </a>
                @else
                    <span
                        class="text-neutral-950 rounded-full w-12 h-12 bg-primary-light-200 hover:bg-primary-light-300 dark:bg-primary-dark-200 dark:hover:bg-primary-dark-300 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                            class="fill-neutral-950 dark:fill-neutral-dark-950">
                            <path
                                d="M0 7.49023C0 8.19336 0.546875 8.74023 1.21094 8.74023H13.2031L9.10156 12.8809C8.59375 13.3496 8.59375 14.1699 9.10156 14.6387C9.33594 14.873 9.64844 14.9902 9.96094 14.9902C10.3125 14.9902 10.625 14.873 10.8594 14.6387L17.1094 8.38867C17.6172 7.91992 17.6172 7.09961 17.1094 6.63086L10.8594 0.380859C10.3906 -0.126953 9.57031 -0.126953 9.10156 0.380859C8.59375 0.849609 8.59375 1.66992 9.10156 2.13867L13.2031 6.24023H1.21094C0.546875 6.24023 0 6.82617 0 7.49023Z" />
                        </svg>
                    </span>
                @endif
            </nav>
        </div>
    </div>


</div>
