<div>

    <h3 class="text-3xl">Tickets Support : (ID : {{ $ticket_id ?? 'No Ticket Seleted'}})</h3>


    @foreach ($tickets as $ticket)
            <div class="rounded border shadow p-3 my-1  {{ ($ticket->id == $ticket_id ? 'bg-green-300' : '') }}" wire:click="$emit('ticketSelected', {{ $ticket->id }})">
                    {{-- {{ $comment['body'] }} --}}
                    {{ $ticket->question }}
                       {{-- <i class="fas fa-times text-red-200 hover:text-red-600 cursor" wire:click="remove({{ $comment->id }})"></i> --}}
              </div>


    @endforeach

</div>
