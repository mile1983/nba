<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team

class TeamsController extends Controller
{
         public function index()
        {
            $teams = Post::Team();
            return view('teams.index',compact(['posts']));
        }
    
    
    
    
        public function show($id)
        {   
    
    
            $post = Post::with('comments')->find($id);
            
            return view('posts.show',compact(['post']));
        
        
        
        }
}
