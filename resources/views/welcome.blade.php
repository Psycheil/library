@extends('layouts.app')

@section('hide_topbar')
1
@endsection

@section('main_class', '!py-0')
@section('container_class', '!w-full !max-w-none !mx-0')

@section('content')
    <div class="min-h-screen bg-[#efefe3]">
        <div class="mx-auto max-w-[1220px] px-6 py-7 lg:px-10">
            @include('partials.bookworld-header')

            <section class="mt-12 grid items-center gap-10 lg:mt-20 lg:grid-cols-2">
                <div class="max-w-[520px]">
                    <p class="mb-6 flex items-center gap-2 text-lg text-[#1b1b1b]">
                        <span class="text-yellow-500">&#9733;</span>
                        Start your reading journey today
                    </p>

                    <h1 class="text-[58px] font-medium leading-[1.06] text-[#141414] sm:text-[74px]">
                        Where every page is a new Adventure
                    </h1>

                    <p class="mt-6 max-w-[470px] text-lg leading-8 text-[#2f2f2f]">
                        From classics to contemporary, our bookstore offers a wide selection of books to suit every
                        taste and interest. Start exploring our shelves today and uncover your next literary gem.
                    </p>

                    <button class="mt-7 inline-flex items-center gap-3 rounded-full border-2 border-black px-8 py-4 text-lg font-medium text-[#1a1a1a]">
                        <svg viewBox="0 0 24 24" class="h-5 w-5 fill-none stroke-black stroke-2">
                            <circle cx="11" cy="11" r="7"></circle>
                            <line x1="16.65" y1="16.65" x2="21" y2="21"></line>
                        </svg>
                        Search Books
                    </button>
                </div>

                <div class="relative mx-auto w-full max-w-[620px]">
                    <svg viewBox="0 0 760 640" class="w-full">
                        <path d="M154 512C154 382 260 255 402 255C520 255 621 340 650 450C677 555 582 596 447 596C291 596 154 600 154 512Z" fill="#b7deea"/>
                        <ellipse cx="401" cy="577" rx="276" ry="28" fill="#7dc8df"/>

                        <g fill="#65c8eb">
                            <path d="M215 290C224 270 224 246 215 223C245 243 250 267 244 291Z"/>
                            <path d="M569 294C560 274 560 250 569 227C539 247 533 271 540 295Z"/>
                            <path d="M613 370C624 346 625 322 617 300C648 322 654 346 647 372Z"/>
                        </g>

                        <g fill="#57bde3">
                            <rect x="285" y="483" width="252" height="56" rx="4" transform="rotate(-6 285 483)"/>
                            <rect x="300" y="423" width="260" height="56" rx="4" transform="rotate(2 300 423)"/>
                            <rect x="278" y="364" width="270" height="56" rx="4" transform="rotate(-4 278 364)"/>
                        </g>

                        <g fill="#fff5df">
                            <rect x="370" y="492" width="168" height="46" rx="3" transform="rotate(-6 370 492)"/>
                            <rect x="383" y="429" width="175" height="44" rx="3" transform="rotate(2 383 429)"/>
                            <rect x="360" y="370" width="186" height="44" rx="3" transform="rotate(-4 360 370)"/>
                        </g>

                        <g>
                            <rect x="252" y="495" width="208" height="54" rx="4" transform="rotate(-6 252 495)" fill="#ef7a79"/>
                            <rect x="270" y="435" width="218" height="54" rx="4" transform="rotate(2 270 435)" fill="#f4c146"/>
                            <rect x="246" y="374" width="224" height="54" rx="4" transform="rotate(-4 246 374)" fill="#22a98d"/>
                            <rect x="270" y="313" width="222" height="54" rx="4" transform="rotate(2 270 313)" fill="#e99c2e"/>
                            <rect x="248" y="252" width="218" height="54" rx="4" transform="rotate(-6 248 252)" fill="#f09d3f"/>
                            <rect x="268" y="196" width="212" height="54" rx="4" transform="rotate(2 268 196)" fill="#1f8cc4"/>
                        </g>

                        <g fill="#f2f2f2">
                            <rect x="482" y="496" width="148" height="44" rx="3" transform="rotate(-6 482 496)"/>
                            <rect x="492" y="436" width="142" height="42" rx="3" transform="rotate(2 492 436)"/>
                            <rect x="480" y="373" width="146" height="42" rx="3" transform="rotate(-4 480 373)"/>
                            <rect x="498" y="315" width="132" height="40" rx="3" transform="rotate(2 498 315)"/>
                            <rect x="486" y="254" width="130" height="40" rx="3" transform="rotate(-6 486 254)"/>
                            <rect x="500" y="198" width="124" height="40" rx="3" transform="rotate(2 500 198)"/>
                        </g>

                        <g fill="#61c8ea">
                            <path d="M184 202L194 226L218 236L194 246L184 270L174 246L150 236L174 226Z"/>
                            <path d="M610 212L618 232L638 240L618 248L610 268L602 248L582 240L602 232Z"/>
                            <path d="M662 318L668 334L684 340L668 346L662 362L656 346L640 340L656 334Z"/>
                        </g>

                        <g>
                            <ellipse cx="655" cy="518" rx="36" ry="18" fill="#db8a29"/>
                            <path d="M625 517C625 480 686 480 686 517V542C686 564 625 564 625 542Z" fill="#e69a38"/>
                            <path d="M646 471C665 455 693 463 695 490C672 492 655 488 646 471Z" fill="#169c7f"/>
                            <path d="M640 484C624 467 603 468 597 488C617 495 632 494 640 484Z" fill="#1bb090"/>
                        </g>

                        <g>
                            <rect x="161" y="564" width="147" height="16" rx="8" transform="rotate(10 161 564)" fill="#163a62"/>
                            <rect x="282" y="582" width="22" height="16" rx="8" transform="rotate(10 282 582)" fill="#e2ab42"/>
                        </g>
                    </svg>
                </div>
            </section>

            <section class="mt-16">
                <h2 class="text-3xl font-semibold text-[#141414] sm:text-4xl">Why Readers Love Us</h2>
                <p class="mt-3 max-w-2xl text-base leading-7 text-[#383838] sm:text-lg">
                    More than a bookstore, Book World is a warm space for discovering stories, meeting fellow readers,
                    and building everyday reading habits.
                </p>

                <div class="mt-8 grid gap-5 md:grid-cols-3">
                    <article class="rounded-2xl border border-[#d8d8ce] bg-[#f7f7ee] p-6">
                        <h3 class="text-xl font-semibold text-[#171717]">Wide Selection</h3>
                        <p class="mt-3 text-[15px] leading-7 text-[#3b3b3b]">
                            Browse classics, contemporary favorites, and hidden gems across many genres.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#d8d8ce] bg-[#f7f7ee] p-6">
                        <h3 class="text-xl font-semibold text-[#171717]">Reading Events</h3>
                        <p class="mt-3 text-[15px] leading-7 text-[#3b3b3b]">
                            Enjoy book discussions, writing circles, and seasonal reading programs.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#d8d8ce] bg-[#f7f7ee] p-6">
                        <h3 class="text-xl font-semibold text-[#171717]">Cozy Spaces</h3>
                        <p class="mt-3 text-[15px] leading-7 text-[#3b3b3b]">
                            Stay awhile in calm, comfortable areas designed for focused reading.
                        </p>
                    </article>
                </div>
            </section>

            <section class="mt-16 grid gap-6 lg:grid-cols-2">
                <article class="overflow-hidden rounded-2xl border border-[#d8d8ce] bg-[#f7f7ee]">
                    <img
                        src="https://images.unsplash.com/photo-1513001900722-370f803f498d?auto=format&fit=crop&w=1200&q=80"
                        alt="Featured collection books"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-[#171717]">Featured Collections</h3>
                        <p class="mt-3 text-[15px] leading-7 text-[#3b3b3b]">
                            Curated picks from local authors, award-winning fiction, and beginner-friendly reads.
                        </p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-[#d8d8ce] bg-[#f7f7ee]">
                    <img
                        src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1200&q=80"
                        alt="Reading community"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-[#171717]">Community Corner</h3>
                        <p class="mt-3 text-[15px] leading-7 text-[#3b3b3b]">
                            Meet other readers, share recommendations, and discover your next favorite book.
                        </p>
                    </div>
                </article>
            </section>

            <section class="mt-16 rounded-3xl border border-[#d8d8ce] bg-[#f7f7ee] p-7 sm:p-9">
                <h2 class="text-3xl font-semibold text-[#141414] sm:text-4xl">About Us</h2>
                <p class="mt-3 text-base leading-7 text-[#383838] sm:text-lg">
                    The people behind this project.
                </p>

                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#dfdfd4] bg-white p-5">
                        <p class="text-xl font-semibold text-[#171717]">Bioca, Anthonett A.</p>
                        <p class="mt-2 text-sm text-[#4a4a4a]">UI/UX Designer</p>
                    </article>

                    <article class="rounded-2xl border border-[#dfdfd4] bg-white p-5">
                        <p class="text-xl font-semibold text-[#171717]">Calamba, Yra Faye R.</p>
                        <p class="mt-2 text-sm text-[#4a4a4a]">UI/UX Designer</p>
                    </article>

                    <article class="rounded-2xl border border-[#dfdfd4] bg-white p-5">
                        <p class="text-xl font-semibold text-[#171717]">Gello, Jerame S.</p>
                        <p class="mt-2 text-sm text-[#4a4a4a]">Main Developer</p>
                    </article>
                </div>
            </section>

            <section class="mt-16 mb-6 rounded-3xl bg-black px-7 py-10 text-white sm:px-10">
                <h2 class="text-3xl font-semibold sm:text-4xl">Start Your Next Reading Adventure</h2>
                <p class="mt-4 max-w-2xl text-base leading-7 text-white/85 sm:text-lg">
                    Join Book World and discover stories that inspire, entertain, and stay with you.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="{{ route('register') }}" class="rounded-md bg-white px-5 py-2.5 text-base font-semibold text-black">
                        Create Account
                    </a>
                    <a href="{{ route('dashboard') }}" class="rounded-md border border-white/70 px-5 py-2.5 text-base font-semibold text-white">
                        Explore Collection
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
