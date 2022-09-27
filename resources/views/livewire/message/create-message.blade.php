<div class="container py-8">
    <div class="card">
        <div class="card-body">

            <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
                <h1 class="text-2xl font-medium">Send message</h1>
                <form action="" class="my-10">
                    <div class="flex flex-col space-y-5">

                        <label for="company">
                            <p class="font-medium text-slate-700 pb-2">Company</p>
                            <input wire:model.defer="company" id="company" name="company" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter company">
                            @error('company')
                                <span class="text-danger text-red-500">{{$message}}</span>
                            @enderror

                        </label>

                        <label for="address">
                            <p class="font-medium text-slate-700 pb-2">Address</p>
                            <input wire:model.defer="address" id="address" name="address" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter address">
                            @error('address')
                                <span class="text-danger text-red-500">{{$message}}</span>
                            @enderror
                        </label>

                        <label for="city">
                            <p class="font-medium text-slate-700 pb-2">City</p>
                            <input wire:model.defer="city" id="city" name="city" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter address">
                            @error('city')
                                <span class="text-danger text-red-500">{{$message}}</span>
                            @enderror
                        </label>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="span-col-1">
                                <label for="State">
                                    <p class="font-medium text-slate-700 pb-2">State</p>
                                    <input wire:model.defer="state" id="state" name="state" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter state">
                                    @error('state')
                                        <span class="text-danger text-red-500">{{$message}}</span>
                                    @enderror
                                </label>                                                
                            </div>
                            <div class="span-col-1">
                                <label for="Zip">
                                    <p class="font-medium text-slate-700 pb-2">Zip</p>
                                    <input wire:model.defer="zip" id="zip" name="zip" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter zip">
                                    @error('zip')
                                        <span class="text-danger text-red-500">{{$message}}</span>
                                    @enderror
                                </label>                                                   
                            </div>
                        </div>

                        <label for="phone">
                            <p class="font-medium text-slate-700 pb-2">Phone</p>
                            <input wire:model.defer="phone" id="phone" name="phone" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter phone number">
                            @error('phone')
                                <span class="text-danger text-red-500">{{$message}}</span>
                            @enderror
                        </label>

                        <label for="message">
                            <p class="font-medium text-slate-700 pb-2">Message</p>                                        
                            <textarea wire:model.defer="message" id="message" name="message" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter message">
                            </textarea>                                        
                        </label>                                        


                        <x-jet-danger-button wire:click="create">
                            Send Message
                        </x-jet-danger-button>


                    </div>
                </form>
            </div>
                                           
        </div>
    </div>

</div>