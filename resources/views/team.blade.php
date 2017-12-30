<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       

        <title>Teams</title>

  
       
    </head>
    <body>
            <h1>{{$team->name}}</h1>
            <p>{{$team->email}}</p>
            <p>{{$team->addres}}</p>
            <p>{{$team->city}}</p>
            

            <ul>
                    @foreach($team->players as $player)
                    <li>
                   <a href ='{{route("single-player",["id"=>$player->id])}}'>
                    {{$player->name}}
                    
                     </a> 
                    </li>
           
                    @endforeach
                </ul>

                <ul>
                    @foreach($team->comments as $comment)
                    <li>
                   
                    {{$comment->content}}
                    
                    
                    </li>
           
                    @endforeach
                </ul>


                <h4>Post a comment</h4>

                <form method="POST" action="{{ route('comments-post', ['team_id' => $team->id]) }}">
            
                    {{ csrf_field() }}
            
                    <div class="form-group">
                        <label for="author">Your name:</label>
                        <input type="text" class="form-control" id="id" name="name"/>
                        
                    </div>
            
                    <div class="form-group">
                        <label for="text">Comment:</label>
                        <textarea class="form-control" id="text" name="text"></textarea>
                    </div>
            
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            
                </form>
            




    </body>
</html>
