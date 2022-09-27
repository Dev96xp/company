<div>
    <div class="col-span-7 mr-2">

        <table class="table table-striped text-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Message</th>


                </tr>
            </thead>
            <tbody>
                <div>

                </div>
                @foreach ($messages as $message)
                    <tr>

                        <td class="py-1">
                            <div>{{ $message->id }}</div>
                        </td>

                        <td class="py-1">
                            <div class="font-bold">{{ $message->user->name }}</div>
                            <div>{{ $message->user->email }}</div>
                        </td>

                        {{-- Outseam --}}
                        <td class="py-1">
                            <div>{{ $message->phone }}</div>
                        </td>

                        {{-- Overarm --}}
                        <td class="py-1">
                            <div>{{ $message->company }}</div>
                        </td>

                        {{-- Chest --}}
                        <td class="py-1">
                            <div>{{ $message->address }}</div>
                        </td>

                        {{-- Sleeve --}}
                        <td class="py-1">
                            <div>{{ $message->city }}</div>
                        </td>

                        {{-- Waist --}}
                        <td class="py-1">
                            <div>{{ $message->state }}</div>
                        </td>

                        {{-- Neck --}}
                        <td class="py-1">
                            <div>{{ $message->zip }}</div>
                        </td>

                        {{-- Shoes --}}
                        <td class="py-1">
                            <div>{{ $message->message }}</div>
                        </td>
                                

                        {{-- <td class="px-6 py-1 text-md font-medium">
                            @livewire('admin.message.edit-message', ['message' => $message], key($message->id))
                        </td> --}}

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
              
</div>