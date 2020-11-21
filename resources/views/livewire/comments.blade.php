<div>
    <div class="flex justify-center">
        <div class="w-6/12">
            {{-- <h1 class="my-10 text-3xl">Comments - {{ $newComment }}</h1> --}}
            <h1 class="my-10 text-3xl">Comments -  (Ticket ID : {{ $ticket_id ?? 'No Ticket Seleted'}})</h1>
            <div>
                @if(session()->has('message'))
                    <div class="bg-green-300 text-white-700 p-3">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            @if($image)
                <div>
                    Photo Preview :
                    <div class="card">
                        <img src="{{ $image->temporaryUrl() }}" alt="" width="300">
                    </div>
                </div>
            @endif
            @error('newComment') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
            <form class="my-4 " wire:submit.prevent = "addComment">

                {{-- Image --}}
                <input type="file" wire:model="image">
                @error('image') <span class="error text-red-300 text-xs">{{ $message }}</span>@enderror

                <div class="flex">
                    {{-- <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" wire:model="newComment" placeholder="What's in your mind."> --}}
                    <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" wire:model.lazy="newComment" placeholder="What's in your mind.">

                    <div class="py-2">
                        {{-- <button class="p-2 bg-blue-500 w-20 rounded shadow text-white" wire:click="addComment">Add</button> --}}
                        <button class="p-2 bg-blue-500 w-20 rounded shadow text-white" type="submit">Add</button>
                    </div>

                </div>
            </form>

           @foreach ($comments as $comment)
            <div class="rounded border shadow p-3 my-2">
                @if ($comment->image)
                    <img src="{{ $comment->imagePath }}" class="rounded shadow" alt="">
                @endif
              <div class="flex justify-between">
                <div>
                    <div class="flex justify-start my-2">
                        {{-- <p class="font-bold text-lg">{{ $comment['creator'] }}</p> --}}
                        <p class="font-bold text-lg">{{ $comment->creator->name }}</p>
                        {{-- <p class="mx-3 py1 text-xs text-gray-500 font-semibold">{{ $comment['created_at'] }}</p> --}}
                        <p class="mx-3 py1 text-xs text-gray-500 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>


                    <p class="text-gray-800">
                        {{-- {{ $comment['body'] }} --}}
                        {{ $comment->body }}
                    </p>
                </div>

                <i class="fas fa-times text-red-200 hover:text-red-600 cursor" wire:click="remove({{ $comment->id }})"></i>
              </div>

            </div>
           @endforeach

           {{ $comments->links('custom-pagination-links-view') }}
        </div>

    </div>
</div>
