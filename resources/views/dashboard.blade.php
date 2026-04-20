@extends('layouts.app')

@section('hide_topbar')
1
@endsection

@section('main_class', '!py-0')
@section('container_class', '!w-full !max-w-none !mx-0')

@section('content')
    <div class="min-h-screen bg-[#efefe3]">
        <div class="mx-auto max-w-[1040px] px-4 py-5 sm:px-6">
            @include('partials.bookworld-header')

            <section class="mt-7">
                <div class="flex flex-wrap items-end justify-between gap-3">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.14em] text-[#5d5d55]">Dashboard</p>
                        <h1 class="mt-1.5 text-3xl font-semibold text-[#161616] sm:text-4xl">Library Overview</h1>
                        <p class="mt-2 max-w-xl text-sm leading-6 text-[#3a3a3a] sm:text-base">
                            Welcome back. Here is a quick snapshot of your current records and management pages.
                        </p>
                    </div>
                    <a href="{{ route('landing') }}" class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm">
                        Back to Landing Page
                    </a>
                </div>

                <div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @php
                        $cardStyles = [
                            'bg-[#f8f8ef] border-[#d8d8ce]',
                            'bg-[#dff0ff] border-[#c6deef]',
                            'bg-[#fdeec9] border-[#edd8ab]',
                        ];
                    @endphp
                    @foreach ($cards as $card)
                        <article class="rounded-xl border p-4 {{ $cardStyles[$loop->index % count($cardStyles)] }}">
                            <p class="text-xs font-semibold uppercase tracking-[0.1em] text-[#5a5a52]">{{ $card['label'] }}</p>
                            <p class="mt-2 text-4xl font-semibold leading-none text-[#171717]">{{ $card['value'] }}</p>
                        </article>
                    @endforeach
                </div>

                <div class="mt-5 grid gap-4 lg:grid-cols-[1.15fr_0.85fr]">
                    <article class="rounded-2xl border border-[#d8d8ce] bg-[#f8f8ef] p-5">
                        <h2 class="text-2xl font-semibold text-[#171717]">Quick Links</h2>
                        <p class="mt-1 text-xs text-[#4a4a44] sm:text-sm">Open and manage your core library pages.</p>

                        <div class="mt-4 space-y-2.5">
                            @foreach ($modules as $key => $module)
                                <div class="flex flex-wrap items-center justify-between gap-2 rounded-xl border border-[#d8d8ce] bg-white p-3">
                                    <div>
                                        <p class="text-base font-semibold text-[#171717]">{{ $module['title'] }}</p>
                                        <p class="text-xs text-[#57574f] sm:text-sm">View, create, and update records.</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <a
                                            href="{{ route($key . '.index') }}"
                                            class="rounded-md border border-black px-3 py-1.5 text-xs font-semibold text-black"
                                        >
                                            Open
                                        </a>
                                        <a
                                            href="{{ route($key . '.create') }}"
                                            class="rounded-md bg-black px-3 py-1.5 text-xs font-semibold text-white"
                                        >
                                            Add New
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </article>

                    <article class="rounded-2xl border border-[#d8d8ce] bg-[#dbeef8] p-5">
                        <h2 class="text-2xl font-semibold text-[#171717]">Today at a Glance</h2>
                        <ul class="mt-3 space-y-2 text-sm leading-6 text-[#2f2f2f] sm:text-[15px] sm:leading-7">
                            <li>- Review due borrowings and pending returns</li>
                            <li>- Update book records with newly arrived titles</li>
                            <li>- Check member activity and recent registrations</li>
                            <li>- Prepare announcements for upcoming reading events</li>
                        </ul>

                        <div class="mt-5 rounded-xl bg-black p-4 text-white">
                            <p class="text-xs uppercase tracking-[0.12em] text-white/75">Tip</p>
                            <p class="mt-1.5 text-sm leading-6">
                                Keep your dashboard updated daily so your data remains clear and easy to manage.
                            </p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
@endsection
