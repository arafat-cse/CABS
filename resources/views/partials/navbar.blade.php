{{-- Navbar: 4+ links, hamburger toggle on small screens --}}
<header class="sticky top-0 z-50 bg-white border-b border-slate-200">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
        <a href="{{ route('home') }}" class="text-xl font-bold text-sky-600">
            CABS <span class="text-slate-800">Clinic</span>
        </a>

        {{-- Desktop links --}}
        <ul class="hidden items-center gap-8 text-sm font-medium text-slate-700 md:flex">
            <li><a href="{{ route('home') }}" class="hover:text-sky-600">Home</a></li>
            <li><a href="{{ route('home') }}#services" class="hover:text-sky-600">Services</a></li>
            <li><a href="{{ route('home') }}#about" class="hover:text-sky-600">About</a></li>
            <li><a href="{{ route('home') }}#contact" class="hover:text-sky-600">Contact</a></li>
            <li>
                <a href="{{ route('booking') }}"
                   class="rounded-lg bg-sky-600 px-4 py-2 text-white transition hover:bg-sky-700">
                    Book Now
                </a>
            </li>
        </ul>

        {{-- Mobile hamburger toggle --}}
        <button type="button"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-slate-100"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                id="nav-toggle">
            <svg id="icon-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="icon-close" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    {{-- Mobile menu panel --}}
    <ul id="mobile-menu" class="hidden flex-col gap-1 border-t border-slate-200 px-4 py-3 text-sm font-medium text-slate-700 md:hidden">
        <li><a href="{{ route('home') }}" class="block rounded-md px-3 py-2 hover:bg-slate-100">Home</a></li>
        <li><a href="{{ route('home') }}#services" class="block rounded-md px-3 py-2 hover:bg-slate-100">Services</a></li>
        <li><a href="{{ route('home') }}#about" class="block rounded-md px-3 py-2 hover:bg-slate-100">About</a></li>
        <li><a href="{{ route('home') }}#contact" class="block rounded-md px-3 py-2 hover:bg-slate-100">Contact</a></li>
        <li>
            <a href="{{ route('booking') }}" class="block rounded-md bg-sky-600 px-3 py-2 text-white hover:bg-sky-700">
                Book Now
            </a>
        </li>
    </ul>
</header>
