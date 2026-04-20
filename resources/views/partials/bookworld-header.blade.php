<header class="flex items-center justify-between">
    <a href="{{ route('landing') }}" class="text-[33px] font-semibold text-[#131313]">Book World</a>

    <nav class="hidden items-center gap-14 text-lg font-medium text-[#111111] md:flex">
        <a href="{{ route('landing') }}" class="{{ request()->routeIs('landing') ? 'underline underline-offset-8' : 'hover:opacity-75' }}">Home</a>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'underline underline-offset-8' : 'hover:opacity-75' }}">Store</a>
        <a href="{{ route('dashboard') }}" class="hover:opacity-75">Community</a>
        <a href="{{ route('dashboard') }}" class="hover:opacity-75">About Us</a>
    </nav>

    <div class="flex items-center gap-3">
        @unless (request()->routeIs('login'))
            <a href="{{ route('login') }}" class="hidden text-lg font-medium text-black sm:block">Sign in</a>
        @endunless

        @unless (request()->routeIs('register'))
            <a href="{{ route('register') }}" class="rounded-md bg-black px-5 py-2.5 text-base font-medium text-white">
                Get Started
            </a>
        @else
            <a href="{{ route('login') }}" class="rounded-md bg-black px-5 py-2.5 text-base font-medium text-white">
                Go to Login
            </a>
        @endunless
    </div>
</header>
