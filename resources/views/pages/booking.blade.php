@extends('layouts.app')

@section('title', 'Book Appointment - Clinic Appointment Booking')

@section('content')
    <section id="booking-form" class="bg-slate-50 py-16">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-slate-900">Book an Appointment</h1>
                <p class="mt-2 text-slate-600">Fill in your details below and we'll confirm your slot.</p>
            </div>

            {{-- Success summary panel: hidden until a valid submit --}}
            <div id="success-summary" class="mt-8 hidden rounded-xl border border-green-200 bg-green-50 p-6" role="alert">
                <h2 class="text-lg font-semibold text-green-800">Appointment Request Received</h2>
                <p class="mt-1 text-sm text-green-700">Here is a summary of what you submitted:</p>
                <dl id="summary-list" class="mt-4 grid gap-2 text-sm text-green-900 sm:grid-cols-2"></dl>
                <button type="button" id="book-another"
                        class="mt-4 text-sm font-semibold text-green-800 underline hover:text-green-900">
                    Submit Another Booking
                </button>
            </div>

            <form id="booking-form-el" class="mt-8 space-y-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8" novalidate>
                {{-- Patient Name --}}
                <div>
                    <label for="full_name" class="block text-sm font-medium text-slate-700">Patient Name</label>
                    <input type="text" id="full_name" name="full_name"
                           class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                           placeholder="Patient Name">
                    <p class="error-message mt-1 hidden text-sm text-red-600" id="error-full_name"></p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                        <input type="email" id="email" name="email"
                               class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                               placeholder="user@example.com">
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-email"></p>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="phone" class="block text-sm font-medium text-slate-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                               class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                               placeholder="01XXXXXXXXX">
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-phone"></p>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    {{-- Age --}}
                    <div>
                        <label for="age" class="block text-sm font-medium text-slate-700">Age</label>
                        <input type="number" id="age" name="age" min="1" max="120"
                               class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                               placeholder="e.g. 30">
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-age"></p>
                    </div>

                    {{-- Department --}}
                    <div>
                        <label for="department" class="block text-sm font-medium text-slate-700">Department</label>
                        <select id="department" name="department"
                                class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500">
                            <option value="">Select a department</option>
                            <option value="general">General Checkup</option>
                            <option value="dental">Dental Care</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="dermatology">Dermatology</option>
                        </select>
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-department"></p>
                    </div>
                </div>

                {{-- Gender --}}
                <div>
                    <span class="block text-sm font-medium text-slate-700">Gender</span>
                    <div class="mt-2 flex gap-6">
                        <label class="flex items-center gap-2 text-sm text-slate-700">
                            <input type="radio" name="gender" value="female" class="text-sky-600 focus:ring-sky-500">
                            Female
                        </label>
                        <label class="flex items-center gap-2 text-sm text-slate-700">
                            <input type="radio" name="gender" value="male" class="text-sky-600 focus:ring-sky-500">
                            Male
                        </label>
                        <label class="flex items-center gap-2 text-sm text-slate-700">
                            <input type="radio" name="gender" value="other" class="text-sky-600 focus:ring-sky-500">
                            Other
                        </label>
                    </div>
                    <p class="error-message mt-1 hidden text-sm text-red-600" id="error-gender"></p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    {{-- Preferred Date --}}
                    <div>
                        <label for="preferred_date" class="block text-sm font-medium text-slate-700">Preferred Date</label>
                        <input type="date" id="preferred_date" name="preferred_date"
                               class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500">
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-preferred_date"></p>
                    </div>

                    {{-- Alternate Date --}}
                    <div>
                        <label for="alternate_date" class="block text-sm font-medium text-slate-700">Alternate Date</label>
                        <input type="date" id="alternate_date" name="alternate_date"
                               class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500">
                        <p class="error-message mt-1 hidden text-sm text-red-600" id="error-alternate_date"></p>
                    </div>
                </div>

                {{-- Symptoms / Notes --}}
                <div>
                    <label for="symptoms" class="block text-sm font-medium text-slate-700">Symptoms / Notes (optional)</label>
                    <textarea id="symptoms" name="symptoms" rows="4"
                              class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
                              placeholder="Briefly describe your symptoms or reason for the visit"></textarea>
                    <p class="error-message mt-1 hidden text-sm text-red-600" id="error-symptoms"></p>
                </div>

                {{-- File Upload --}}
                <div>
                    <label for="prescription" class="block text-sm font-medium text-slate-700">Upload Previous Prescription (optional)</label>
                    <input type="file" id="prescription" name="prescription" accept=".pdf,.jpg,.jpeg,.png"
                           class="mt-1 w-full text-sm text-slate-600 file:mr-4 file:rounded-lg file:border-0 file:bg-sky-50 file:px-4 file:py-2 file:text-sm file:font-medium file:text-sky-700 hover:file:bg-sky-100">
                    <p class="error-message mt-1 hidden text-sm text-red-600" id="error-prescription"></p>
                </div>

                {{-- Terms --}}
                <div>
                    <label class="flex items-start gap-2 text-sm text-slate-700">
                        <input type="checkbox" id="agree_terms" name="agree_terms"
                               class="mt-0.5 rounded text-sky-600 focus:ring-sky-500">
                        I confirm the information above is accurate and I agree to the clinic's booking policy.
                    </label>
                    <p class="error-message mt-1 hidden text-sm text-red-600" id="error-agree_terms"></p>
                </div>

                <div class="flex gap-4 pt-2">
                    <button type="submit"
                            class="rounded-lg bg-sky-600 px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-700">
                        Submit
                    </button>
                    <button type="reset"
                            class="rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
