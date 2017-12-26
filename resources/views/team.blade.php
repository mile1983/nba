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
                    {{$player->first_name}}
                    {{$player->last_name}}
                    
                     </a> 
                    </li>
           
                    @endforeach
                </ul>







    </body>
</html>
