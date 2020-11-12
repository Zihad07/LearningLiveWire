<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    private $demo_comment =  [
        'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ut delectus necessitatibus, magnam reprehenderit, voluptatibus repellendus dolorum, fuga eos voluptatum odio? Aut, perspiciatis neque omnis dolores deserunt quasi maxime quibusdam?",

        'creator' => 'Nahid',
        'created_at' => '3min ago',
    ];
    public $comments = [
        [
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ut delectus necessitatibus, magnam reprehenderit, voluptatibus repellendus dolorum, fuga eos voluptatum odio? Aut, perspiciatis neque omnis dolores deserunt quasi maxime quibusdam?",

            'creator' => 'Nahid',
            'created_at' => '3min ago',
        ]
    ];


    public function addComment() {
        array_unshift($this->comments, $this->demo_comment);
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
