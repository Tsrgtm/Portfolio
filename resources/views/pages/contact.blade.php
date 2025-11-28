<x-layouts.app>

    <div class="my-12">
        <h2 class="text-2xl text-gray-900 dark:text-gray-100 font-semibold mb-4">
            Contact Me
        </h2>

        <div class="grid sm:grid-cols-2 gap-4">
            <div
                class="relative bg-white dark:bg-[#242423] border border-border rounded-lg p-4 shadow-highlight flex gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-6 h-6 flex-shrink-0 text-gray-900 dark:text-gray-100 mt-0.5">
                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                    <rect x="2" y="4" width="20" height="16" rx="2" />
                </svg>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Email</h3>
                    <div class="mt-2">
                        <p class="text-gray-700 dark:textgray-300">Drop a line for business inquiries or general
                            questions.</p>
                    </div>
                    <div class="mt-2">
                        <a href="mailto:mail@tusargautam.com.np" class="mt-2">
                            <span class="text-laravel font-medium hover:underline">
                                mail@tusargautam.com.np
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="relative bg-white dark:bg-[#242423] border border-border rounded-lg p-4 shadow-highlight flex gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-6 h-6 flex-shrink-0 text-gray-900 dark:text-gray-100 mt-0.5">
                    <path
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                </svg>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Phone</h3>
                    <div class="mt-2">
                        <p class="text-gray-700 dark:textgray-300">Only for urgent matters or scheduled calls.</p>
                    </div>
                    <div class="mt-2">
                        <a href="tel:+977 9749778728" class="mt-2">
                            <span class="text-laravel font-medium hover:underline">
                                +977 9749778728
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        @if(session('status'))
            <div class="mt-6 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="#" class="mt-6 grid grid-cols-1 gap-4">
            @csrf

            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="text" required
                        value="{{ old('name') }}"
                        class="w-full rounded-lg border border-border bg-white dark:bg-[#242423] px-4 py-2 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-laravel"
                        placeholder="Your name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" required
                        value="{{ old('email') }}"
                        class="w-full rounded-lg border border-border bg-white dark:bg-[#242423] px-4 py-2 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-laravel"
                        placeholder="you@example.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="phone" class="sr-only">Phone (optional)</label>
                <input id="phone" name="phone" type="tel"
                    value="{{ old('phone') }}"
                    class="w-full rounded-lg border border-border bg-white dark:bg-[#242423] px-4 py-2 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-laravel"
                    placeholder="Phone (optional)">
                @error('phone')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="subject" class="sr-only">Subject</label>
                <input id="subject" name="subject" type="text" required
                    value="{{ old('subject') }}"
                    class="w-full rounded-lg border border-border bg-white dark:bg-[#242423] px-4 py-2 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-laravel"
                    placeholder="Subject">
                @error('subject')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="sr-only">Message</label>
                <textarea id="message" name="message" rows="6" required
                    class="w-full rounded-lg border border-border bg-white dark:bg-[#242423] px-4 py-3 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-laravel"
                    placeholder="Write your message...">{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- simple honeypot to deter bots -->
            <div class="hidden">
                <label for="website">Website</label>
                <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid gap-4">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    I typically respond within 1-3 business days.
                </p>

                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg bg-black text-white dark:bg-white dark:text-black hover:opacity-90 shadow-highlight transition-colors duration-150">
                    Send Message
                </button>   
            </div>
        </form>
    </div>


</x-layouts.app>
