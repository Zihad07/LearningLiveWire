<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Faker\Generator as Faker;

class Comments extends Component
{
    public $newComment;

    public $comments = [
        [
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ut delectus necessitatibus, magnam reprehenderit, voluptatibus repellendus dolorum, fuga eos voluptatum odio? Aut, perspiciatis neque omnis dolores deserunt quasi maxime quibusdam?",

            'creator' => 'Nahid',
            'created_at' => '3min ago',
        ]
    ];


    // public function mount($comments) {
    public function mount() {
        // $this->newComment = 'This is coming from mount';
        // dd($comments);
        // $this->comments = $comments;
        $this->comments = Comment::latest()->get();

        // dd($this->comments);
    }


    public function addComment(Faker $faker) {

        if($this->newComment === '' or $this->newComment === null) { return ;}
        else {

            array_unshift($this->comments, [
                'body' => $this->newComment,

                'creator' => $faker->name,
                'created_at' => Carbon::now()->diffForHumans(),
            ]);
            $this->newComment = '';
        }
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
