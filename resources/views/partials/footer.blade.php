{{-- Footer: contact info + social links --}}
<footer id="contact" class="bg-slate-900 text-slate-300">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <p class="text-lg font-bold text-white">CABS Clinic</p>
            <p class="mt-2 text-sm text-slate-400">
                Simple, fast appointment booking for your everyday healthcare needs.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-400">Contact</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li>123 Health Street, Dhaka, Bangladesh</li>
                <li><a href="tel:+8801000000000" class="hover:text-white">+880 1000-000000</a></li>
                <li><a href="mailto:hello@cabsclinic.test" class="hover:text-white">hello@cabsclinic.test</a></li>
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-slate-400">Follow Us</p>
            <div class="mt-3 flex gap-4">
                <a href="#" aria-label="Facebook" class="hover:text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12Z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 2 .3 2.4.5.6.2 1 .5 1.5 1 .4.4.7.9 1 1.5.2.5.4 1.2.5 2.4.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 2-.5 2.4a4 4 0 0 1-1 1.5c-.4.4-.9.7-1.5 1-.5.2-1.2.4-2.4.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-2-.3-2.4-.5a4 4 0 0 1-1.5-1 4 4 0 0 1-1-1.5c-.2-.5-.4-1.2-.5-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-2 .5-2.4.2-.6.5-1 1-1.5.4-.4.9-.7 1.5-1 .5-.2 1.2-.4 2.4-.5C8.4 2.2 8.8 2.2 12 2.2Zm0 1.8c-3.1 0-3.5 0-4.7.1-1 .1-1.6.2-2 .4-.5.2-.8.4-1.2.7-.3.4-.5.7-.7 1.2-.1.4-.3 1-.4 2C3 9.5 3 9.9 3 13s0 3.5.1 4.7c.1 1 .2 1.6.4 2 .2.5.4.8.7 1.2.4.3.7.5 1.2.7.4.1 1 .3 2 .4 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1-.1 1.6-.2 2-.4.5-.2.8-.4 1.2-.7.3-.4.5-.7.7-1.2.1-.4.3-1 .4-2 .1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c-.1-1-.2-1.6-.4-2a3.2 3.2 0 0 0-.7-1.2 3.2 3.2 0 0 0-1.2-.7c-.4-.1-1-.3-2-.4-1.2-.1-1.6-.1-4.7-.1Zm0 3.5a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Zm0 1.8a3.7 3.7 0 1 0 0 7.4 3.7 3.7 0 0 0 0-7.4Zm5.7-2a1.3 1.3 0 1 1-2.6 0 1.3 1.3 0 0 1 2.6 0Z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 5.9c-.7.3-1.5.5-2.3.6a4 4 0 0 0 1.8-2.2c-.8.5-1.6.8-2.6 1a4 4 0 0 0-6.9 3.7A11.4 11.4 0 0 1 3.7 4.9a4 4 0 0 0 1.3 5.4c-.6 0-1.3-.2-1.8-.5v.1a4 4 0 0 0 3.3 4 4 4 0 0 1-1.8.1 4 4 0 0 0 3.8 2.8A8 8 0 0 1 2 18.6a11.4 11.4 0 0 0 6.2 1.8c7.4 0 11.5-6.2 11.5-11.5v-.5c.8-.6 1.5-1.3 2.3-2.1Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-slate-800 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} CABS Clinic. All rights reserved.
    </div>
</footer>
