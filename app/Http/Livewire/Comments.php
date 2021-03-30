<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;


class Comments extends Component
{
    public $newComment;
    public $comments;
    public function render()
    {
        return view('livewire.comments');
    }
    public function AddComment(){
        $this->validate(['newComment'=>'required|max:140']);
        Comment::create(["body"=>$this->newComment, 'user_id'=>1]);
        $this->comments = Comment::all();
        $this->newComment = "";
    }
    public function mount(){
        $intialcomments = Comment::all();
        $this->comments = $intialcomments;
    }
    public function removeComment(Comment $comment){
        $comment->delete();
        $this->comments = Comment::all();
    }
}
