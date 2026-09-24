@extends('layouts.app')

@section('title', 'Home - Clinic Appointment Booking')

@section('content')
    {{-- Hero section: heading, description, 2 CTA buttons (primary/secondary) --}}
    <section id="hero" class="bg-sky-50">
        <div class="mx-auto max-w-6xl px-4 py-20 text-center sm:px-6">
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                Book Your Doctor's Appointment in Minutes
            </h1>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-slate-600">
                CABS Clinic makes it simple to find the right care and reserve a time slot
                that works for you — no phone calls, no waiting rooms.
            </p>
            <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ route('booking') }}"
                   class="rounded-lg bg-sky-600 px-6 py-3 text-base font-semibold text-white shadow transition hover:bg-sky-700">
                    Book Now
                </a>
                <a href="#services"
                   class="rounded-lg border border-slate-300 bg-white px-6 py-3 text-base font-semibold text-slate-700 transition hover:bg-slate-50">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    {{-- Cards section: 3+ cards (services), each with icon/image, title, description, button --}}
    <section id="services" class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-slate-900">Our Services</h2>
            <p class="mt-2 text-slate-600">Everything you need for your health, in one place.</p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="rounded-2xl border border-slate-200 p-6 text-center shadow-sm transition hover:shadow-md">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-sky-100 text-sky-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">General Checkup</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Routine health screening and consultation with our general physicians.
                </p>
                <a href="{{ route('booking') }}" class="mt-4 inline-block text-sm font-semibold text-sky-600 hover:text-sky-700">
                    Book This Service &rarr;
                </a>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 text-center shadow-sm transition hover:shadow-md">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-sky-100 text-sky-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h.01M15 12h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Dental Care</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Cleaning, checkups, and treatment plans from our dental specialists.
                </p>
                <a href="{{ route('booking') }}" class="mt-4 inline-block text-sm font-semibold text-sky-600 hover:text-sky-700">
                    Book This Service &rarr;
                </a>
            </div>

            <div class="rounded-2xl border border-slate-200 p-6 text-center shadow-sm transition hover:shadow-md">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-sky-100 text-sky-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 0 1 6.364 0L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 21l-7.682-8.318a4.5 4.5 0 0 1 0-6.364Z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Cardiology</h3>
                <p class="mt-2 text-sm text-slate-600">
                    Heart health consultations and diagnostics with experienced cardiologists.
                </p>
                <a href="{{ route('booking') }}" class="mt-4 inline-block text-sm font-semibold text-sky-600 hover:text-sky-700">
                    Book This Service &rarr;
                </a>
            </div>
        </div>
    </section>
@endsection
