<x-app-layout>

    @livewire('message.create-message')

    {{-- <div class="container py-8">
        <div class="card">
            <div class="card-body">

                <div>
                        <!-- component -->
                        
                            <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
                                <h1 class="text-2xl font-medium">Send message</h1>
                                

                                <form action="" class="my-10">
                                    <div class="flex flex-col space-y-5">

                                        <label for="company">
                                            <p class="font-medium text-slate-700 pb-2">Company</p>
                                            <input id="company" name="company" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter company">
                                        </label>

                                        <label for="address">
                                            <p class="font-medium text-slate-700 pb-2">Address</p>
                                            <input id="address" name="address" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter address">
                                        </label>

                                        <label for="city">
                                            <p class="font-medium text-slate-700 pb-2">City</p>
                                            <input id="city" name="city" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter address">
                                        </label>

                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="span-col-1">
                                                <label for="State">
                                                    <p class="font-medium text-slate-700 pb-2">State</p>
                                                    <input id="state" name="state" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter state">
                                                </label>                                                
                                            </div>
                                            <div class="span-col-1">
                                                <label for="Zip">
                                                    <p class="font-medium text-slate-700 pb-2">Zip</p>
                                                    <input id="zip" name="zip" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter zip">
                                                </label>                                                   
                                            </div>
                                        </div>

                                        <label for="phone">
                                            <p class="font-medium text-slate-700 pb-2">Phone</p>
                                            <input id="phone" name="phone" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter phone number">
                                        </label>

                                        <label for="message">
                                            <p class="font-medium text-slate-700 pb-2">Message</p>                                        
                                            <textarea id="message" name="message" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter message">
                                            </textarea>
                                        </label>                                        


                                        <button class="flex justify-center w-full px-6 py-3 text-white bg-blue-500 rounded-md md:w-auto md:mx-2 focus:outline-none"                                            
                                            wire:click="create_message">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                
                                            <span class="mx-2">       
                                                    Send Message
                                            </span>
                                        </button>


                                    </div>
                                </form>
                            </div>
                            
                       
                </div>


            </div>
        </div>

    </div> --}}
</x-app-layout>