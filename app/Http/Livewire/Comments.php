<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Faker\Generator as Faker;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;
    public $newComment;

    // public Comment $comment;


    protected $rules = ['newComment' => 'required|max:255'];
    protected $messages = [
        'newComment.required' => 'Comment Should not be empty.',
        'newComment.max' => 'Comment exceeds over 255 character.',
    ];

    // public $comments = [
    //     [
    //         'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ut delectus necessitatibus, magnam reprehenderit, voluptatibus repellendus dolorum, fuga eos voluptatum odio? Aut, perspiciatis neque omnis dolores deserunt quasi maxime quibusdam?",

    //         'creator' => 'Nahid',
    //         'created_at' => '3min ago',
    //     ]
    // ];


    // public function mount($comments) {
    public function mount() {
        // $this->newComment = 'This is coming from mount';
        // dd($comments);
        // $this->comments = $comments;
        // $this->comments = Comment::latest()->get();


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
            // $this->comments->prepend(Comment::create(['body' => $validate_data['newComment'], 'user_id' => $validate_data['user_id']]));
            Comment::create(['body' => $validate_data['newComment'], 'user_id' => $validate_data['user_id']]);
            // $this->mount();
            $this->newComment = '';

            session()->flash('message', 'Comment added successfully.😊');

    }

    public function remove($comment_id) {
        $comment_delete = Comment::find($comment_id);
        $comment_delete->delete();

        // $this->comment->where('id', '=', $comment_id)->delete();
        // $this->comments = $this->comments->where('id', '!=', $comment);
        // $this->comments= $this->comments->filter(function($each_comment) use($comment_id){ return $each_comment->id != $comment_id;});
        // dd($this->comments);
        session()->flash('message', 'Comment deleted successfully.😠');
    }
    public function render()
    {
        return view('livewire.comments', ['comments' => Comment::latest()->paginate(2)]);
    }
}
