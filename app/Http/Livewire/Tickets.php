<?php

namespace App\Http\Livewire;

use App\SupportTicket;
use Livewire\Component;

class Tickets extends Component
{
    public $ticket_id;

    protected $listeners = [
        'ticketSelected' => 'ticketSelected'
    ];


    public function ticketSelected($ticketId) {
        $this->ticket_id = $ticketId;
    }
    public function render()
    {
        return view('livewire.tickets', ['tickets' => SupportTicket::latest()->get()]);
    }
}
