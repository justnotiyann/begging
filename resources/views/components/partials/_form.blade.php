@props(['login' => false])

<!-- Form -->
<form>
    <div class="grid gap-y-4">

        @if ($login)
            <!-- Form Group -->
            <div>
                <label for="email" class="block text-sm mb-2 dark:text-white">Name</label>
                <div class="relative">
                    <input type="email" id="email" name="email"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        required aria-describedby="email-error" placeholder="John Doe">
                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                        <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16" aria-hidden="true">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                    </div>
                </div>
                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid
                    email address so we can get back to you</p>
            </div>
            <!-- End Form Group -->
        @endif


        <!-- Form Group -->
        <div>
            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
            <div class="relative">
                <input type="email" id="email" name="email"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                    required aria-describedby="email-error" placeholder="johndoe@domain.com">
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" aria-hidden="true">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </div>
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid
                email address so we can get back to you</p>
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div>
            <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
            <div class="relative">
                <input type="password" id="password" name="password"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                    required aria-describedby="password-error">
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" aria-hidden="true">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </div>
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required
            </p>
        </div>
        <!-- End Form Group -->




        <button type="submit"
            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Sign
            up</button>
    </div>
</form>
<!-- End Form -->
