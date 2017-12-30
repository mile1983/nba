<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    
    public function store($team_id)
    {
        $this->validate(request(), ['text' => 'required | min:10']);
        
       Comment::create([ 
            'content' => request('text'),
            'user_id' => Auth()->user()->id,
            'team_id' => $team_id,
        ]);
        return redirect()->route('single-team', ['id' => $team_id]);
    } 
    
}