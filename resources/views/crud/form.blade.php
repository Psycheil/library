@extends('layouts.app')

@section('hide_topbar')
1
@endsection

@section('main_class', '!py-0')
@section('container_class', '!w-full !max-w-none !mx-0')

@section('content')
    <div class="min-h-screen bg-[#efefe3]">
        <div class="mx-auto max-w-[880px] px-4 py-5 sm:px-6">
            @include('partials.bookworld-header')

            <section class="mt-7 rounded-2xl border border-[#d8d8ce] bg-[#f8f8ef] p-5 sm:p-6">
                <div class="flex flex-wrap items-start justify-between gap-3">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-[#5d5d55]">{{ $module['singular'] }}</p>
                        <h1 class="mt-1.5 text-3xl font-semibold text-[#161616] sm:text-4xl">{{ $submitLabel }}</h1>
                        <p class="mt-2 text-sm leading-6 text-[#3a3a3a] sm:text-base">
                            Fill in the fields below for {{ strtolower($module['singular']) }} details.
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <a
                            href="{{ route($moduleKey . '.index') }}"
                            class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm"
                        >
                            Back to List
                        </a>
                        <a
                            href="{{ route('dashboard') }}"
                            class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm"
                        >
                            Back to Dashboard
                        </a>
                    </div>
                </div>

                <form method="POST" action="{{ $formAction }}" class="mt-5 space-y-4">
                    @csrf
                    @if ($formMethod !== 'POST')
                        @method($formMethod)
                    @endif

                    @foreach ($module['fields'] as $field => $label)
                        <div>
                            <label for="{{ $field }}" class="mb-2 block text-sm font-semibold text-[#222222]">{{ $label }}</label>
                            <input
                                id="{{ $field }}"
                                name="{{ $field }}"
                                type="text"
                                value="{{ old($field, $item[$field] ?? '') }}"
                                required
                                class="w-full rounded-xl border border-[#cecec0] bg-white px-4 py-3 text-base text-black outline-none transition focus:border-black focus:ring-2 focus:ring-black/10"
                            >
                        </div>
                    @endforeach

                    <div class="flex flex-wrap gap-2 pt-1">
                        <button
                            class="rounded-md bg-black px-4 py-2 text-xs font-semibold text-white sm:text-sm"
                            type="submit"
                        >
                            {{ $submitLabel }}
                        </button>
                        <a
                            class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm"
                            href="{{ route($moduleKey . '.index') }}"
                        >
                            Cancel
                        </a>
                        <button
                            type="button"
                            onclick="window.history.back()"
                            class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm"
                        >
                            Back
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
