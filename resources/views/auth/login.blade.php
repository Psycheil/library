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

            <section class="mt-12 grid gap-7 lg:mt-16 lg:grid-cols-[1.05fr_0.95fr]">
                <article class="rounded-3xl border border-[#d7d7ca] bg-[#f8f8ef] p-7 sm:p-10">
                    <p class="text-sm font-semibold uppercase tracking-[0.14em] text-[#5d5d55]">Welcome Back</p>
                    <h1 class="mt-3 text-4xl font-semibold leading-tight text-[#171717] sm:text-5xl">
                        Sign in to your account
                    </h1>
                    <p class="mt-4 max-w-lg text-base leading-7 text-[#3a3a3a]">
                        Access your personal library space and continue your reading journey.
                    </p>

                    <form method="POST" action="{{ route('login.store') }}" class="mt-8 space-y-5">
                        @csrf
                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-[#222222]">Email Address</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full rounded-xl border border-[#cecec0] bg-white px-4 py-3 text-base text-black outline-none transition focus:border-black focus:ring-2 focus:ring-black/10"
                            >
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-semibold text-[#222222]">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                class="w-full rounded-xl border border-[#cecec0] bg-white px-4 py-3 text-base text-black outline-none transition focus:border-black focus:ring-2 focus:ring-black/10"
                            >
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-[#595954]">Need an account?</span>
                            <a href="{{ route('register') }}" class="font-semibold text-black underline underline-offset-4">Register</a>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-xl bg-black px-5 py-3 text-base font-semibold text-white transition hover:opacity-90"
                        >
                            Sign In
                        </button>
                    </form>
                </article>

                <article class="overflow-hidden rounded-3xl border border-[#d7d7ca] bg-[#dbeef8]">
                    <img
                        src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1200&q=80"
                        alt="Reading corner"
                        class="h-64 w-full object-cover sm:h-72"
                    >
                    <div class="p-7">
                        <h2 class="text-2xl font-semibold text-[#171717]">Your Reading Space Awaits</h2>
                        <ul class="mt-4 space-y-2 text-[15px] text-[#303030]">
                            <li>- Browse your latest picks quickly</li>
                            <li>- Check available book collections</li>
                            <li>- Stay updated with community events</li>
                        </ul>
                    </div>
                </article>
            </section>
        </div>
    </div>
@endsection
