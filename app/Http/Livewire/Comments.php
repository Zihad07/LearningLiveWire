<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Faker\Generator as Faker;

class Comments extends Component
{
    public $newComment;

    protected $rules = ['newComment' => 'required|max:255'];
    protected $messages = [
        'newComment.required' => 'Comment Should not be empty.',
        'newComment.max' => 'Comment exceeds over 255 character.',
    ];

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
        // $this->validate(
        //     [
        //         'newComment' => 'required|max:255'
        //     ],
        //     [
        //         'newComment.required' => 'Comment Should not be empty.',
        //         'newComment.max' => 'Comment exceeds over 255 character.',
        //     ]
        // );

        $validate_data =  $this->validate($this->rules, $this->messages);
        $validate_data['user_id'] = 1;
        // dd($validate_data);




            // array_unshift($this->comments, [
            //     'body' => $this->newComment,

            //     'creator' => $faker->name,
            //     'created_at' => Carbon::now()->diffForHumans(),
            // ]);

            // Comment::create(['body' => $this->newComment, 'user_id' => 1]);

            // $this->comments->prepend(Comment::create(['body' => $this->newComment, 'user_id' => 1]));
            $this->comments->prepend(Comment::create(['body' => $validate_data['newComment'], 'user_id' => $validate_data['user_id']]));
            // $this->mount();
            $this->newComment = '';

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
