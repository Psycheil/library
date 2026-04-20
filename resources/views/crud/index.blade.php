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
                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-[#5d5d55]">{{ $module['title'] }}</p>
                        <h1 class="mt-1.5 text-3xl font-semibold text-[#161616] sm:text-4xl">
                            {{ $module['title'] }} Management
                        </h1>
                        <p class="mt-2 max-w-xl text-sm leading-6 text-[#3a3a3a] sm:text-base">
                            View and manage all {{ strtolower($module['title']) }} records.
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <a
                            href="{{ route('dashboard') }}"
                            class="rounded-md border border-black px-4 py-2 text-xs font-semibold text-black sm:text-sm"
                        >
                            Back to Dashboard
                        </a>
                        <a
                            href="{{ route($moduleKey . '.create') }}"
                            class="rounded-md bg-black px-4 py-2 text-xs font-semibold text-white sm:text-sm"
                        >
                            Add {{ $module['singular'] }}
                        </a>
                    </div>
                </div>

                <div class="mt-5 rounded-2xl border border-[#d8d8ce] bg-[#f8f8ef] p-4 sm:p-5">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-left">
                            <thead>
                                <tr class="border-b border-[#d8d8ce]">
                                    @foreach ($module['fields'] as $label)
                                        <th class="px-3 py-2 text-xs font-semibold uppercase tracking-[0.1em] text-[#5a5a52]">{{ $label }}</th>
                                    @endforeach
                                    <th class="px-3 py-2 text-xs font-semibold uppercase tracking-[0.1em] text-[#5a5a52]">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    <tr class="border-b border-[#dfdfd4] last:border-b-0">
                                        @foreach (array_keys($module['fields']) as $field)
                                            <td class="px-3 py-3 text-sm text-[#1f1f1f]">{{ $item[$field] }}</td>
                                        @endforeach
                                        <td class="px-3 py-3">
                                            <div class="flex flex-wrap gap-2">
                                                <a
                                                    href="{{ route($moduleKey . '.edit', $item['id']) }}"
                                                    class="rounded-md border border-black px-3 py-1.5 text-xs font-semibold text-black"
                                                >
                                                    Edit
                                                </a>
                                                <form method="POST" action="{{ route($moduleKey . '.destroy', $item['id']) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="rounded-md bg-black px-3 py-1.5 text-xs font-semibold text-white"
                                                        type="submit"
                                                    >
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ count($module['fields']) + 1 }}" class="px-3 py-8 text-center text-sm text-[#57574f]">
                                            No records yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
