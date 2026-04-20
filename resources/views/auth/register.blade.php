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

            <section class="mt-12 grid gap-7 lg:mt-16 lg:grid-cols-[0.95fr_1.05fr]">
                <article class="overflow-hidden rounded-3xl border border-[#d7d7ca] bg-[#dbeef8]">
                    <img
                        src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1200&q=80"
                        alt="Bookshelves in library"
                        class="h-64 w-full object-cover sm:h-72"
                    >
                    <div class="p-7">
                        <h2 class="text-2xl font-semibold text-[#171717]">Join Book World</h2>
                        <p class="mt-3 text-[15px] leading-7 text-[#303030]">
                            Create your account to access updates, track favorites, and stay connected to our
                            reading community.
                        </p>
                    </div>
                </article>

                <article class="rounded-3xl border border-[#d7d7ca] bg-[#f8f8ef] p-7 sm:p-10">
                    <p class="text-sm font-semibold uppercase tracking-[0.14em] text-[#5d5d55]">Create Account</p>
                    <h1 class="mt-3 text-4xl font-semibold leading-tight text-[#171717] sm:text-5xl">
                        Start your Book World profile
                    </h1>

                    <form method="POST" action="{{ route('register.store') }}" class="mt-8 space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-[#222222]">Full Name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                required
                                class="w-full rounded-xl border border-[#cecec0] bg-white px-4 py-3 text-base text-black outline-none transition focus:border-black focus:ring-2 focus:ring-black/10"
                            >
                        </div>

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

                        <div class="grid gap-5 sm:grid-cols-2">
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

                            <div>
                                <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-[#222222]">Confirm Password</label>
                                <input
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    type="password"
                                    required
                                    class="w-full rounded-xl border border-[#cecec0] bg-white px-4 py-3 text-base text-black outline-none transition focus:border-black focus:ring-2 focus:ring-black/10"
                                >
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-[#595954]">Already have an account?</span>
                            <a href="{{ route('login') }}" class="font-semibold text-black underline underline-offset-4">Sign in</a>
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-xl bg-black px-5 py-3 text-base font-semibold text-white transition hover:opacity-90"
                        >
                            Create Account
                        </button>
                    </form>
                </article>
            </section>
        </div>
    </div>
@endsection
