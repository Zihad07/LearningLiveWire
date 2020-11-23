<div>

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Login Time</h1>
                <div>
                    @if(session()->has('message'))
                        <div class="bg-green-300 text-white-700 p-3">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <form method="POST" wire:submit.prevent="login">
                <input
                    wire:model = 'form.email'
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="email"
                    placeholder="Email" />
                    @error('form.email') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror

                <input
                    wire:model = 'form.password'
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password"
                    placeholder="Password" />
                    @error('form.password') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror


                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-gray-800 text-white hover:bg-gray-600 focus:outline-none my-1"
                >Log in</button>
                </form>


            </div>


        </div>
    </div>
</div>
