@if($paginator->hasPages())
    <ul class="flex justify-between">
        {{-- previous page start --}}
        @if ($paginator->onFirstPage())
            <li class="w-20 p-2 text-center bg-gray-400 text-gray rounded">Previous</li>
            @else
            <li wire:click="previousPage" class="w-20 p-2 text-center bg-white rounded shadow cursor-pointer">Previous</li>

        @endif
        {{-- previous page end --}}

        {{-- Next page start --}}
        @if ($paginator->hasMorePages())
            <li wire:click="nextPage" class="w-20 p-2 text-center bg-white rounded shadow cursor-pointer">Next</li>
        @else
            <li class="w-20 p-2 text-center bg-gray-400 text-gray rounded">Next</li>

        @endif
        {{-- Next page start --}}


    </ul>
  @endif
