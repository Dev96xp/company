<x-app-layout>

<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <div class="text-gray-800 capitalize dark:text-white">
                    <h1 class="text-5xl font-semibold tracking-wider mb-2">
                        Best Machining, Inc.                    
                    </h1>
                    <h2 class="text-2xl mb-2">Tom Best</h2>
                    <h2>370 North Elm Street</h2>
                    <h2>Grand Island, NE 68801</h2>
                    <h2>Phone 308-384-0463</h2>
                    <h2>bestmach@kdsi.net</h2>
                </div>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                </p>

                <div class="mt-6">
                    <h1 class="text-gray-500 dark:text-gray-300">Select type of account</h1>

                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                        <button class="flex justify-center w-full px-6 py-3 text-white bg-blue-500 rounded-md md:w-auto md:mx-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2">       
                                    <a href="{{ route('message.index') }}">Send Message</a>                                                        
                            </span>
                        </button>

                        <button class="flex justify-center w-full px-6 py-3 mt-4 text-blue-500 border border-blue-500 rounded-md md:mt-0 md:w-auto md:mx-2 dark:border-blue-400 dark:text-blue-400 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="mx-2">
                                worker
                            </span>
                        </button>
                    </div>
                </div>

                    {{-- SECCTION 7 - Banda de locations --}}
                <section class="my-4">
                    <h1 class="text-center text-3xl text-gray-600 mb-4">Locations on Nebraska</h1>
                    <div class="max-w-7xl mx-auto">
                        <!-- component -->
                        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                            <div class="flex justify-center md:justify-end -mt-16">
                                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                                    src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                            </div>
                            <div>
                                <h2 class="text-gray-800 text-3xl font-semibold">Grand Island</h2>
                                <h3 class="font-bold text-blue-600">370 North Elm Street</h3>
                                <h3 class="font-bold">Phone 308-380-8412</h3>
                                <p class="mt-4 text-gray-600">In the heart of the nebraska, with all the team work ready to machining and more.</p>
                            </div>
                            <div class="flex justify-end mt-4">
                                <a href="#" class="text-xl font-medium text-indigo-500">BEST MACHINING</a>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1507.2746681049814!2d-98.34821284158987!3d40.92562622139923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8799865bd5ef3c37%3A0x90d6411dc35a7b4b!2s370%20N%20Elm%20St%2C%20Grand%20Island%2C%20NE%2068801!5e0!3m2!1sen!2sus!4v1662695346392!5m2!1sen!2sus"
                                width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                </section>



            </div>
        </div>
    </div>
</section>

</x-app-layout>